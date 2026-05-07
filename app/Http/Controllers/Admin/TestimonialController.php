<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testmnial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageMail;

class TestimonialController extends Controller

{

    public function index() {
        $testimonials = Testmnial::all();

        return view('admin.testimonials.index', compact('testimonials'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        $message = Testmnial::create([
            'name' => $request->name,
            'message' => $request->message,
        ]);

        Mail::to(env('MY_MAIL'))->send(
            new MessageMail($message)
        );

        return back()->with('success', 'تم إرسال رأيك بنجاح');
    }

    public function toggle(Testmnial $testimonial)
    {
        $testimonial->update([
            'is_visible' => !$testimonial->is_visible
        ]);

        return back();
    }


    public function destroy(Testmnial $testimonial)
    {
        $testimonial->delete();

        return back()->with('success', 'تم حذف التقييم بنجاح');
    }
}
