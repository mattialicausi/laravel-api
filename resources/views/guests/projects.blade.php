@extends('layouts.app')
@section('content')

<section id="sectionwhite">
    <div class="container">
        <h1 class="text-center fw-bold">Projects</h1>

       @forelse ($projects as $project)
        <div class="row">

                <div class="col-4">
                    <p>{{$project->description}}</p>
                </div>

                <div class="col-8">
                    <img src="{{asset('storage/' .$project->thumb1)}}" alt="img project">
                    <h2>{{$project->title}}</h2>
                </div>

            </div>
       @empty
            <div>Empty</div>
       @endforelse



    </div>
</section>

@endsection
