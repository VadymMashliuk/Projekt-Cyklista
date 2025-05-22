<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
    }
    public function index(): string
    {
        return view('welcome_message');
    }
    public function hlavniStranka()
    {
        echo view("hlavniStranka");
    }
}
