<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $annonces = Annonce::all();
        return view('admin.annonces.index', compact('annonces'));
    }

    public function myannonces()
    {
        $user = User::find(Auth::user()->id);
        $annonces = $user->annonces()->orderBy('created_at', 'desc')->get();
        $categories = Category::all();
        return view('annonces.my-annonces', compact('annonces', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'string'],
            'country' => ['required', 'string'],
            'city' => ['required', 'string'],
            'disponibility' => ['required', 'date'],
            'equipements' => ['required', 'string'],
            'category_id' => ['required', 'numeric'],
            'price' => ['required', 'numeric'],
            'images' => ['required', 'image', 'mimes:jpeg,png,jpg,jfif', 'max:2048'],
        ]);
        
        if ($request->hasFile('images')) {
            $image = $request->file('images');

            $imagePath = $image->store('annonces', 'public');
            $data['images'] = $imagePath;
            $data["user_id"] = Auth::user()->id;

            Annonce::create($data);
            return to_route('annonces.myannonces')->with('message', 'Annonce created with succes');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $annonce = Annonce::find($id);
        return view('annonces.show', compact('annonce'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $annonce = Annonce::find($id);
        $categories = Category::all();
        return view('annonces.edit', compact('categories', 'annonce'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'title' => ['required', 'string'],
            'country' => ['required', 'string'],
            'city' => ['required', 'string'],
            'disponibility' => ['required', 'date'],
            'equipements' => ['required', 'string'],
            'category_id' => ['required', 'numeric'],
            'price' => ['required', 'numeric'],
            'images' => ['nullable', 'image', 'mimes:jpeg,png,jpg,jfif', 'max:2048'],
        ]);

        $annonce = Annonce::findOrFail($id);
        
        if ($request->hasFile('images')) {
            if ($annonce->images && Storage::exists($annonce->images))
                Storage::delete($annonce->images);

            $imagePath = $request->file('images')->store('annonces', 'public');
            
            $data['images'] = $imagePath;
        } else {
            unset($data['images']);
        }
        
        $annonce->update($data);
        return to_route('annonces.myannonces')->with('message', 'Annonce updated with succes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Annonce::destroy($id);
        return back()->with('message', 'annonce deleted with succes');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $date = $request->input('date');
        $annonces = Annonce::search($search);

        $categories = Category::all();

        return view('welcome', compact('annonces', 'categories', 'search'));
    }
}
