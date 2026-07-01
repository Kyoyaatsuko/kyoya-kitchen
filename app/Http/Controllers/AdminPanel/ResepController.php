<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResepController extends Controller
{
    public function index()
    {
        return view('admin-panel.resep.index');
    }

    public function showCreate()
    {
        return view('admin-panel.resep.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'ingredients' => 'required|string',
            'steps' => 'required|string',
            'cook_time' => 'nullable|integer',
            'servings' => 'nullable|integer',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('recipes', 'public');
        }

        Recipe::create([
            'user_id' => auth()->id(),
            'title' => $validated['title'],
            'description' => $validated['description'] ?? null,
            'ingredients' => $validated['ingredients'],
            'steps' => $validated['steps'],
            'cook_time' => $validated['cook_time'] ?? null,
            'servings' => $validated['servings'] ?? null,
            'image' => $imagePath,
        ]);

        return redirect()->route('resep.index')
            ->with('success', 'Resep berhasil ditambahkan!');
    }
}
