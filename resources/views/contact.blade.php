@extends('layouts.app')

@section('title', 'Contact')

@section('styles')
    .hero { padding: 4rem 0 2rem 0; }
@endsection

@section('content')
    <header class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-6 fw-bold">Get in touch</h1>
                    <p class="lead text-muted">Questions, collaboration, or just want to say hi — drop a message below or use one of the social links.</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                    <a href="mailto:faatihkeane@gmail.com" class="btn btn-outline-primary">Email us</a>
                </div>
            </div>
        </div>
    </header>

    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h5 class="mb-3">Social</h5>
                    <p class="text-muted">Find Keane on these platforms — click to visit.</p>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="https://github.com/KeaneKen" target="_blank" class="text-decoration-none">🐙 GitHub — @KeaneKen</a></li>
                        <li class="mb-2"><a href="https://x.com/Ecksdee23643959" target="_blank" class="text-decoration-none">🐦 Twitter — @Ecksdee23643959</a></li>
                        <li class="mb-2"><a href="https://www.linkedin.com/in/andi-tubagus-faatih-keane-kaylahi-arbini-aa7baa33a" target="_blank" class="text-decoration-none">📃 LinkedIn — @Keane</a></li>
                        <li class="mb-2"><a href="https://www.instagram.com/meseseres_com/profilecard/?igsh=MW90ZmRxdDZoY2J1Nw%3D%3D" target="_blank" class="text-decoration-none">📷 Instagram - @meseseres_com</a></li>
                    </ul>

                    <div class="mt-4">
                        <h6>Other contact info</h6>
                        <p class="text-muted mb-1">Email: faatihkeane@gmail.com</p>
                        <p class="text-muted">Location: Makassar</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection