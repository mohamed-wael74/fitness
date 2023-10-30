@extends('layouts.app')

@section('content')
<div class="container col-6 my-5">
        <div class="card" >
            <div class="card-body">
                <h5 class="card-title"> {{$tt->name}} </h5>
                <p class="card-text">{{$tt->feedback}}</p>
                <a href="{{route('chat.index')}}" class="btn btn-warning col-12">Subscribe</a>
            </div>
        </div>
</div>
@endsection
