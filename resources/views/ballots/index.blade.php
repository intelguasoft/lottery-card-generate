@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
<h1>Cuadernillos</h1>


@stop
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Generados</h3>

                <a href="{{ url('admin/boletas') }}" class="btn btn-sm btn-success"><i class="fa fa-plus" aria-hidden="true"> </i>  Generar</a>
                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th>No.</th>
                        <th>Fecha</th>
                        <th>Nombre</th>
                        <th>Usuario</th>
                        <th>Opciones</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>07-11-2014</td>
                        <td>Listado de etiquetas.pdf</td>
                        <td>Jose Villeda &#x26BD;</td>
                        <td>
                            <a href="" class="btn btn-sm btn-success"><i class="fa fa-print" aria-hidden="true"></i> Imprimir</a>
                            <a href="" class="btn btn-sm btn-primary"><i class="fa fa-search" aria-hidden="true"></i> Ver</a>
                            <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Eliminar</a>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>












@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
<script>
    console.log('Hi!');

</script>











@stop