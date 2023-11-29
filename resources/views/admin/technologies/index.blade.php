@extends('layouts.admin')

@section('content')

<h3>Lista tecnologie</h3>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($technologies as $technology )
            <tr>
                <td>{{$technology->name}}</td>
                <td>
                    <a href="#" class="btn btn-info"><i class="fa-solid fa-eye"></i></a>
                    <a href="#" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    @include('admin.partials.formDelete')
                </td>
            </tr>

        @endforeach
    </tbody>
</table>

@endsection
