<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('css/auth.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <form class="edit_form" method="post" action="{{ route('customer.update', ['id' => $customer->customer_id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="entire_form">
            <div class="div1">
                <div class="left_input">

                    <label for="firstName">First Name:</label><br>
                    <input class="edit_input" type="text" name="firstName" id="firstName" value="{{ $customer->firstName }}"><br>

                    <label for="lastName">Last Name:</label><br>
                    <input class="edit_input" type="text" name="lastName" id="lastName" value="{{ $customer->lastName }}"><br>

                    <label for="email">Email:</label><br>
                    <input class="edit_input" type="email" name="email" id="email" value="{{ $customer->email }}"><br>

                    <label for="phoneNumber">Mobile:</label><br>
                    <input class="edit_input" type="number" name="phoneNumber" id="phoneNumber" value="{{ $customer->phoneNumber }}">

                </div>
            </div>
            
            <div class="div2">
                <div class="right_input">

                    <label for="address">Address:</label><br>
                    <input class="edit_input" type="text" name="address" id="address" value="{{ $customer->address }}"><br>
            
                    <label for="validId">Id Type:</label><br>
                    <input class="edit_input" type="text" name="validId" id="validId" value="{{ $customer->validID }}"><br>

                    <label for="idImage">Id Image:</label><br>
                    <input type="file" name="idImage" id="idImage">
                    <img src="{{ asset($customer->idImage) }}" alt="Current ID Image"><br>
                    <label for="">hide</label>
                    
                </div>
            </div>
        </div>
        
        <div class="save_btn">
            <button type="submit">Save</button>
        </div>
    </form>
</body>
</html>