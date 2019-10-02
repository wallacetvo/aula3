<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function __construct()
    {
        //$this->middleware('soeuposso');
    }

    public function index()
    {
        return view('teste');
    }

    public function posta(request $request)
    {
        return "POSTANDO $request->nome";
    }

    public function put(request $request)
    {
        return "FAZENDO PUT $request->nome";
    }

    public function patch(request $request)
    {
        return "FAZENDO PATCH $request->nome";
    }

    public function delete(request $request)
    {
        return "FAZENDO DELETE $request->nome";
    }
}
