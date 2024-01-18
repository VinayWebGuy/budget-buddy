@extends('layouts.main')
@section('title', 'Security')
@section('security', 'active')
@section('content')
    <div class="content">
        <h2 class="page-heading">Security<span>Main <i class="fa fa-chevron-right"></i> Security</span></h2>

        <div class="working-area">
            <div class="head">
                <span>Security</span>
                <div class="head-action">Deactivate <i class="fa fa-ban"></i></div>
            </div>
            <div class="body">
                <form action="">
                    <div class="row">

                        <div class="form_group">
                            <label for="tfa">2 Factor Authentication</label>
                            <select name="tfa" id="tfa">
                                <option value="0">Disable</option>
                                <option value="1">Enable</option>
                            </select>
                        </div>
                        <div class="form_group">
                            <label for="notifications">Notifications</label>
                            <select name="notifications" id="notifications">
                                <option value="1">Enable</option>
                                <option value="0">Disable</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit">Update</button>
                </form>
            </div>
        </div>
        <div class="backdrop"></div>
        <div class="modal">
            <div class="modal-heading">Deactivate Account
                <div class="close-modal"><i class="fa fa-times"></i></div>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form_group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password">
                    </div>
                    <button type="submit">Deactivate</button>
                </form>
            </div>
        </div>
    </div>
@endsection
