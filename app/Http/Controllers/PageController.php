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


    public function resolovePages(Request $request){

        $pages = Page::all();

        $request_path = $request->path();

        $page = Page::with('sections.slides')->where('url',$request_path)->get();

        $page_sections = $page[0]->sections;
        
        return Inertia::render('PageResolver',['menu_items'=> $pages,'page_sections'=>   $page_sections]);



    }


}
