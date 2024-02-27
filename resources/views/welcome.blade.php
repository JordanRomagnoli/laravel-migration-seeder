@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 text-center ">
                <div class="mb-4">
                    <h1>Find your daily train</h1>
                    <a href="{{ route('trains.show') }}" class="btn btn-primary">Search</a>
                    
                </div>

                    <h5>
                        Look all train 
                    </h5>
                    <a href="{{ route('trains.index') }}" class="btn btn-primary">Search</a>
                </div>
            </div>
        </div>
    </div>
@endsection
