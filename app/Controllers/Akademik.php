<?php

namespace App\Controllers;

use App\Models\DokumenModel;

class Akademik extends BaseController
{
    public function index()
    {
        $data['title'] = "Kegiatan Akademik";

        $model = new DokumenModel();
        $data['dokumen'] = $model->findAll();

        // Logika untuk menampilkan data kegiatan akademik
        return view('akademik/index', $data);
    }
    public function rekap()
    {
        $data['title'] = "Rekap File";

        $model = new DokumenModel();
        $data['dokumen'] = $model->findAll();
        
        // Logika untuk menampilkan data kegiatan akademik
        return view('rekap/index', $data);
    }
}
