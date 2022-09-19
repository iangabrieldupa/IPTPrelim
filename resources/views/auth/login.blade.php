@extends('base')

@section('content')
<h1 class="text-center mt-5"><a style="color:red">AEON</a><a style="color:blue">ime</a></h1>
<div class="container col-md-3 offset-md-4.5 mt-5">

    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <div class="card">
        <div class="card-header text-center">
            <h3>Login</h3>
        </div>
        <div class="card-body">
            <form action="{{ '/' }}" method="POST">
                {{ csrf_field() }}

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
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <a href="{{ '/register' }}">Sign up for an account?</a>
                    </div>
                    <button class=" btn btn-primary px-5" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
