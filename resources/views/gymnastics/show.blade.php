@extends('layouts.app')

@section('content')
    <main class="py-4">
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
                <div class="row">

                        <div class="col-lg-6 col-md-12">
                            <iframe width="560" height="315" src="{{$exercise->exercise_video}}"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                        <div class="col-lg-6 col-md-12" data-aos="fade-left" data-aos-delay="100">
                            <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                                <h1>{{ $exercise->exercise_name }}</h1>
                                <h5 class="my-5">{{ $exercise->exercise_description }}</h5>
                            </div>
                        </div>

                </div>
            </div>
        </section>
    </main>
@endsection
