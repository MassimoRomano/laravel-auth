@extends('layouts.admin')


@section('content')

    <header class="py-3 bg-dark text-white">
        <div class="container">
            <h1>Add New Project</h1>
        </div>

    </header>

    @if($errors->any())

    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error )
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

    @endif

    <div class="container py-5">

        <form action="{{ route('admin.projects.update', $project) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="Scrivi titolo" value="{{ old('title', $project->title) }}" />
                <small id="titleHelper" class="form-text text-muted">Scrivi un titolo</small>
                @error('title')
                <div class="text-danger py-2">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="cover_image" class="form-label">Image</label>
                <input type="text" class="form-control @error('image') is-invalid @enderror" name="image" id="image"
                    aria-describedby="imageHelper" placeholder="Inserisci url image" value="{{old('image', $project->image)}}"/>
                <small id="imageHelper" class="form-text text-muted">Type a url_image for this post</small>
                @error('image')
                <div class="text-danger py-2">
                    {{$message}}
                </div>
                @enderror

            </div>

            <div class="mb-3">
                <label for="cover_image" class="form-label">Link Project</label>
                <input type="text" class="form-control @error('project') is-invalid @enderror" name="project" id="project"
                    aria-describedby="projectHelper" placeholder="Inserisci link progetto" value="{{old('project', $project->project)}}"/>
                <small id="projectHelper" class="form-text text-muted">Type a Link for this project</small>
                @error('project')
                <div class="text-danger py-2">
                    {{$message}}
                </div>
                @enderror

            </div>


            <div class="mb-3">
                <label for="content" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="scrivi una breve descrizione..." rows="5">{{ old('description', $project->description) }}</textarea>
                @error('description')
                <div class="text-danger py-2">
                    {{$message}}
                </div>
                @enderror
            </div>

            

            <button type="submit" class="btn btn-primary">
                Fix Project
            </button>



        </form>
    </div>

@endsection