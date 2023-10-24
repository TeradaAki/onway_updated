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
    <div class="container">
        <div class="card">
            <div class="onway">
                <img class="logo" src="img/onway_logo.png" alt="Onway Logo">
            </div>
            <br>
            <hr>
            <br>
            <div class="alert">
                {{-- <div class="alert-success">trsfgr</div> --}}
                @if(session()->has('success'))
                    <div class="alert-success">{{session()->get('success')}}</div>
                @endif
                @if(session()->has('fail'))
                    <div class="alert-danger">{{session()->get('fail')}}</div>
                @endif
            </div>
            <br>
            <div class="login">
                <form action="{{ route('register-admin') }}" method="POST">
                    @csrf
                    <div class="form_input">
                        <i class="bi bi-person icon"></i>
                        <input class="enter_value" type="text" id="text" name="name" placeholder="Name">
                    </div>
                    <br>
                    <div class="form_input">
                        <i class="bi bi-envelope icon"></i>
                        <input class="enter_value" type="email" id="email" name="email" placeholder="Email">
                    </div>
                    <br>
                    <div class="form_input">
                        <i class="bi bi-lock icon"></i>
                        <input class="enter_value" type="password" id="password" name="password" placeholder="Password">
                    </div>
                    <br>
                    <div class="enter">
                        <div class="enter_btn">
                            <i class="bi bi-box-arrow-in-right icon"></i>
                            <input class="submit_btn" type="submit" value="ENTER">
                        </div>
                    </div>
                </form>
                <p class="text--center">Already a member? <a href="/">Sign in here</a></p>                
            </div>
        </div>    
    </div>
</body>
</html>