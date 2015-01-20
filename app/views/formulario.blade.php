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
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Buscar</h3>
                </div>
                <div class="panel-body" >
                    {{ Form::open( array('action' => 'resultados', 'class' => 'form_ajax', 'method' => 'get')) }}
                    <div class="form-group">
                        {{ Form::text('busqueda', $value = null, array('placeholder' => 'Buscar', 'class'=> 'form-control' )) }}
                    </div>
                    <div class="form-group">
                        {{ Form::submit('Buscar', array('class' => 'btn btn-primary form-control')) }}
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>