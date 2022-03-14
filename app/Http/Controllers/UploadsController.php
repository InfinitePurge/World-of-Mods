<?php

namespace App\Http\Controllers;

use App\Models\Uploads;
use Illuminate\Http\Request;

class UploadsController extends Controller
{
    public function index()
    {
        return view('Uploads');
    }
    public function store(Request $request)
    {
        $validated = $request -> validate([
            'language' => "required|max:10",
            'name' => "required|max:20",
            'version' => "required|max:20",
            'author' => "required|max:20",
            'overview' => "required|max:100",
            'description' => "required|max:1000"
        ]);
        Uploads::create([
            'language' => request(),
            'name' => request(),
            'version' => request(),
            'author' => request(),
            'overview' => request(),
            'description' => request()
            //'owner' => 1
        ]);

        return redirect('/');
    }
}
