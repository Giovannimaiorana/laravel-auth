@extends('layouts.app')

@section('content')
<div class="container">
  <div class="container mt-3 mb-3">
    <a class="btn btn-primary" href="{{Route('admin.projects.create')}}">Crea nuovo</a>
  </div>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Descrizione</th>
        <th scope="col">Link</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)

            <tr>
                <th scope="row"></th>
                <td>{{$project->title }}</td>
                <td>{{$project->description }}</td>
                <td>{{$project->link }}</td>
                <td><a class="btn btn-primary" href="{{route('admin.projects.show',['project'=>$project->id])}}">Info</a></td>
                <td><a class="btn btn-secondary" href="{{ route('admin.projects.edit',['project'=>$project->id]) }}">Modifica</a></td>
            </tr>      
    
        @endforeach
    </tbody>    
</table>  
  

</div>

    
@endsection