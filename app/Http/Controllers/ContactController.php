<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;

class ContactController extends Controller
{
    public function create(){
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:posts|max:20',
            'email' => 'required|unique:posts|max:255',
            'question' => 'required|unique:posts|max:255',
        ]);

        Contacts::create($validated);

        return redirect()->route('contacts.index')->with('success', 'Sitas postiš ir uztaisits veiksmigi.');
    }
    public function index()
    {
        $posts = Contacts::all();
        return view('contacts.index', ['posts' => $posts]);
    }
}
