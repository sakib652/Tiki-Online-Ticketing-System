<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiki Online Ticketing System</title>
    <link rel="stylesheet" href="{{ asset('trips_css/createindex.css') }}">
    <link rel="stylesheet" href="{{ asset('trips_css/show.css') }}">
    <link rel="stylesheet" href="{{ asset('locations_css/locationindex.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Dkq2Ez53RWJgg7s8R5O6LYZM8C+3Js5DGY0qZrp5hAGeodZh+0pvLkRktGOfGhCprg/XKjPTsloSbtGOswMNwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div>
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
