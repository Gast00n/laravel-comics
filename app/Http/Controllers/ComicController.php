<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function show($id) {

        $comics = config('comics');
        /**
         * Get specific comic by ID
         */

        // Metodo A 
        $comic = [];
        foreach ($comics as $item) {
            if($id == $item['id']) {
                $comic = $item;
            }
        }

        //Metodo B - Collections
        $comic = collect($comics)->firstWhere('id', $id);

        return view('comics.show', compact('comic'));
    }
}
