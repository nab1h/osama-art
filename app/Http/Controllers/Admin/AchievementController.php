<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AchievementController extends Controller
{
    public function index()
    {
        $achievements = Achievement::latest()->paginate(10);
        return view('admin.achievements.index', compact('achievements'));
    }

    public function create()
    {
        return view('admin.achievements.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'year' => 'required|string|max:10',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('achievements', 'public');
        }

        Achievement::create([
            'name' => $request->name,
            'description' => $request->description,
            'year' => $request->year,
            'image' => $path,
        ]);

        return redirect()->route('admin.achievements.index')
            ->with('success', 'تم إضافة الإنجاز بنجاح');
    }

    public function edit(Achievement $achievement)
    {
        return view('admin.achievements.edit', compact('achievement'));
    }

    public function update(Request $request, Achievement $achievement)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'year' => 'required|string|max:10',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $path = $achievement->image;

        if ($request->hasFile('image')) {
            if ($path) {
                Storage::disk('public')->delete($path);
            }
            $path = $request->file('image')->store('achievements', 'public');
        }

        $achievement->update([
            'name' => $request->name,
            'description' => $request->description,
            'year' => $request->year,
            'image' => $path,
        ]);

        return redirect()->route('admin.achievements.index')
            ->with('success', 'تم تحديث الإنجاز بنجاح');
    }

    public function destroy(Achievement $achievement)
    {
        if ($achievement->image) {
            Storage::disk('public')->delete($achievement->image);
        }

        $achievement->delete();

        return redirect()->route('admin.achievements.index')
            ->with('success', 'تم حذف الإنجاز بنجاح');
    }
}
