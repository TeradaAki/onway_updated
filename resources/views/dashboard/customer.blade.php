<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer</title>
    <link rel="stylesheet" href="{{asset('css/list.css')}}">
</head>
<body>
    @extends('layout.header')
    @extends('layout.sidenav')

    @section('add_content')
    <div class="list_table">
        <div class="list_header">
            <h2>Customers</h2>
        </div>
        <form class="search_form" action="">
            <input class="search_bar" type="text" placeholder="Search.." name="search">
            <button class="search_btn" type="submit">
                <i class="bi bi-search"></i>
            </button>
        </form>
        @if($customers !== null && count($customers) > 0)
        <table class="output_table">
            <thead>
                <tr>
                    <th>ID:</th>
                    <th>Name:</th>
                    <th>Phone Number:</th>
                    <th>Email:</th>
                    <th>Address:</th>
                    <th>Valid ID:</th>
                    <th>ID Image:</th>
                    <th>Option:</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->customer_id }}</td>
                    <td>{{ $customer->firstName }} {{ $customer->lastName }}</td>
                    <td>{{ $customer->phoneNumber }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->validID }}</td>
                    <td><img src="{{ $customer->idImage }}" alt="img" width="100"></td>
                    <td class="btns">
                        <a class="edit-button" href="{{ route('customer.edit', ['id' => $customer->customer_id]) }}">Edit</a>
                        <form method="POST" action="/customers/{{ $customer->customer_id }}">
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
            <p class="none_message">No customers found.</p>
        </div>
        @endif
    </div>
    @endsection 

</body>
</html>