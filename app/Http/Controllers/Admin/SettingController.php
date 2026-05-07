<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function edit()
    {
        $setting = Setting::first();

        return view('admin.settings.edit', compact('setting'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'hero' => 'nullable|string|max:255',
            'about' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'cv' => 'nullable|mimes:pdf,doc,docx|max:5120',
        ]);

        $setting = Setting::first();

        if (!$setting) {
            $setting = new Setting();
        }

        $setting->hero = $request->hero;
        $setting->about = $request->about;

        // Image
        if ($request->hasFile('image')) {

            if ($setting->image) {
                Storage::disk('public')->delete($setting->image);
            }

            $setting->image = $request->file('image')
                ->store('settings', 'public');
        }

        // CV
        if ($request->hasFile('cv')) {

            if ($setting->cv) {
                Storage::disk('public')->delete($setting->cv);
            }

            $setting->cv = $request->file('cv')
                ->store('settings/cv', 'public');
        }

        $setting->save();

        return back()->with('success', 'تم تحديث الإعدادات بنجاح');
    }
}
