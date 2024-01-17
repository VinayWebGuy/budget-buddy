<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Budget Buddy</title>
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
</head>
<body>
    <div class="container">
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
                    <form action="">
                        <div class="form_group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name">
                        </div>
                        <div class="form_group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email">
                        </div>
                        <div class="form_group">
                            <label for="mobile">Number</label>
                            <input type="number" id="mobile" name="mobile">
                        </div>
                        <div class="form_group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password">
                        </div>
                        <div class="form_group">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" id="confirm_password" name="confirm_password">
                        </div>
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