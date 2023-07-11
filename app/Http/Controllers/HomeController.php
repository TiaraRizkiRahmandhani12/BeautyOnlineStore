<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Online Store";
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About us - Online Store";
        $viewData["subtitle"] =  "About us";
        $viewData["description"] =  "Beauty Glow adalah sebuah toko kosmetik yang menawarkan berbagai produk kecantikan untuk mempercantik dan merawat kulit Anda. Dengan koleksi produk yang berkualitas dan terjamin, Beauty Glow menyediakan pilihan terbaik untuk memenuhi kebutuhan perawatan kulit dan kecantikan Anda. Dari produk perawatan wajah, perawatan tubuh, hingga produk makeup, Beauty Glow memiliki beragam opsi yang dapat membantu Anda mencapai tampilan yang segar dan mempesona. Dengan komitmen untuk kualitas, kepuasan pelanggan, dan tren terkini dalam industri kecantikan, Beauty Glow adalah tujuan utama bagi para pecinta kosmetik yang ingin menonjolkan keindahan alami mereka.";
        $viewData["author"] = "Developed by: Tiara Rizki";
        $viewData["address"] = "Address = Jl. Tembalang";
        $viewData["contact"] = "Contact = 123-456-7890";
        $viewData["offline_store"] = "Offline_store = Beauty Glow";
        $viewData["email"] = "Email = info@example.com";
        return view('home.about')->with("viewData", $viewData);
    } 
}
