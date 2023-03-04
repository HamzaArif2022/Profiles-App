@props(['title']) {{-- make reuseble title --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">



    <title>Social Net work |{{ $title }}</title>
</head>

<body>

    @include('Partails.Nav') {{-- integer le nav bar --}}

    <div class="container mt-3">

        @include('Partails\AlertAjouter') {{-- test si profile et bien ajouter --}}

        {{ $slot }}{{--  all the content that's sourounded by the tag component it will be defind here  --}}
    </div>

    @include('Partails.Footer'){{--  appell de footer  --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Load Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
