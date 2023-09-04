<?php

namespace App\Http\Controllers;

use App\Destinations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DestinationsController extends Controller
{

    public function index()
    {
        $historicals = Destinations::select('title', 'caption', 'location', 'open_schedule', 'image_path')
                            ->where('tag', 'historical landmark')->limit(7)->get();

        $islands = Destinations::select('title', 'caption', 'location', 'open_schedule', 'image_path')
                            ->where('tag', 'island beaches')->limit(7)->get();

        $nature = Destinations::select('title', 'caption', 'location', 'open_schedule', 'image_path')
                            ->where('tag', 'nature camp')->limit(7)->get();

        $dine_ins = Destinations::select('title', 'caption', 'location', 'open_schedule', 'image_path')
                            ->where('tag', 'local dinein')->limit(7)->get();

        
        return view('page.wheretogo', compact('historicals', 'islands', 'nature', 'dine_ins'));
    }

}
