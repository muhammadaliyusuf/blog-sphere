<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/styles.css">

    <title>BlogSphere | {{ $title }}</title>

    <style>
        .hover-lift {
            transition: transform 0.3s ease;
        }
        .hover-lift:hover {
            transform: translateY(-5px);
        }
        .object-fit-cover {
            object-fit: cover;
        }
        .full-width-section {
            position: absolute;
            left: 0;
            width: 100%; /* Lebar penuh */
            height: 50vh;;
            margin-top: -50px;
            overflow: hidden;
        }
        .custom-margin {
            position: relative;
            top: 40px;
            margin-bottom: 100px;
        }
        .bg-gray {
            background-color: rgb(246, 242, 242);
        }
    </style>
</head>
<body>
    
    @include('partials.navbar')
    
    <div class="container mt-4" style="padding-bottom: 100px">
        @yield('container')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>