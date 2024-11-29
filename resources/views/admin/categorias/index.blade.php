<div class="card-header">
    <a href="{{ route('categorias.create') }}" class="btn btn-primary m-2 float-right">Crear</a>
</div>
<div class="card-body">
    <table class="table table-bordered">
        <thead>
            <tr align="center">
                <th style="width: 5%">N°</th>
                <th>Descripción</th>
                <th style="width: 15%">Habilitado</th>
                <th colspan="2" style="width: 20%">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->id }}</td>
                    <td>{{ $categoria->name }}</td>
                    <td>{{ $categoria->mostrar }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('categorias.edit',$categoria->id ) }}" title="Editar"><i class="fas fa-pencil-alt"></i> </a>
                    </td>
                    <td>
                        <form action="{{ route('categorias.edit',$categoria->id ) }}" method="POST" class="formEliminar">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" title="Eliminar"> <i class="fas fa-trash"></i> </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>