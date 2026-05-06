<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PageController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::latest()->paginate(6, ['*'], 'portfolio_page');
        return view('welcome', compact('portfolios'));
    }
}
