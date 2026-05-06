<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Category;

class PageController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $query = Portfolio::with('images', 'category')->latest();

        if (request('category_id')) {
            $query->where('category_id', request('category_id'));
        }

        $portfolios = $query->paginate(9)
            ->appends(request()->query())
            ->fragment('portfolio');

        return view('welcome', compact('portfolios', 'categories'));
    }


    public function show(Portfolio $portfolio)
    {
        $portfolio->load('images', 'category');

        return view('portfolio.show', compact('portfolio'));
    }
}
