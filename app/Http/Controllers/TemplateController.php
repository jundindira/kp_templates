<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index() {

        // $templates = Template::all(); // Jika ada model Template
        return view('templates.index');

    }

}
