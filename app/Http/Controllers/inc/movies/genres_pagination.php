<?php

$i = 1;
$pages = [];

while($i< 25){

    if(!empty($_GET['genre_id'])){         
        $genre_id = $_GET['genre_id']; 
    }

    $movie = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/discover/movie?with_genres='. $genre_id .'&page='.$i++.'&append_to_response=&language=ru')
        ->json()['results'];

    foreach ($movie as $genre_page):
        array_push($pages, $genre_page);
    endforeach;                 
}

$genres_paginate = $this->paginate($pages);       
$genres_paginate->setPath('genre');  

