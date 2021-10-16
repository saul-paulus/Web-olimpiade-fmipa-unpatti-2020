<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/my-style.css">

    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/scrollreveal@4"></script>


    <title>Olimpiade Sains 2021 | FMIPA</title>
</head>

<body>

    <!-- Membuat Navbar -->
    @include('components.navbar')
    <!-- Akhir membuat navbar -->

    <!-- Membuat content -->
    @yield('content')
    <!-- Akhir membuat content -->

    <!-- membuat footer -->
    @include('components.footer')
    <!-- Akhir membuat footer -->



    <script>
    const scroll = ScrollReveal({

        distance: '30px',
        duration: 1800,
        reset: 'true'
    })

    scroll.reveal('.show', {
        origin: 'top',
        interval: 200
    })

    scroll.reveal('.left', {
        origin: 'left',
        interval: 200
    })
    scroll.reveal('.right', {
        origin: 'right',
        interval: 200
    })
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Icons father -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>

</body>

</html>
