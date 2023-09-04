<?php

namespace App\Http\Controllers;

use App\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
   function Info(){

    $sideInfo1 = Information::whereBetween('id', [0, 4])->get();

    $sideInfo1 = $sideInfo1->pluck('body', 'title');

    $sideInfo2 = Information::whereBetween('id', [5, 11])->get();

    $sideInfo2 = $sideInfo2->pluck('body', 'title');

    $sideFestivals = Information::where('tags', 'festivals')->get();

    $sideFestivals = $sideFestivals->pluck('body', 'title');

    $sideZipCodes = Information::where('tags', 'zipcode')->get();

    $sideZipCodes = $sideZipCodes->pluck('body', 'title');

    $eventsTimeline = Information::where('tags', 'timeline')->orderBy('id', 'desc')->get();

    $eventsTimeline = $eventsTimeline->pluck('body', 'title');

    $faqs = Information::where('tags', 'faqs')->get();

    $faqs = $faqs->pluck('body', 'title');

    return view('page.about', compact('sideInfo1', 'sideInfo2',
                                       'sideFestivals', 'sideZipCodes',
                                       'eventsTimeline', 'faqs'));
                                       
   }
}
