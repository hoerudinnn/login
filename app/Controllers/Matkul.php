<?php

namespace App\Controllers;

class Matkul extends BaseController
{
    public function index()
    {
        $data ['title'] = 'Mata Kuliah';
        return view('mata-kuliah/index', $data);
    }

    public function addKuliah() // Ubah nama fungsi menjadi addKuliah
    {
        $data['title'] = 'Add Kuliah';
        return view('mata-kuliah/add', $data);
    }
}