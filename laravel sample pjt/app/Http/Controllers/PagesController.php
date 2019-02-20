<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title="Neethu C Joseph";
        //return view('pages.index',compact('title'));
        return view('pages.index')->with('name',$title);
    }
    public function about()
    {
        return view('pages.about');
    }
    public function service()
    {
        return view('pages.service');
    }
}
