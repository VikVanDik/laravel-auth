@extends('layouts.admin')

@section('content')

<h3 class="d-inline-block">Lista Progetti</h3>
<div class="float-end">
    <h3 class="d-inline-block">Aggiungi</h3>
    <a href="{{route('admin.projects.create')}}" class="btn btn-success"><i class="fa-solid fa-plus"></i></a>
</div>


<table class="table my-5">
    <thead>
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Data</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
            <tr>
                <td>{{$project->name}}</td>
                <td>{{$project->creation}}</td>
                <td>
                    <a href="{{route('admin.projects.show', $project)}}" class="btn btn-info"><i class="fa-solid fa-eye"></i></a>
                    <a href="{{route('admin.projects.create')}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    @include('admin.partials.formDelete')
                </td>
            </tr>

        @endforeach
    </tbody>
  </table>

  {{ $projects->links() }}
@endsection
