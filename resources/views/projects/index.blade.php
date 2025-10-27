@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">Projects</h1>
    </div>

    <div class="row g-4">
        @foreach($projects as $project)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    @if($project->cover_image)
                        <img src="{{ asset($project->cover_image) }}" class="card-img-top post-thumb" alt="{{ $project->title }}">
                    @else
                        <img src="{{ Vite::asset('resources/images/posepic1.jpg') }}" class="card-img-top post-thumb" alt="{{ $project->title }}">
                    @endif
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $project->title }}</h5>
                        <p class="text-muted small mb-2">{{ optional($project->published_at)->format('M d, Y') ?? 'Unpublished' }}</p>
                        <p class="card-text">{{ $project->excerpt }}</p>
                        <div class="mt-auto">
                            <a href="{{ route('projects.show', $project) }}" class="btn btn-outline-primary btn-sm">View</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-4">
        {{ $projects->links() }}
    </div>
</div>
@endsection

@section('styles')
<style>
.post-thumb { height: 200px; width: 100%; object-fit: cover; }
</style>
@endsection
