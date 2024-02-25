{{-- resources/views/admin/clients/index.blade.php --}}
<h1>Listado de Clientes</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table>
    <thead>
        <tr>
            <th>NIF</th>
            <th>Nombre de contacto</th>
            <th>Razón social</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clients as $client)
            <tr>
                <td>{{ $client->nif }}</td>
                <td>{{ $client->contact_name }}</td>
                <td>{{ $client->social_reason }}</td>
                <td>
                    <a href="{{ route('admin.clients.edit', $client) }}">Editar</a>
                    <form action="{{ route('admin.clients.destroy', $client) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('admin.clients.create') }}">Crear Nuevo Cliente</a>
