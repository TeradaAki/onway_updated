<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Edit Driver</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>
<body>
    @extends('layout.header')
    @extends('layout.sidenav')
    
    @section('add_content')
    <div class="list_table">
        <div class="list_header">
            <h2>Edit Driver</h2>
        </div>
        <form class="edit_form" method="post" action="{{ route('driver.update', ['driver_id' => $driver->driver_id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="entire_form">
                <div class="div1">
                    <div class="left_input">
                        <label for="firstName">First Name:</label><br>
                        <input class="edit_input" type="text" name="firstName" id="firstName" value="{{ $driver->firstName }}"><br>
                        <br>
                        <label for="lastName">Last Name:</label><br>
                        <input class="edit_input" type="text" name="lastName" id="lastName" value="{{ $driver->lastName }}"><br>
                        <br>
                        <label for="email">Email:</label><br>
                        <input class="edit_input" type="email" name="email" id="email" value="{{ $driver->email }}"><br>
                        <br>
                        <label for="phoneNumber">Mobile:</label><br>
                        <input class="edit_input" type="number" name="phoneNumber" id="phoneNumber" value="{{ $driver->phoneNumber }}"><br>
                    </div>
                </div>
                <div class="div2">
                    <div class="right_input">
                        <label for="address">Address:</label><br>
                        <input class="edit_input" type="text" name="address" id="address" value="{{ $driver->address }}"><br>
                        <br>
                        <label for="vehicleType">Vehicle Type:</label><br>
                        <input class="edit_input" type="text" name="vehicleType" id="vehicleType" value="{{ $driver->vehicleType }}"><br>
                        <br>
                        <label for="license">Driver License:</label><br>
                        <input type="file" name="license" id="license">
                        <img src="{{ asset('path/to/driver/license/' . $driver->license) }}" alt="Current Driver License"><br>
                    </div>
                </div>
            </div>
            <div class="save_btn">
                <button class="submit_btn" type="submit">Save</button>
            </div>
        </form>
    </div>
    @endsection
</body>
</html>
