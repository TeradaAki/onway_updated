<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurant</title>
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">
</head>
<body>
    @extends('layout.header')
    @extends('layout.sidenav')

    @section('add_content')
    <div class="restaurant">
        <div class="restaurant_header">
            <h2>Restaurants</h2>
        </div>
        <form class="search_form" action="">
            <input class="search_bar" type="text" placeholder="Search.." name="search">
            <button class="search_btn" type="submit">
                <i class="bi bi-search"></i>
            </button>
        </form>
        @if($restaurants !== null && count($restaurants) > 0)
        <table class="output_table">
            <thead>
                <tr>
                    <th>ID:</th>
                    <th>Name:</th>
                    <th>Description:</th>
                    <th>Cuisine:</th>
                    <th>Address:</th>
                    <th>Rating:</th>
                    <th>Delivery Time:</th>
                    <th>Is Open:</th>
                    <th>Option:</th>
                </tr>
            </thead>
            <tbody>
                @foreach($restaurants as $restaurant)
                <tr>
                    <td>{{ $restaurant->id }}</td>
                    <td>{{ $restaurant->name }}</td>
                    <td>{{ $restaurant->description }}</td>
                    <td>{{ $restaurant->cuisine }}</td>
                    <td>{{ $restaurant->address }}</td>
                    <td>{{ $restaurant->rating }}</td>
                    <td>{{ $restaurant->delivery_time }}</td>
                    <td>{{ $restaurant->is_open ? 'Yes' : 'No' }}</td>
                    <td class="btns">
                        <a class="edit-button" href="{{ route('restaurant.edit', ['id' => $restaurant->id]) }}">Edit</a>
                        <form method="POST" action="{{ route('restaurant.delete', ['id' => $restaurant->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button class="delete-button" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <hr>
        <div class="none">
            <p class="none_message">No restaurants found.</p>
        </div>
        @endif
    </div>
    @endsection
</body>
</html>
