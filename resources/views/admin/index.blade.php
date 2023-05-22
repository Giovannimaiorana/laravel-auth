@extends('layouts.app')

@section('content')
<div class="container">
  <div class="container mt-3 mb-3">
    <a class="btn btn-primary" href="#">Dashboard</a>
  </div>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)

            <tr>
                <th scope="row"></th>
                <td>{{$project->title }}</td>
                <td>{{$project->description }}</td>
                <td>{{$project->link }}</td>
                <td><a class="btn btn-primary" href="">modifica</a></td>
            </tr>      
    
        @endforeach
    </tbody>    
</table>  
  

</div>

    
@endsection