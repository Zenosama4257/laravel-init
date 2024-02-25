{{-- resources/views/admin/clients/create.blade.php --}}
<h1>Crear Nuevo Cliente</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.clients.store') }}" method="POST">
    @csrf
    <label for="nif">NIF:</label>
    <input type="text" name="nif" required>

    <label for="contact_name">Nombre de contacto:</label>
    <input type="text" name="contact_name" required>

    <label for="social_reason">Razón social:</label>
    <input type="text" name="social_reason" required>


    <button type="submit">Guardar Cliente</button>
</form>

<a href="{{ route('admin.clients.index') }}">Volver al Listado</a>
