@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <header class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold">Welcome to My Portfolio</h1>
                    <p class="lead text-muted">This is a place where I (Keane) share stuff about me, my life, and of course, my gunpla collection.</p>
                    <div class="d-flex gap-2">
                        <a href="#features" class="btn btn-primary btn-lg">Explore features</a>
                        <a href="#contact" class="btn btn-outline-secondary btn-lg">Get in touch</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center mt-4 mt-lg-0">
                    <img src="{{ Vite::asset('resources/images/posepic1.jpg') }}" alt="Illustration" class="img-fluid" style="max-height:320px; opacity: .9;">
                </div>
            </div>
        </div>
    </header>

    <main class="py-5">
        <div class="container">
            <section id="features" class="mb-5">
                <div class="row text-center">
                    <div class="col-12">
                        <h2 class="h3">Features</h2>
                        <p class="text-muted">What will you find here?</p>
                    </div>
                </div>
                <div class="row g-4 mt-3">
                    <div class="col-md-4 text-center">
                        <div class="feature-icon mx-auto mb-3">📷</div>
                        <h5>Cool Pics</h5>
                        <p class="text-muted">Lots of awesome pictures.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="feature-icon mx-auto mb-3">💬</div>
                        <h5>Ken's Blog</h5>
                        <p class="text-muted">A blog that only has Ken on it.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="feature-icon mx-auto mb-3">🎨</div>
                        <h5>Cool Website</h5>
                        <p class="text-muted">The website looks nice.</p>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
