@extends('layouts.main')

@section('container')
    <section class="full-width-section bg-gray">
        <div class="h-100">
            <div class="row h-100 p-3">
            </div>
        </div>
    </section>

    <div class="custom-margin card my-5 px-4 border-0 shadow-lg rounded-4">
        <section class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 mb-3 mb-lg-0">
                        <h1 class="display-4 fw-bold mb-2">Discover stories that inspire.</h1>
                        <p class="lead text-secondary mb-4">Discover a diverse collection of thought-provoking articles written by talented authors from around the world, covering a wide range of topics that inspire, inform, and challenge perspectives.</p>
                        <div class="d-flex gap-3">
                            <a href="/posts" class="btn btn-danger px-4 py-2">Start Reading</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-2">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-12">
                        <h2 class="fw-bold mb-2">Popular Categories</h2>
                        <p class="text-muted">Choose from a variety of topics to explore.</p>
                    </div>
                </div>
                <div class="row g-4 justify-content-center">
                    @php
                        $images = [
                            'globe',
                            'laptop',
                            'cup-hot',
                        ];
                        $desc = [
                            'Building dynamic and functional websites.',
                            'Creating visually appealing interfaces.',
                            'Sharing experiences, thoughts, and insights.',
                ];
                    @endphp
                    @foreach ($categories as $index => $category)
                        <div class="col-12 col-md-6 col-lg-4 d-flex pb-3">
                            <a href="/posts?category={{ $category->slug }}" class="text-decoration-none w-100">
                                <div class="card h-100border-0 text-center hover-lift shadow-sm w-100 transition-all">
                                    <div class="card-body p-2">
                                        <div class="rounded-circle bg-primary bg-opacity-10 p-4 d-inline-flex mb-4">
                                            <i class="bi bi-{{ $images[$index] }} fs-2 text-danger"></i>
                                        </div>
                                        <h5 class="card-title fw-bold mb-2">{{ $category->name }}</h5>
                                        <p class="text-muted small">{{ $desc[$index] }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection