@extends('layouts.admin')

@section('content')

<h3>Lista tipi</h3>
<span class="text-warning">Clicca sul nome per modificarlo</span>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($types as $type )
            <tr>
                <form
                action="{{ route('admin.types.update', $type) }}"
                method="POST"
                class="d-inline-block"
                onsubmit="return confirm('Sei sicuro di voler modificare {{$type->name}}?')">
                <td><input type="text" value="{{$type->name}}" name="name" id="name" class="no-border"></td>
                <td>
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                    </form>
                    <form
                        class="d-inline-block"
                        action="{{route('admin.types.destroy', $type->id)}}"
                        method="POST"
                        onsubmit="return confirm('Sei sicuro di voler eliminare {{$type->name}}?')"
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

  <div class="my-5">
        <h3>Inserisci un nuovo tipo</h3>
        <form action="{{route('admin.types.store')}}" method="POST">
            @csrf

            <div class="mb-3">
              <label for="name" class="form-label">Nome</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>

            <button type="submit" class="btn btn-success">Crea</button>
            <button type="reset" class="btn btn-danger">Annulla</button>
          </form>
  </div>

@endsection
