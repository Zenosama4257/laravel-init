{{-- resources/views/admin/clients/edit.blade.php --}}
<h1>Editar Cliente</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.clients.update', $client) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="nif">NIF:</label>
    <input type="text" name="nif" value="{{ $client->nif }}" required>

    <label for="contact_name">Nombre de contacto:</label>
    <input type="text" name="contact_name" value="{{ $client->contact_name }}" required>

    <label for="social_reason">Razón social:</label>
    <input type="text" name="social_reason" value="{{ $client->social_reason }}" required>


    <button type="submit">Actualizar Cliente</button>
</form>

<a href="{{ route('admin.clients.index') }}">Volver al Listado</a>
