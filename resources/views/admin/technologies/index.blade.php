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
                    <form
                        class="d-inline-block"
                        action="{{route('admin.projects.destroy', $technology->id)}}"
                        method="POST"
                        onsubmit="return confirm('Sei sicuro di voler eliminare?')"
                                        >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
            </tr>

        @endforeach
    </tbody>
</table>

@endsection
