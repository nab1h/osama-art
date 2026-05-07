<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Certificate;
use App\Models\SocialLink;
use App\Models\Achievement;
use App\Models\Category;
use App\Models\Testmnial;
use App\Mail\ContactMail;
use App\Models\Setting;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $certificates = Certificate::all();
        $achievements = Achievement::all();
        $testimonials = Testmnial::where('is_visible', true)
        ->latest()
        ->get();
        $query = Portfolio::with('images', 'category')->latest();

        if (request('category_id')) {
            $query->where('category_id', request('category_id'));
        }

        $portfolios = $query->paginate(9)
            ->appends(request()->query())
            ->fragment('portfolio');

        $socialLink = SocialLink::first();
        $settings = Setting::first();

        return view('welcome', compact('portfolios', 'categories', 'certificates', 'achievements', 'socialLink', 'testimonials', 'settings'));
    }


    public function show(Portfolio $portfolio)
    {
        $portfolio->load('images', 'category');

        return view('portfolio.show', compact('portfolio'));
    }


    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        Mail::to(env('MY_MAIL'))->send(
            new ContactMail($request->all())
        );

        return back()->with('success', 'تم إرسال رسالتك بنجاح');
    }
}
