<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index () {
        return response()->json('Articles');
    }

    public function all () {
        $articles = DB::select('SELECT * FROM articles');

        return response()->json($articles);
    }

}
