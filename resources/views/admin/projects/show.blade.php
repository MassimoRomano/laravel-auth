@extends('layouts.admin')

@section('content')
    <section class="bg-dark">
        <header class="py-3 bg-danger text-light">
            <div class="container">
                <h1 class=" text-center">{{ $project->title }}</h1>
            </div>
        </header>
        <section class="py-5">
            <div class="container d-flex ">
                <img class="pe-5" src="{{ $project->image }}" alt="">
                <div>
                    <p class="text-light py-5">{{ $project->description }}</p>
                </div>
            </div>
        </section>
    </section>
@endsection
