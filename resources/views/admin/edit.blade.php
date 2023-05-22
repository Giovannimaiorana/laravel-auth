@extends('layouts.app')

@section('content')

       <div class="container">

           <form action="{{route('admin.projects.update',['project'=>$project->id])}}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                        <label for="title" class="form-label">titolo:</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror"  id="title" name="title" value="{{old('title', $project->title)}}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">titolo:</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror"  id="description" name="description" value="{{old('description', $project->description)}}">
                 </div>
                 <div class="mb-3">
                    <label for="link" class="form-label">titolo:</label>
                    <input type="text" class="form-control @error('link') is-invalid @enderror"  id="link" name="link" value="{{old('link', $project->link)}}">
                </div>
     
    
        
           </form>

       </div>

@endsection
