<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class IndexController extends Controller
{
    public function index()
    {
        $faqs = Faq::where('is_visible', true)->get();
        return view('index', compact('faqs'));
    }
}
