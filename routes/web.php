<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\PlayfieldController;
use App\Models\Ranking;
use App\Models\Result;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    // Take the 3 newest posts
    $latestArticles = Article::orderBy('published_at', 'desc')->take(3)->get();

    return view('welcome', compact('latestArticles'));
})->name('home');

Route::get('/results', function () {
    return view('results.index')->with('results', Result::all());
});

Route::get('/rankings', function () {
    // Get all the unique pools in the ranking table
    // Using a SELECT DISTINCT
    $divisions = Ranking::select('division')->distinct()->get();

    // Get all the Rankings from that pool in the correct order
    // Each set of rankings is added to the pool object for use in the view
    foreach ($divisions as $division) {
        $division->rankings = Ranking::where('division', $division->division)
            ->orderBy('p', 'DESC')
            ->orderBy('w', 'ASC')
            ->orderBy(DB::raw('sv-st'), 'DESC')->get();
    }

    // Let Laravel render the view with the pools data
    return view('rankings.index')->with('pools', $divisions);
});

Route::get('/users', function () {
    $users = User::all();

    return view('users.index', compact('users'));
});

// Resource routes of the base pages. For more info on Resource Routes
Route::resource('/articles', ArticleController::class);
Route::resource('/games', GameController::class);
Route::resource('/playfields', PlayfieldController::class);
