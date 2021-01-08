<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    public function show($slug) {

        $comics = config('comics');
        /**
         * Get specific comic by ID
         */

        // Metodo A 
        $comic = [];
        foreach ($comics as $item) {
            foreach ($comics as $item) {
                //da title a Slug
                $titleConversion = Str::slug($item['title'], '-');

                //controllo
                if($slug == $titleConversion) {
                    $comic = $item;
                    break;
                }
            }
        }

        // Controllo contenuto
        if(empty($comic)) {
            abort(404);
        }

        // //Metodo B - Collections
        // $comic = collect($comics)->firstWhere('slug', $slug);

        return view('comics.show', compact('comic'));
    }
}
