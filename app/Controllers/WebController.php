<?php
namespace App\Controllers;

class WebController extends BaseController
{ 
    public function index()
    {
    return view('beranda');
    }

    public function kontak()
    {
    return view('view-kontak');
    }

    public function gallery()
    {
    return view('view-gallery');
    }
} 
