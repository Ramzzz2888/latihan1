<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosterController extends Controller
{
    public function submit(Request $request)
    {
        // Validate and store the file
        $path = $request->file('poster_photo')->store('poster_photo','public');

        // Gather data to pass to the view
        $data = $request->only(['name', 'kelas','judul']);
        $data['photo_path'] = $path;

        return view('form_result', ['data' => $data]);
    }
}