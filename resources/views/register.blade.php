<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Budget Buddy</title>            
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <script>
        var chart = false
    </script>
</head>
<body>
    <div class="container">
        @if(Session::has('success'))
        <div class="backdrop active"></div>
        <div class="success-modal active">
            <div class="close-success-modal">
                <i class="fa fa-times"></i>
            </div>
            <div class="success-gif">
                <img src="{{ asset('assets/images/success.gif') }}" alt="">
            </div>
            <div class="success-message">{{Session::get('success')}}</div>
        </div>
        @endif
          <div class="form_box">
                <div class="form_banner">
                    <h2 class="logo">Budget Buddy</h2>
                    <img src="{{asset('assets/images/logo.png')}}" alt="">
                    <h4>Manage</h4>
                    <h3>INCOME EXPENSE</h3>
                    <p>Manage your all expenses and income at one place with an amazing user interface.</p>
                    <p class="tagline">Register to get started</p>
                </div>
                <div class="form">
                    <h2>Welcome to Budget Buddy</h2>
                    <p>Create your account to join the amazing BB community.</p>
                    <form action="{{url('register')}}" method="post">
                        @csrf
                        <div class="form_group">
                            <label for="name">Name</label>
                            <input required type="text" id="name" name="name">
                        </div>
                        @error('name') <span class="error-msg">{{$message}}</span> @enderror
                        <div class="form_group">
                            <label for="email">Email</label>
                            <input required type="email" id="email" name="email">
                        </div>
                        @error('email') <span class="error-msg">{{$message}}</span> @enderror
                        <div class="form_group">
                            <label for="mobile">Mobile</label>
                            <input required type="number" id="mobile" name="mobile">
                        </div>
                        @error('mobile') <span class="error-msg">{{$message}}</span> @enderror
                        <div class="form_group">
                            <label for="password">Password</label>
                            <input required type="password" id="password" name="password">
                        </div>
                        @error('password') <span class="error-msg">{{$message}}</span> @enderror
                        <div class="form_group">
                            <label for="confirm_password">Confirm Password</label>
                            <input required type="password" id="confirm_password" name="confirm_password">
                        </div>
                        @error('confirm_password') <span class="error-msg">{{$message}}</span> @enderror
                        <button type="submit">Create</button>
                        <div class="single-link">
                            <a href="{{url('login')}}">Already have an account?</a>
                        </div>
                    </form>
                </div>
          </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="{{asset('assets/script.js')}}"></script>
</body>
</html>