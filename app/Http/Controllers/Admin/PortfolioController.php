<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Image; // استيراد المودل الجديد
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::with('category', 'images')->latest()->paginate(10);
        return view('admin.portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.portfolios.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'images' => 'required|array|min:1',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $portfolio = Portfolio::create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $imageFile) {
                $path = $imageFile->store('portfolios', 'public');

                Image::create([
                    'portfolio_id' => $portfolio->id,
                    'path' => $path,
                ]);
            }
        }

        return redirect()->route('admin.portfolios.index')
            ->with('success', 'تم إضافة العمل الفني بنجاح');
    }

    public function edit(Portfolio $portfolio)
    {
        $categories = Category::all();
        $portfolio->load('images');
        return view('admin.portfolios.edit', compact('portfolio', 'categories'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'images' => 'sometimes|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $portfolio->update([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $imageFile) {
                $path = $imageFile->store('portfolios', 'public');

                Image::create([
                    'portfolio_id' => $portfolio->id,
                    'path' => $path
                ]);
            }
        }

        return redirect()->route('admin.portfolios.index')
            ->with('success', 'تم تحديث العمل الفني بنجاح');
    }

    public function destroy(Portfolio $portfolio)
    {
        foreach ($portfolio->images as $image) {
            Storage::disk('public')->delete($image->image);
        }

        $portfolio->delete();

        return redirect()->route('admin.portfolios.index')
            ->with('success', 'تم حذف العمل الفني بنجاح');
    }

    public function deleteImage($id)
    {
        $image = Image::findOrFail($id);

        Storage::disk('public')->delete($image->image);

        $image->delete();

        return back()->with('success', 'تم حذف الصورة بنجاح');
    }
}
