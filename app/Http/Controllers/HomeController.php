<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $annonces = Annonce::orderBy('created_at', 'desc')->paginate(12);
        $categories = Category::all();
        return view('welcome', compact('annonces', 'categories'));
    }
}
