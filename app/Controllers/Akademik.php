<?php

namespace App\Controllers;

use App\Models\DokumenModel;

class Akademik extends BaseController
{
    public function index()
    {
        $model = new DokumenModel();
        $data['dokumen'] = $model->findAll();

        $data['title'] = "Kegiatan Akademik";
        // Logika untuk menampilkan data kegiatan akademik
        return view('akademik/index', $data);
    }
    public function kegiatanWawasan()
    {
        $model = new DokumenModel();
        $data['dokumen'] = $model->findAll();

        // Logika untuk menampilkan data kegiatan akademik
        return view('kegiatan_akademik/index', $data);
    }
}
