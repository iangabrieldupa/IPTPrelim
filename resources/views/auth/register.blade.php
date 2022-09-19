@extends('base')

@section('content')
<h1 class="text-center mt-5"><a style="color:red">AEON</a><a style="color:blue">ime</a></h1>
<div class="container col-md-3 offset-md-4.5 mt-5">

    <div class="card">
        <div class="card-header text-center">
            <h3>Sign up</h3>
        </div>
        <div class="card-body">
            <form action="{{ '/register' }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <a href="{{ '/' }}">Already have an account</a>
                    </div>
                    <button class=" btn btn-primary px-5" type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection
