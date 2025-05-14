@extends('layouts.app')
@section('title', 'My movies')
@section('content')
     <div class="container">
        <h1 class="text-center mb-5">FILMISSIMI</h1>

        <div class="row">
            @foreach ($Movies as $movie)
                <div class="col-md-6 col-lg-4">
                    <x-card>
                        <x-slot:title>{{$movie->title}}</x-slot:title>
                        <x-slot:original_title>{{$movie->original_title}}</x-slot:original_title>
                        <x-slot:nationality>{{$movie->nationality}}</x-slot:nationality>
                        <x-slot:date>{{$movie->date}}</x-slot:date>
                        <x-slot:vote>{{$movie->vote}}</x-slot:vote>
                        <x-slot:id>{{$movie->id}}</x-slot:id>
                    </x-card>
                </div>
            @endforeach
        </div>
    </div>
@endsection
 
 


    
