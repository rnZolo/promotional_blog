<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function index()
    {
        $festivals = Gallery::select('title', 'body', 'image_path')
                            ->where('tag', 'festival')->get();

        $products = Gallery::select('title', 'body', 'image_path')
                            ->where('tag', 'products')->get();

        $delicacies = Gallery::select('title', 'body', 'image_path')
                            ->where('tag', 'delicacies')->get();

        return view('page.gallery', compact('festivals','products', 'delicacies'));
    }
    
}
