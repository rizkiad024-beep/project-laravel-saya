<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    // Home page with dynamic table
    public function index()
    {
        $info = Info::latest()->first();
        return view('home', ['info' => $info]);
    }

    // Show 'Tentang Kami' page with form
    public function tentang()
    {
        return view('tentang');
    }

    // Store form submission from Tentang page as latest Info
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'nullable|string|max:255',
            'content' => 'nullable|string',
            'alamat' => 'nullable|string|max:255',
            'ig_link' => 'nullable|url|max:255',
            'whatsapp' => 'nullable|string|max:50',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/uploads');
            $data['image_path'] = $path;
        }

        // Create new info entry
        $info = Info::create([
            'title' => $data['title'] ?? 'Info Terbaru',
            'content' => $data['content'] ?? null,
            'alamat' => $data['alamat'] ?? null,
            'ig_link' => $data['ig_link'] ?? null,
            'whatsapp' => $data['whatsapp'] ?? null,
            'image_path' => $data['image_path'] ?? null,
        ]);

        return redirect()->route('info.show', ['id' => $info->id])->with('success', 'Info terbaru berhasil disimpan.');
    }

    // Show a single info (or latest)
    public function show($id = null)
    {
        if ($id) {
            $info = Info::findOrFail($id);
        } else {
            $info = Info::latest()->firstOrFail();
        }
        return view('info', ['info' => $info]);
    }
}
