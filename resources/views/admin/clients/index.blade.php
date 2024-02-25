<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Listado de clientes</h1>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('admin.clients.store') }}" class="btn btn-primary mb-3">Nuevo Cliente</a>
                        <table class="table table-bordered" id="client_table">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>nif</th>
                                    <th>simel</th>
                                    <th>contact_name</th>
                                    <th>social_reason</th>
                                    <th>rate</th>
                                    <th>url</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client)
                                <tr>
                                    <td>{{ $client->id }}</td>
                                    <td>{{ $client->nif }}</td>
                                    <td>{{ $client->simel }}</td>
                                    <td>{{ $client->contact_name }}</td>
                                    <td>{{ $client->social_reason }}</td>
                                    <td>{{ $client->rate }}</td>
                                    <td>{{ $client->url }}</td>
                                    <td>
                                        <a href="{{ route('admin.clients.update', $client->id) }}" class="btn btn-success">
                                            <i class="fas fa-edit"></i> Modificar
                                        </a>
                                        <form action="{{ route('admin.clients.destroy', $client->id) }}" id="delete_form" method="post" onsubmit="return confirm('¿Está seguro que desea eliminar el registro?')" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fas fa-trash-alt"></i> Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('scripts')
<script>
    $(document).ready(function() {
        $('#client_table').DataTable();
    })
</script>
@endsection
