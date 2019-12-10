@extends('site.master')

@section('main_content')
<div class="container">
<h4 class="mt-3"><i class="fas fa-sign-in-alt"></i> Signup to LuxBath</h4> <br>
    <div class="row">
        <div class="col-md-6">
        <div class="row mt-2">
        <div class="col">
        Welcome to our new website
After a couple of months planning, we are delighted to announce the launch of our newly redesigned website. We wanted a new website to better collaborate with our customers, distribution partners and educational professionals.
        </div> 
    </div>
            <form action="" method="POST" novalidate="novalidate" autocomplete="off">
            @csrf()
            <div class="form-group">
                    <label for="name">Name:</label>
                    <input value="{{ old('name') }}" type="text" name="name" id="name" class="form-control">
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
                <div class="form-group">
                    <label for="email">* Email</label>
                    <input value="{{ old('email') }}" type="email" name="email" id="email" class="form-control">
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>
                <div class="form-group">
                    <label for="password">* Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    <span class="text-danger">{{ $errors->first('password') }}</span>

                </div>
                <div class="form-group">
                    <label for="password-confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password-confirmation" class="form-control">
                </div>
                <input type="submit" value="Signup" class="btn btn-primary">
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col mb-5">

        </div>
    </div>
    <div class="row">
        <div class="col mb-5">

        </div>
    </div>
    <div class="row">
        <div class="col mb-5">

        </div>
    </div>
</div>
@endsection