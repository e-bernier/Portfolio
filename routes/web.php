<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Session;
use App\Models\Project;
use App\Models\Experience;

Route::get('/', function () {
    $locale = Session::get('locale', 'en');
    return redirect("/{$locale}");
});

// Groupe de routes avec préfixe de langue
Route::prefix('{locale}')
    ->where(['locale' => 'en|fr'])
    ->middleware(SetLocale::class)
    ->group(function () {
        
        // Page d'accueil
        Route::get('/', function () {
            $projects = Project::orderBy('project_date', 'desc')->get();
            $experiences = Experience::orderBy('project_date', 'desc')->get();
            return view('home', compact('projects', 'experiences'));
        })->name('home');
        
        // Page détail projet
        Route::get('/projet/{slug}', function ($locale, $slug) {
            $project = Project::where('slug', $slug)->firstOrFail();
            return view('project', compact('project'));
        })->name('project.show');

    });
