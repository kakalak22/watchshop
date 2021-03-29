@extends('layout')
@section('content')
<div class="register">
    <div class="container">
        <div class="register-top heading">
            <h2>REGISTER</h2>
        </div>
        <form action="{{URL::to('/register-process')}}" method="POST">
        {{ csrf_field() }}
        <div class="register-main">
            <div class="col-md-6 account-left">
                <input placeholder="Name" name = "name" type="text"  required>
                    <input placeholder="Username" name="user" type="text"  required>
                    <input placeholder="Email address" name="email" type="text" value="{{old('email')}}" required>
                    <input placeholder="Adress" name="address" type="text" value="{{old('address')}}" required>
            </div>
            <div class="col-md-6 account-left">
                <input placeholder="Password" type="password" name="password" tabindex="4" required>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="address submit">
            <input type="submit" value="Submit">
        </div>
    </form>
    </div>
</div>
@endsection