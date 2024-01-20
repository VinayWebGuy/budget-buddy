<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - Budget Buddy</title>
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        var chart = false
    </script>
</head>
<body class="">
  <main>
    <aside>
        <div class="logo"><span>Budget Buddy</span> <i>BB</i></div>
        <ul class="menu">
            <li class="@yield('dashboard')"><a href="{{url('/')}}"><i class="fa-solid fa-home"></i> <span>Dashboard</span></a></li>
            <li class="@yield('category')"><a href="{{url('category')}}"><i class="fa-solid fa-list-alt"></i> <span>Category</span></a></li>
            <li class="@yield('income')"><a href="{{url('income')}}"><i class="fa-solid fa-money-bill"></i> <span>Income</span></a></li>
            <li class="@yield('expense')"><a href="{{url('expense')}}"><i class="fa-solid fa-receipt"></i> <span>Expense</span></a></li>
            <li class="@yield('budget')"><a href="{{url('budget')}}"><i class="fa-solid fa-hand-holding-dollar"></i> <span>Budget</span></a></li>
            <li class="@yield('report')"><a href="{{url('report')}}"><i class="fa-solid fa-file"></i> <span>Report</span></a></li>
            <li class="@yield('account')"><a href="{{url('account')}}"><i class="fa-solid fa-gears"></i> <span>Account</span></a></li>
            <li class="@yield('security')"><a href="{{url('security')}}"><i class="fa-solid fa-shield-halved"></i> <span>Security</span></a></li>
            <li class="@yield('bb_club')"><a href="{{url('bb-club')}}"><i class="fa-solid fa-wallet"></i><span> BB Club</span></a></li>
            <li><a href="{{url('logout')}}"><i class="fa-solid fa-right-from-bracket"></i> <span>Logout</span></a></li>
        </ul>
        <div class="version"><i class="fa-solid fa-code-fork"></i> <span>version 1.02</span></div>
    </aside>
    <section>
        <header>
            <div class="toggle-sidebar">
                <i class="fa fa-bars"></i>
            </div>
            <div class="header-icons">
                <div class="notification-header">
                    <i class="fa-solid fa-bell"></i>
                    <div class="header-icon-box">
                        <h4>Recent Notifications</h4>
                        <div class="single-notificiation"><span>New Expense Added.</span></div>
                        <div class="single-notificiation"><span>New Income Added.</span></div>
                        <div class="single-notificiation"><span>Your monthly expense crossed 70% of your budget.</span></div>
                        <div class="single-notificiation"><span>New Expense Added.</span></div>
                        <div class="single-notificiation"><span>Your monthly expense crossed 50% of your budget.</span></div>
                        <a href="#" class="view-all">View All <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
               <div class="settings-header">
                <a href="{{url('account')}}"><i class="fa-solid fa-cog"></i></a> 
               </div>
                <div class="profile-header">
                    <a href="{{url('profile')}}"><i class="fa-solid fa-user"></i>   </a>
                </div>
            </div>
        </header>