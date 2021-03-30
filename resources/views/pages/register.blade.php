@extends('layout')
@section('content')
<<<<<<< HEAD
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
=======
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <h2>Register form</h2>
            <form action="register" method="POST">
                @csrf
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter username"
                        name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email"
                        name="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password"
                        name="pwd">
                </div>

                <button type="submit" class="btn btn-default">Register</button>
            </form>
        </div>
    </div>
</div>

@endsection
>>>>>>> 0e52c9bf09d9f2aca54056917f81f254b95c5855
