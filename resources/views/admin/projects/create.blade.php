@extends('layouts.admin')

@section('content')

<form action="{{route('admin.projects.store')}}" method="POST">
    @csrf

    <div class="mb-3">
      <label for="name" class="form-label">Nome</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
      <label for="creation" class="form-label">Data di creazione</label>
      <input type="date" class="form-control" id="creation" name="creation">
    </div>
    <div class="mb-3">
        <label for="url" class="form-label">URL</label>
        <input type="text" class="form-control" id="url" name="url">
    </div>
    <div class="mb-3">
        <label for="technology" class="form-label">Tecnologia</label>
        <input type="text" class="form-control" id="technology" name="technology">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <input type="text" class="form-control" id="type" name="type">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <input type="text" class="form-control" id="description" name="description">
    </div>

    <button type="submit" class="btn btn-primary">Invia</button>
    <button type="reset" class="btn btn-danger">Annulla</button>
  </form>


@endsection
