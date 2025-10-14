@extends('layouts.app')

@section('title', 'About')

@section('content')
    <header class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-5 fw-bold">About Me</h1>
                    <p class="lead text-muted">A short introduction to Keane — maker, programmer, hobbyist, and Gunpla enthusiast.</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                    <a href="{{ route('contact') }}" class="btn btn-outline-primary">Contact</a>
                </div>
            </div>
        </div>
    </header>

    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Background</h3>
                    <p class="text-muted">Keane is a web developer and hobbyist who likes building small projects and collecting Gunpla models. This site serves as a personal portfolio and blog space.</p>

                    <h3 class="mt-4">Interests</h3>
                    <ul>
                        <li>Web development (Laravel, PHP, JavaScript)</li>
                        <li>Visual Programming (Flutter, Dart)</li>
                        <li>Model building (Gunpla)</li>
                        <li>Photography and sharing builds</li>
                    </ul>

                    <h3 class="mt-4">Mission</h3>
                    <p class="text-muted">To document works in progress, share resources, and connect with other hobbyists and developers.</p>
                </div>

                <div class="col-lg-4">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">Contact</h5>
                            <p class="text-muted mb-3">I keep all contact details on the dedicated Contact page.</p>
                            <a href="{{ route('contact') }}" class="btn btn-primary">Go to Contact page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
