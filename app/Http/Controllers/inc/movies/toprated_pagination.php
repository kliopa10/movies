<?php

$i = 1;
$pages = [];

while($i< 5){

    $movie = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3//movie/top_rated?page='.$i++.'&language=ru-RU')
        ->json()['results'];
    

    foreach ($movie as $page):
        array_push($pages, $page);
    endforeach;             
}

$toprated_paginate = $this->paginate($pages);
$toprated_paginate->setPath('toprated'); 