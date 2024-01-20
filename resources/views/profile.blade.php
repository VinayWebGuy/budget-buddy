@extends('layouts.main')
@section('title', 'Profile')
@section('profile', 'active')
@section('content')
    <div class="content">
        <h2 class="page-heading">Profile<span>Main <i class="fa fa-chevron-right"></i> Profile</span></h2>

        <div class="working-area">
            <div class="head">
                <span>Profile</span>
                <div class="head-action">Change Password <i class="fa fa-key"></i></div>
            </div>
            <div class="body">
                <form action="">
                    <div class="row">

                        <div class="form_group">
                            <label for="name">Name</label>
                           <input type="text" id="name" name="name" value="{{$user->name}}">
                        </div>
                        <div class="form_group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" value="{{$user->email}}">
                        </div>
                        <div class="form_group">
                            <label for="number">Mobile</label>
                            <input type="number" id="number" name="number" value="{{$user->mobile}}">
                        </div>
                    </div>
                    <button type="submit">Update</button>
                </form>
            </div>
        </div>
        <div class="backdrop"></div>
        <div class="modal">
            <div class="modal-heading">Change Password
                <div class="close-modal"><i class="fa fa-times"></i></div>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form_group">
                        <label for="old_password">Old Password</label>
                        <input type="password" id="old_password" name="old_password">
                    </div>
                    <div class="form_group">
                        <label for="new_password">New Password</label>
                        <input type="password" id="new_password" name="new_password">
                    </div>
                    <div class="form_group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" id="confirm_password" name="confirm_password">
                    </div>
                    <button type="submit">Change</button>
                </form>
            </div>
        </div>
    </div>
@endsection
