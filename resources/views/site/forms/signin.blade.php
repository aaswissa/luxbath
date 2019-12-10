@extends('site.master')

@section('main_content')
<div class="container">
<h4 class="mt-3"><i class="fas fa-sign-in-alt"></i> Signin to LuxBath</h4> <br>
    <div class="row">
        <div class="col-md-6 mt-1 mb-5">
            <form action="" method="POST" novalidate="novalidate" autocomplete="off">
            @csrf()
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
                <input type="submit" value="Signin" class="btn btn-primary">
                <span class="text-danger">{{$signin_error ?? ''}}</span>
            </form>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col">
        <span class="text-muted">Wikipedia you might know... </span> <br>
        A shower is a place in which a person bathes under a spray of typically warm or hot water. Indoors, there is a drain in the floor. Most showers have temperature, spray pressure and adjustable showerhead nozzle. The simplest showers have a swivelling nozzle aiming down on the user, while more complex showers have a showerhead connected to a hose that has a mounting bracket. This allows the showerer to hold the showerhead by hand to spray the water at different parts of their body. A shower can be installed in a small shower stall or bathtub with a plastic shower curtain or door. Showering is common in Western culture due to the efficiency of using it compared with a bathtub. Its use in hygiene is, therefore, common practice.[1][page needed] A shower uses less water on average than a bath: 80 litres (18 imp gal; 21 US gal) for a shower compared with 150 litres (33 imp gal; 40 US gal) for a bath.[2]
        </div> 
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