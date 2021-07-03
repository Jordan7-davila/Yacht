<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Http;

class yachtlist extends Controller
{
    //
    function index() {
        $data = Http::get('https://api.boats.com/inventory/search?key=eyr7sa7ep29xzwjftpbspzdvf59k77')->json();
        return view('yachtlist', ['data' => $data]);
    }
}
