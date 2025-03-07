@extends('layouts.main')

@section('container')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow-lg p-4 text-center bg-light rounded-4">
                    <!-- Foto Profil -->
                    <div class="mb-3">
                        <img src="img/{{ $image }}" alt="Foto {{ $name }}" 
                            class="img-fluid rounded-circle shadow-lg border border-3"
                            style="width: 150px; height: 150px; object-fit: cover;">
                    </div>

                    <!-- Nama & Email -->
                    <h1 class="fw-bold text-danger">{{ $name }}</h1>
                    <p class="lead text-muted">Junior Fullstack Developer</p>

                    <!-- Deskripsi -->
                    <p class="text-dark fs-5">
                        Recent Computer Science graduate with a passion for Cloud Computing, Web Development, and Software Engineering. 
                        Skilled in JavaScript and PHP, continuously seeking growth and new challenges in the tech industry.
                    </p>

                    <!-- Social Media Icons -->
                    <div class="mt-3">
                        <a href="https://www.linkedin.com/in/muhammad-aliyusuf/" class="btn btn-primary me-2">
                            <i class="bi bi-linkedin"></i> LinkedIn
                        </a>
                        <a href="https://github.com/muhammadaliyusuf" class="btn btn-dark">
                            <i class="bi bi-github"></i> GitHub
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection