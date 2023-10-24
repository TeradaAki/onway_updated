<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Driver</title>
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">
</head>
<body>
    @extends('layout.header')
    @extends('layout.sidenav')

    @section('add_content')
    <div class="list_table">
        <div class="list_header">
            <h2>Drivers</h2>
        </div>
        <form class="search_form" action="">
            <input class="search_bar" type="text" placeholder="Search.." name="search">
            <button class="search_btn" type="submit">
                <i class="bi bi-search"></i>
            </button>
        </form>
        @if($drivers !== null && count($drivers) > 0)
        <table class="output_table">
            <thead>
                <tr>
                    <th>ID:</th>
                    <th>Name:</th>
                    <th>Phone Number:</th>
                    <th>Email:</th>
                    <th>Address:</th>
                    <th>Vehicle Type</th>
                    <th>License:</th>
                    <th>Options:</th>
                </tr>
            </thead>
            <tbody>
                @foreach($drivers as $driver)
                <tr>
                    <td>{{ $driver->driver_id }}</td>
                    <td>{{ $driver->firstName }} {{ $driver->lastName }}</td>
                    <td>{{ $driver->phoneNumber }}</td>
                    <td>{{ $driver->email }}</td>
                    <td>{{ $driver->address }}</td>
                    <td>{{ $driver->vehicleType }}</td>
                    <td><img src="{{ $driver->license }}" alt="Driver License" width="100"></td>
                    <td class="btns">
                        {{-- <a class="edit-button" href="{{ route('driver.edit', ['driver_id' => $driver->driver_id]) }}">Edit</a> --}}
                        {{-- <form method="POST" action="{{ route('driver.delete', ['id' => $driver->driver_id]) }}">
                            @csrf
                            @method('DELETE')
                            <button class="delete-button" type="submit">Delete</button>
                        </form> --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <hr>
        <div class="none">
            <p class="none_message">No drivers found.</p>
        </div>
        @endif
    </div>
    @endsection
</body>
</html>
