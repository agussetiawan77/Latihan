<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class GeneralController extends Controller
{
    function about() {
        $title = 'Tentang kami'; //mengisi judul url isi kata yagn kita mau
        $data = [
            'nama' => 'KKS Group',
            'alamat' => 'Jl. Cempaka Biru No 17 Buluh Indah Denpasar',
            'no telepon' => '0361-419299'
        ];
        
        return view('frontend.page.about.index',[
                'title_page' => $title, 
                'data' => $data
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
            $title = 'skils';;
            $title2 = 'Keahlian Yang Dimiliki '; //mengisi judul url isi kata yagn kita mau
            $data = [
                'head' => [
                    [
                        'nama' => 'Computer Programmer',
                        'divisi' => 'Aksara Konsultama',
                        ''
                        ]
                    ],
                    [
                        'nama' => 'Register Tax Consultant',
                        'divisi' => 'KKP Wayan Keresna',
                        ]

                    ];
            return view('frontend.page.skills.index',[
            'title_page' => $title,
            't2' => $title2,
            'data' => $data,
            ]);
            return view('frontend.page.interests.index',[
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
