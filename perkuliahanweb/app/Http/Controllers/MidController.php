<?php

namespace App\Http\controllers;

class MidController extends controller  
{
    function sfh($nama) {
        return view("sfh")
        ->with("nama", $nama) 
        ->with("mk", "Web Lanjut")
        ->with("waktu", date("H:m:s"))
        ->with("kampus", "Universitas Muhammadiyah Purwokerto");
    }

}
