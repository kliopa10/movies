@extends('layouts.main')

@section('content')
    <div class="container flex mx-auto px-4 mt-6">
        <div class="grid w-20% mr-8 p-4">
            @include('partials.filter')
        </div>
        <div class="popular-movies w-80%">
            <h2 class='capitalize flex flex-row tracking-wider text-orange-500 text-2xl font-semibold mt-4'>{{$genre_name}}</h2>

            <div class="flex mt-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    @foreach($gueryArray as $movie)
                        <x-movie-card :movie="$movie" :genres="$genres"/>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
