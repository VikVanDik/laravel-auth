<form
    class="d-inline-block"
    action="#"
    method="POST"
    onsubmit="return confirm('Sei sicuro di voler eliminare?')"
>
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
</form>
