@extends('layouts.main')
@section('title', 'Account')
@section('account', 'active')
@section('content')
    <div class="content">
        <h2 class="page-heading">Account<span>Main <i class="fa fa-chevron-right"></i> Account</span></h2>

             <div class="working-area">
            <div class="head">
                <span>Account</span>
                <div class="head-action">Change Password <i class="fa fa-key"></i></div>
            </div>
            <div class="body">
             <form id="accountForm">
                <div class="row">
                    <div class="form_group">
                        <label for="monthly_budget">Monthly Budget</label>
                        <input type="number" name="monthly_budget" id="monthly_budget" value="{{$user->monthly_budget}}">
                    </div>
                    <div class="form_group">
                        <label for="currency">Currency</label>
                       <select name="currency" id="currency">
                        <option @if($user->currency == "₹") selected @endif value="₹">₹</option>
                        <option @if($user->currency == "$") selected @endif value="$">$</option>
                        <option @if($user->currency == "€") selected @endif value="€">€</option>
                        <option @if($user->currency == "¥") selected @endif value="¥">¥</option>
                       </select>
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
                <form id="changePassword">
                    <div class="form_group">
                        <label for="old_password">Old Password</label>
                        <input required type="password" id="old_password" name="old_password">
                    </div>
                    <div class="form_group">
                        <label for="new_password">New Password</label>
                        <input required type="password" id="new_password" name="new_password">
                    </div>
                    <div class="form_group">
                        <label for="confirm_password">Confirm Password</label>
                        <input required type="password" id="confirm_password" name="confirm_password">
                    </div>
                    <button type="submit">Change</button>
                </form>
            </div>
        </div>
    </div>
@endsection
