@extends('layouts.app',[
    'title' => config('app.name').' - Terms & Conditions',
    'active' => 'terms-and-conditions',
])

@section('content')

<div class="row justify-content-center">
    <div class="col-8">
        <div class="p-5 mt-5 text-center bg-success">
            <h1 class="text-light">Terms & Conditions</h1>
        </div>
    </div>
</div>

@endsection