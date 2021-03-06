@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="login" method="POST" autocomplete="off">
                <div class="form-group">
                    @csrf
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>


                <button type="submit" class="btn btn-primary">Login</button><br><br>
                <div class="form-row">
                    <button type="submit">
                        <a href="/login/google" class="btn btn-primary">Sign in with google</a>
                    </button>
                </div>

                <!-- <div class="form-row">
                    <a href="#" class="btn btn-secondary btn-block">Sign in with google</a>
                </div> -->
            </form>
        </div>
    </div>
</div>
@endsection