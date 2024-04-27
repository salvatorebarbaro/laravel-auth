@extends ('layouts/app')

@section('content')

<div class="container">
    <div class="row justify-content-center m-5">
        
            <h1 class="text-center mb-4">{{$project->title}}</h1>
        
        <div class="col">
            <img class=" img-fluid w-100  " src="{{$project->img_path}}" alt="">
        </div>
        <p class="text-center">{{$project->description}}</p>
        <div class="col-auto my-5">
            
            <a href="{{route('admin.projects.edit', $project)}}" type="button" class="btn btn-warning text-uppercase ">modifica</a href="">
        </div>
        
    </div>
    
    
</div>

@endsection