<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Budget Buddy</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <script>
        var chart = false
    </script>
</head>
<body>
    <div class="container">
        @if(Session::has('error'))
        <div class="backdrop active"></div>
        <div class="error-modal active">
            <div class="close-error-modal">
                <i class="fa fa-times"></i>
            </div>
            <div class="error-gif">
                <img src="{{ asset('assets/images/error.gif') }}" alt="">
            </div>
            <div class="error-message">{{Session::get('error')}}</div>
        </div>
        @endif
          <div class="form_box">
            <div class="form">
                <h2>Welcome to Budget Buddy</h2>
                <p>Login to access the BB community with amazing user experience.</p>
                <form action="{{url('login')}}" method="post">
                    @csrf
                    <div class="form_group">
                        <label for="email">Email</label>
                        <input required type="email" id="email" name="email">
                    </div>
                    <div class="form_group">
                        <label for="password">Password</label>
                        <input required type="password" id="password" name="password">
                    </div>
                    <button type="submit">Login</button>
                    <div class="single-link">
                        <a href="{{url('register')}}">New User?</a>
                    </div>
                </form>
            </div>
                <div class="form_banner login">
                    <h2 class="logo">Budget Buddy</h2>
                    <img src="{{asset('assets/images/logo.png')}}" alt="">
                    <h4>Manage</h4>
                    <h3>INCOME EXPENSE</h3>
                    <p>Manage your all expenses and income at one place with an amazing user interface.</p>
                    <p class="tagline">Login to enter the BB room.</p>
                </div>
          </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="{{asset('assets/script.js')}}"></script>
</body>
</html>