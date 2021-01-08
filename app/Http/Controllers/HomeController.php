<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Prima parte per l'uso di Str::slug()
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        $comics = config('comics');

        //Gen slugs for comics url (friendly url)

        //HOW TO
        //Strings - Digging Deep in Laravel Documentation - Str::slug()
        foreach ($comics as $key => $comic) {
            //da Titolo a Slug
            $slug = Str::slug( $comic['title'], '-');
            //aggiungerlo all'array per ogni elemento dell'array
            $comics[$key]['slug'] = $slug;
        }

        return view('home', compact('comics'));
    }
}
