<?php

namespace App\Controllers;

class Move extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function sell(): string
    {
        return view('sell');
    }

    public function hasil(): string
    {
        return view('hasil');
    }

    public function graph(): string
    {
        return view('graph');
    }
}
