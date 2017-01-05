<?php
namespace App\Controller;

class PagesController
{
    public function index()
    {
        return view('index');

    }

    public function about()
    {
        return view('about');
    }
}