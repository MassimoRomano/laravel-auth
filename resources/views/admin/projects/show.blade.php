@extends('layouts.admin')

@section('content')
    <section class="bg-dark">
        <header class="py-3 bg-danger text-light">
            <div class="container">
                <h1 class=" text-center">{{ $project->title }}</h1>
            </div>
        </header>
        <section class="py-5">
            <div class="container d-flex gap-5">
                @if (Str::startsWith($project->image, 'https://'))
                    <img src="{{ $project->image }}" alt="">
                @else
                    <img width="500" src="{{ asset('storage/' . $project->image) }}" alt="">
                @endif
                <div>
                    <p class="text-light py-5">{{ $project->description }}</p>
                </div>
            </div>
        </section>
    </section>
@endsection
