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
    public function roky()
    {
        $builder = $this->race_year->builder();
        $query = $builder->select('year')
                        ->distinct()
                        ->orderBy('year', 'DESC')
                        ->get();
        
        $data['roky'] = $query->getResult();
        
        return view('roky', $data);
    }
    public function hlavniStranka($rok)
    {
        $data["zavodyZenskeKategorie"] = $this->race_year->where('sex', 'W')->where("year",$rok)->findAll();
        echo view("hlavniStranka", $data);
    }
    public function pridaniZavodu()
    {
        helper('form');
        $data["zavodyZenskeKategorie"] = $this->race_year->select('country')->where('sex', 'W')->orderBy('country', 'asc')->groupBy('country')->get()->getResult();
        echo view("pridaniZavodu", $data);
    }
    public function ulozeniZavodu()
    {
        $sex = $this->request->getPost('sex');
        $year = $this->request->getPost('year');
        $real_name = $this->request->getPost('real_name');
        $start_date = $this->request->getPost('start_date');
        $end_date = $this->request->getPost('end_date');
        $category = $this->request->getPost('category');
        $country = $this->request->getPost('country');
        $databaze = \Config\Database::connect();
        $stavitel = $databaze->table('race_year');
        $stavitel->insert(['sex' => $sex,
        'year' => $year,
        'real_name' => $real_name,
        'start_date' => $start_date,
        'end_date' => $end_date,
        'category' => $category,
        'country' => $country]);
        return redirect()->to('/');
    }
}
