<!-- resources/views/route_list.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Route List</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <div class="container mt-5">
        <h1>Daftar Semua Route</h1>
        <pre>{{ $output }}</pre>
        <a href="{{ url('/') }}" class="btn btn-primary">Kembali</a>
    </div>

    @vite('resources/js/app.js')
</body>

</html>
