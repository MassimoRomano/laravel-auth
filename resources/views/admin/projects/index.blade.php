@extends('layouts.admin')

@section('content')
    <header class="py-3 bg-dark text-light">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="text-danger">Projects</h1>
            <a class="btn btn-danger" href="{{route('admin.projects.create')}}">New Project</a>
        </div>
    </header>
    <section class="py-5">
        <div class="container">
            <div class="table-responsive">
                <table class="table table-dark">
                    <thead class="text-center">
                        <tr>
                            <th class="text-danger" scope="col">ID</th>
                            <th class="text-danger" scope="col">Image</th>
                            <th class="text-danger" scope="col">Title</th>
                            <th class="text-danger" scope="col">Project</th>
                            <th class="text-danger" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @dd($projects) --}}

                        @forelse ($projects as $project)
                            <tr class=" text-center">
                                <td scope="row">{{ $project->id }}</td>
                                <td><img width="120" src="{{ $project->image }}" alt=""></td>
                                <td>{{ $project->title }}</td>
                                <td>{{$project->project}}</td>
                                <td>
                                    <a class="btn btn-success" href="{{route('admin.projects.show', $project)}}">
                                        <i class="fas fa-eye fa-xs fa-fw"></i>
                                        <span style="font-size: 0.7rem" class="text-uppercase">View</span>
                                    </a>
                                    <a class="btn btn-primary" href="{{route('admin.projects.edit', $project)}}">
                                        <i class="fas fa-pencil fa-xs fa-fw"></i>
                                        <span style="font-size: 0.7rem" class="text-uppercase">Edit</span>
                                    </a>
                                </td>
                                
                            </tr>
                        @empty

                            <tr class="">
                                <td scope="row">No post yet</td>

                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
