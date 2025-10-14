@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <header class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-5 fw-bold">Keane's Blog</h1>
                    <p class="lead text-muted">What's going on?</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                    <a href="{{ route('home') }}" class="btn btn-outline-primary">Back to Home</a>
                </div>
            </div>
        </div>
    </header>

    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Stylish posts list -->
                    <div class="row gy-4">
                        <div class="col-12">
                            <div class="card shadow-sm">
                                <div class="row g-0">
                                    <div class="col-md-4 d-none d-md-block">
                                        <img src="{{ Vite::asset('resources/images/posepic3.jpg') }}" class="post-thumb rounded-start" alt="Post thumbnail">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h4 class="card-title mb-1">First Post</h4>
                                            <div class="text-muted small mb-2">Posted · Oct 13, 2025 · Ken</div>
                                            <p class="card-text text-muted">Welcome to my Blog! You'll find stuff that I find interesting — updates about builds, photos, and short thoughts.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card shadow-sm">
                                <div class="row g-0">
                                    <div class="col-md-4 d-none d-md-block">
                                        <img src="{{ Vite::asset('resources/images/posepic2.jpg') }}" class="post-thumb rounded-start" alt="Post thumbnail">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h4 class="card-title mb-1">Photo Test</h4>
                                            <div class="text-muted small mb-2">Posted · Oct 10, 2025 · Ken</div>
                                            <p class="card-text text-muted">Just built the Shining Gundam — quick photo test and some notes about the build process.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <aside class="col-lg-4">
                    <div class="card shadow-sm mb-3">
                        <div class="card-body">
                            <h6>About the blog</h6>
                            <p class="text-muted mb-0">Short notes about what the blog covers and why you should follow.</p>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </main>
@endsection
