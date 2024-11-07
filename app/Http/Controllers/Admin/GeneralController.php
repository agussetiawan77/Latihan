<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class GeneralController extends Controller
{
    function about() {
        $title = 'Tentang Web';
        return view('frontend.page.about.index',[
            'title_page' => $title
        ]); 
    }
        function exp() {
            $title = 'Tentang Web';
            return view('frontend.page.exp.index',[
                'title_page' => $title
        ]); 
    }
        function education() {
            $title = 'Tentang Web';
            return view('frontend.page.education.index',[
                'title_page' => $title
        ]); 
    }
        function skills() {
            $title = 'Tentang Web';
            return view('frontend.page.skills.index',[
                'title_page' => $title
        ]);
    } 
        function interests() {
            $title = 'Tentang Web';
            return view('frontend.page.interests.index',[
                'title_page' => $title
        ]);
    } 
        function awards() {
            $title = 'Tentang Web';
            return view('frontend.page.awards.index',[
                'title_page' => $title
        ]); 
    }
    
}
