@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
<h1>Cuadernillos generados</h1>






@stop
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <form method="POST" action="/admin/boletas">
                    {{ csrf_field() }}
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Digitos por boletas:</label>
                            <select class="form-control select2" name="digitos" style="width: 100%;">
                                <option value="4" selected="selected">4 Digitos</option>
                                <option value="5" >5 Digitos</option>>
                            </select>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Fecha:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="date" name="fecha" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                            </div>
                            <!-- /.input group -->
                        </div>

                    </div>
                    <div class="col-md-4">
                        <input type="submit" class="btn btn-success" value="Generar boletas">
                    </div>
                </form>
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