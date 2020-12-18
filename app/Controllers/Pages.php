<?php namespace App\Controllers;

class Pages extends BaseController
{
    public function index(){
        $data = [
            'title' => 'Home | Andiqal'
        ];

        return view('pages/home', $data);
    }

    public function about(){
        $data = [
            'title' => 'About Me'
        ];

        return view('pages/about', $data);
    }

    public function contact(){
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Perumahan',
                    'alamat' => 'Jl.pembegal',
                    'kota' => 'Makassar'
                ],
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl.pemberontak',
                    'kota' => 'Bone'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }

    //--------------------------------------------------------------------

}
