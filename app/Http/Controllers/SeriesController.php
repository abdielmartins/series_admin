<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request) {
        $series = [
            'Grey\'s Anatomy',
            'LOST',
            'Agents of SHIELD'
        ];

        return view ('series.index', [
            'series' => $series
        ]);

    }
}
