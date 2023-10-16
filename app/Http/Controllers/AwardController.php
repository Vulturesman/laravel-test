<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AwardController extends Controller
{
    public function index()
    {

        $hello = 'world';

        $awards = [
            'Oscars',
            'Golden Globes',
            'Bafta',
            'Emmy'
        ];

        // resources/views/awards/index.blade.php
        //                 awards.index

        // $view = view('awards.index');
        // return $view;

        return view('awards.index', [
            'hello' => $hello,
            'awards' => $awards
        ]);
    }
}
