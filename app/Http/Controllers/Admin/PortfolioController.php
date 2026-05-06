<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::with('category')->latest()->paginate(10);
        return view('admin.portfolios.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.portfolios.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'images' => 'required|array|min:1',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $imagesPaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('portfolios', 'public');
                $imagesPaths[] = $path;
            }
        }

        Portfolio::create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'images' => $imagesPaths,
        ]);

        return redirect()->route('admin.portfolios.index')
            ->with('success', 'تم إضافة العمل الفني بنجاح');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
        $categories = Category::all();
        return view('admin.portfolios.edit', compact('portfolio', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'images' => 'sometimes|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $imagesPaths = $portfolio->images;

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('portfolios', 'public');
                $imagesPaths[] = $path;
            }
        }

        $portfolio->update([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'images' => $imagesPaths,
        ]);

        return redirect()->route('admin.portfolios.index')
            ->with('success', 'تم تحديث العمل الفني بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->images) {
            foreach ($portfolio->images as $image) {
                Storage::disk('public')->delete($image);
            }
        }

        $portfolio->delete();

        return redirect()->route('admin.portfolios.index')
            ->with('success', 'تم حذف العمل الفني بنجاح');
    }

    /**
     * Delete a single image from portfolio (Optional helper)
     */
    public function deleteImage(Portfolio $portfolio, $index)
    {
        $images = $portfolio->images;
        if (isset($images[$index])) {
            Storage::disk('public')->delete($images[$index]);
            unset($images[$index]);
            $portfolio->images = array_values($images); // Re-index array
            $portfolio->save();
            return back()->with('success', 'تم حذف الصورة');
        }
        return back();
    }
}
