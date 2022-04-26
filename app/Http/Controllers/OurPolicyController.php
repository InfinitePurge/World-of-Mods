<?php

namespace App\Http\Controllers;

use App\Models\OurPolicy;
use Illuminate\Http\Request;

class OurPolicyController extends Controller
{
    public function index()
    {
        $ourpolicy = OurPolicy::all();
        return view('OurPolicy', compact('ourpolicy'));
      
    }

}
