<!-- resources/views/admin/clients/_form.blade.php -->

<form action="{{ $action }}" method="POST">
    @csrf

    @isset($method)
        @method($method)
    @endisset

    <!-- Agrega aquí tus campos del formulario usando el modelo Client -->

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
