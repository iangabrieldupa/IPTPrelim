@extends('base')
@extends('navbar')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-sm-4 ">
            @if(session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <livewire:animes.create/>
        </div>
        <div class="col-sm-8">
            <livewire:animes.index/>
        </div>
    </div>
</div>

@endsection
