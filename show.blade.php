@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($exercise as $data)
            <div class="card" style="width: 18rem;">
                <img src="{{ $data->exercise_image }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">{{ $data->exercise_name }}</h5>
                    <p>{{ $data->exercise_description }}</p>
                    <a href="{{$data->exercise_video}}" class="btn btn-dark">WATCH</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
