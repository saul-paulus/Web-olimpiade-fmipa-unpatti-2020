<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Webosmipa extends Controller
{
    public function index(){
        $data = [
            "active" => "beranda",
            "urlSd" => "https://www.bit.ly/olimpiadesainsmipa-SD",
            "urlSmp" => "https://www.bit.ly/olimpiademipasmp",
            "urlSma"=>"https://docs.google.com/forms/d/e/1FAIpQLScmG5LlZxBqMOJivcDlIWwNNEe_JvDqJuIdkzX3kgJ8W0hk3g/viewform",
            "urlPanduan"=>"https://drive.google.com/file/d/1PwSlgtKEiFWhClZ--6BwCCZV6JIlDYmh/view?usp=sharing"
        ];
        return view('pages.beranda', $data);
    }

    public function tentang(){
        $data = [
            "active" => "tentang",
        ];
        return view('pages.tentang', $data);
    }

    public function osmipa(){
        $data = [
            "active" => "osmipa",
            "urlSd" => "https://bit.ly/olimpiadesainsmipa-SD",
            "urlSmp" => "https://bit.ly/olimpiademipasmp",
            "urlSma"=>"https://bit.ly/olimpiadesainsmipasma",
            "urlPanduan"=>"https://drive.google.com/file/d/1PwSlgtKEiFWhClZ--6BwCCZV6JIlDYmh/view?usp=sharing"
        ];
        return view('pages.osmipa', $data);
    }
    public function galerifoto(){
        $data = [
            "active" => "galeri",
        ];

        return view('pages.galeri', $data);
    }

    public function kontak(){
        $data = [
            "active" => "kontak",
        ];
        return view('pages.kontak', $data);
    }
}