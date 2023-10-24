<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Header Layout</title>
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>
<body>
    <header>
        <div class="profile">
            <div class="profile_icon">
                <i class="bi bi-person-circle icon"></i>
            </div>
            <div class="profile_name">
                @auth
                    {{-- <h3>{{ Auth::user()->name }}</h3> --}}
                @endauth
                <a href="/">Logout</a>
            </div>
            
        </div>
    </header>
</body>
</html>