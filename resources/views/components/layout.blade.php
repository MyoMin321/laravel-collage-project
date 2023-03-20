<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $title }}</title>
    {{-- <title>Phaung Daw Oo International University</title> --}}
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword" content="education html template, university template, college template, school template, online education template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    {{-- <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon"> --}}
    <link rel="shortcut icon" href="{{ asset('images/fav.ico') }}" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    <link href="{{ asset('css/materialize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style-mob.css') }}" rel="stylesheet" />
</head>

<body>
    {{-- @if (session('success'))
        <div class="alert alert-succes text-center">{{ session('success') }}</div>
    @endif --}}
    <x-mobile_menu />
    <x-topbar />
    <x-navbar />
    <x-search-bar />
    {{ $slot }}
    <x-social_media_share />
    <x-footer_section />
    <x-script_file />
    {{-- <x-copy_right /> --}}
</body>

</html>
