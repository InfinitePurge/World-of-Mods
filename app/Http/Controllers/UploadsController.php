<?php

namespace App\Http\Controllers;

use App\Models\Uploads;
use Illuminate\Http\Request;

class UploadsController extends Controller
{
    public function index()
    {
        $uploads = Uploads::all();
        return view('Uploads', compact('uploads'));
    }
    public function store(Request $request)
    {
        $validated = $request -> validate([
            'type' =>"required",
            'game' =>"required",
            'name' => "required|max:20",
            'version' => "required|max:20",
            'author' => "required|max:20",
            'overview' => "required|max:100",
            'description' => "required|max:1000",
            'language' => 'required|max:69'
        ]);
        Uploads::create([
            'type' => request('type'),
            'name' => request('name'),
            'game' => request('game'),
            'version' => request('version'),
            'author' => request('author'),
            'overview' => request('overview'),
            'description' => request('description'),
            'language' => request('language')
            //'owner' => 1
        ]);

        return redirect('/dashboard');
    }
}
