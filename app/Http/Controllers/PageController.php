<?php

namespace App\Http\Controllers;

use App\Models\Page;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    //

    public function index(){

        $pages = Page::all();

        return Inertia::render('PageManager', ['pages'=>$pages]);
    }
}
