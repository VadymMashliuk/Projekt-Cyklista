<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\Zavody;

class Home extends BaseController
{
    public function __construct()
    {
        $this->race_year = new Zavody();
    }
    public function index(): string
    {
        return view('welcome_message');
    }
    public function hlavniStranka()
    {
        $data["zavodyZenskeKategorie"] = $this->race_year->where('sex', 'W')->findAll();
        echo view("hlavniStranka", $data);
    }
    public function pridaniZavodu()
    {
        helper('form');
        echo view("pridaniZavodu");
    }
}
