<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;

class MovieController extends Controller
{
    public function topRated()
    {
        $movies = DB::select("
            SELECT *
            FROM `movies`
            WHERE `votes_nr` > ?
                AND `movie_type_id` = ?
            ORDER BY `rating` DESC
            LIMIT 50
        ", [
            5000,
            1
        ]);

        return view('movies.top-rated', compact('movies'));
    }

    public function shawshank()
    {
        $movie = DB::selectOne('
            SELECT *
            FROM `movies`
            WHERE `id` = ?
        ', [
            111161
        ]);

        $all_people = DB::select("
            SELECT `positions`.`name` AS position_name, `people`.*
            FROM `movie_person`
            LEFT JOIN `positions`
                ON `movie_person`.`position_id` = `positions`.`id`
            LEFT JOIN `people`
                ON `movie_person`.`person_id` = `people`.`id`
            WHERE `movie_person`.`movie_id` = ?
        ", [
            $movie->id
        ]);

        $people_sorted_by_position = [];
        foreach ($all_people as $person) {
            $people_sorted_by_position[$person->position_name][] = $person;
        }

        return view('movies.detail', [
            'movie' => $movie,
            'people' => $people_sorted_by_position
        ]);
    }

    public function index()
    {
        $movies = Movie::orderBy('name')     // FROM `movies` ORDER BY `name` ASC
            ->where('votes_nr', '>=', 100000) // WHERE `votes_nr` >= 10000
            ->limit(20)                      // LIMIT 20
            ->get();                         // SELECT

        return view('movie/index', compact('movies'));
    }

    public function search()
    {
        $search_term = $_GET['search'] ?? null;

        if ($search_term) {
            $results = DB::select("
                SELECT *
                FROM `movies`
                WHERE `name` LIKE ?
                ORDER BY `name` ASC
            ", [
                '%' . $search_term . '%'
            ]);

            // replaces commented-out code above:
            // $results = Movie::query()
            //     ->where('name', 'like', '%' . $search_term . '%')
            //     ->orderBy('name', 'asc')
            //     ->get();
        }

        return view('movies.search', [
            'search_term' => $search_term,
            'results' => $results ?? []
        ]);
    }

    // public function method($movie_id)
    // {
    //     code in here... getting the pretty url
    // }
}
