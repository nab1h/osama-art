<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificate::latest()->paginate(10);
        return view('admin.certificates.index', compact('certificates'));
    }

    public function create()
    {
        return view('admin.certificates.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'issued_by' => 'required|string|max:255',
            'date' => 'required|date',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('certificates', 'public');
        }

        Certificate::create([
            'name' => $request->name,
            'title' => $request->title,
            'issued_by' => $request->issued_by,
            'date' => $request->date,
            'description' => $request->description,
            'image' => $path,
        ]);

        return redirect()->route('admin.certificates.index')
            ->with('success', 'تم إضافة الشهادة بنجاح');
    }

    public function edit(Certificate $certificate)
    {
        return view('admin.certificates.edit', compact('certificate'));
    }

    public function update(Request $request, Certificate $certificate)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'issued_by' => 'required|string|max:255',
            'date' => 'required|date',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $path = $certificate->image;

        if ($request->hasFile('image')) {
            if ($path) {
                Storage::disk('public')->delete($path);
            }
            $path = $request->file('image')->store('certificates', 'public');
        }

        $certificate->update([
            'name' => $request->name,
            'title' => $request->title,
            'issued_by' => $request->issued_by,
            'date' => $request->date,
            'description' => $request->description,
            'image' => $path,
        ]);

        return redirect()->route('admin.certificates.index')
            ->with('success', 'تم تحديث الشهادة بنجاح');
    }

    public function destroy(Certificate $certificate)
    {
        if ($certificate->image) {
            Storage::disk('public')->delete($certificate->image);
        }

        $certificate->delete();

        return redirect()->route('admin.certificates.index')
            ->with('success', 'تم حذف الشهادة بنجاح');
    }
}
