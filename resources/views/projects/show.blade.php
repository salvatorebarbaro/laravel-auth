@extends ('layouts/app')

@section('content')

<div class="container">
    <div class="row justify-content-center m-5">
        
            <h1 class="text-center mb-4">{{$project->title}}</h1>
        
        <div class="col">
            <img class=" img-fluid " src="{{$project->img_path}}" alt="">
        </div>
        <p class="text-center">{{$project->description}}</p>
    </div>
    
</div>

@endsection