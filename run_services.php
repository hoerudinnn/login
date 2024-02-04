<?php

require 'vendor/autoload.php'; // Sesuaikan dengan lokasi file autoload.php Anda

use Myth\Auth\Config\Services;

// Panggil metode yang ingin Anda cek (misalnya, activator)
$result = Services::activator();

// Tampilkan output dari var_dump
var_dump($result);
