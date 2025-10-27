@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4">
                @if($project->cover_image)
                    <img src="{{ asset($project->cover_image) }}" class="card-img-top" alt="{{ $project->title }}">
                @else
                    <img src="{{ Vite::asset('resources/images/posepic2.jpg') }}" class="card-img-top" alt="{{ $project->title }}">
                @endif

                <div class="card-body">
                    <h1 class="h3">{{ $project->title }}</h1>
                    <p class="text-muted small">{{ optional($project->published_at)->format('M d, Y') ?? 'Unpublished' }}</p>

                    <div class="project-body mt-3">
                        {!! $project->body !!}
                    </div>

                    <div class="mt-4">
                        @if($project->live_url)
                            <a href="{{ $project->live_url }}" target="_blank" class="btn btn-primary me-2">View Live</a>
                        @endif
                        @if($project->repo_url)
                            <a href="{{ $project->repo_url }}" target="_blank" class="btn btn-outline-secondary">Repository</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Project Info</h5>
                    <ul class="list-unstyled mb-0">
                        <li><strong>Title:</strong> {{ $project->title }}</li>
                        <li><strong>Slug:</strong> {{ $project->slug }}</li>
                        <li><strong>Featured:</strong> {{ $project->featured ? 'Yes' : 'No' }}</li>
                        <li><strong>Published:</strong> {{ $project->published_at ? $project->published_at->toDateString() : '—' }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
