<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscar productos o marcas</title>
    {{ HTML::style('css/bootstrap.min.css')}}
    {{ HTML::style('css/bootstrap.css')}}
    {{ HTML::script('js/jquery.min.js')}}
    {{ HTML::script('js/bootstrap.js')}}
</head>
<body>
<div class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Jose Luis Canizales</a>
        </div>
        <div class="navbar-collapse collapse">
        </div>
    </div>
</div>
<div class="container">
    <h1>Resultados de "{{$busqueda}}"</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="before"><a href="{{ route('formulario') }}"><button type="button" class="btn btn-default">Volver al formulario</button></a></div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Categoria</th>
                    </tr>
                </thead>
                <tbody class="resultados">
                    @forelse($result as $producto)
                        <tr><td>{{$producto->nombre}}</td><td>{{$producto->nombre_marca}}</td><td>{{$producto->nombre_categoria}}</td></tr>
                    @empty
                        <p>No se encontraron productos.</p>
                    @endforelse
                </tbody>
            </table>
            @if($busqueda=="")
                <p>{{ $result->links() }}</p>
            @else
            <p>{{ $result->appends(array('busqueda' => $busqueda))->links() }}</p>
            @endif
        </div>
    </div>
</div>
</body>
</html>