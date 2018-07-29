@extends('adminlte::page')

@section('title', 'Lottery Card Generate')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
      <!-- Content Wrapper. Contains page content -->
            <!-- Main content -->
            <section class="content">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-ticket" aria-hidden="true"></i></span>

                    <div class="info-box-content">
                    <span class="info-box-text">Boletas</span>
                    <span class="text-left">Generadas: <strong class="text-right">34,000</strong></span>
                    <span class="text-left">Vendidas: <strong class="text-right">28,456</strong></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-contao" aria-hidden="true"></i></span>

                    <div class="info-box-content">
                    <span class="info-box-text">Costos</span>
                    <span class="info-box-number">Q. 58,390.90</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix visible-sm-block"></div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fa fa-money" aria-hidden="true"></i></span>

                    <div class="info-box-content">
                    <span class="info-box-text">Ventas</span>
                    <span class="info-box-number">Q. 284,560.00</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="fa fa-trophy" aria-hidden="true"></i></span>

                    <div class="info-box-content">
                    <span class="info-box-text">Ganadores</span>
                    <span class="info-box-number">12</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                    <h3 class="box-title">Reporte mensual de ventas</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <div class="btn-group">
                        <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-wrench"></i></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                        </div>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                    <div class="row">
                        <div class="col-md-8">
                        <p class="text-center">
                            <strong>Ventas: 1 de Junio de 2018 - 31 de Julio de 2018</strong>
                        </p>

                        <div class="chart">
                            <!-- Sales Chart Canvas -->
                            <canvas id="salesChart" style="height: 180px;"></canvas>
                        </div>
                        <!-- /.chart-responsive -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4">
                        <p class="text-center">
                            <strong>Ultimos ganadores del mes</strong>
                        </p>

                        <div class="progress-group">
                            <span class="progress-text">Mendez Paiz, Carlos Arnoldo</span>
                            <span class="progress-number"><b>1856</b>/2000</span>

                            <div class="progress sm">
                            <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                            </div>
                        </div>
                        <!-- /.progress-group -->
                        <div class="progress-group">
                            <span class="progress-text">Morales Avendaño, Carolina Amarilis</span>
                            <span class="progress-number"><b>1216</b>/2000</span>

                            <div class="progress sm">
                            <div class="progress-bar progress-bar-red" style="width: 55%"></div>
                            </div>
                        </div>
                        <!-- /.progress-group -->
                        <div class="progress-group">
                            <span class="progress-text">Coronado, José Alberto</span>
                            <span class="progress-number"><b>1516</b>/2000</span>

                            <div class="progress sm">
                            <div class="progress-bar progress-bar-yellow" style="width: 68%"></div>
                            </div>
                        </div>
                        <!-- /.progress-group -->
                        <div class="progress-group">
                            <span class="progress-text">Gatica Villeda, Fredy Ismael</span>
                            <span class="progress-number"><b>1642</b>/2000</span>

                            <div class="progress sm">
                            <div class="progress-bar progress-bar-yellow" style="width: 73%"></div>
                            </div>
                        </div>
                        <!-- /.progress-group -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    </div>
                    <!-- ./box-body -->
                    <div class="box-footer">
                    <div class="row">
                        <div class="col-sm-3 col-xs-6">
                        <div class="description-block border-right">
                            <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 100%</span>
                            <h5 class="description-header">Q. 284,560.00</h5>
                            <span class="description-text">VENTAS TOTALES</span>
                        </div>
                        <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-xs-6">
                        <div class="description-block border-right">
                            <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 17%</span>
                            <h5 class="description-header">Q. 58,390.90</h5>
                            <span class="description-text">TOTAL COSTOS</span>
                        </div>
                        <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-xs-6">
                        <div class="description-block border-right">
                            <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 83%</span>
                            <h5 class="description-header">Q. 226,169.10</h5>
                            <span class="description-text">UTILIDAD NETA</span>
                        </div>
                        <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-xs-6">
                        <div class="description-block">
                            <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 99%</span>
                            <h5 class="description-header">17</h5>
                            <span class="description-text">SORTEOS</span>
                        </div>
                        <!-- /.description-block -->
                        </div>
                    </div>
                    <!-- /.row -->
                    </div>
                    <!-- /.box-footer -->
                </div>
                <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- TABLE: LATEST ORDERS -->
            <div class="box box-info">
                <div class="box-header with-border">
                <h3 class="box-title">Latest Orders</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                <div class="table-responsive">
                    <table class="table no-margin">
                    <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Item</th>
                        <th>Status</th>
                        <th>Popularity</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href="pages/examples/invoice.html">OR9842</a></td>
                        <td>Call of Duty IV</td>
                        <td><span class="label label-success">Shipped</span></td>
                        <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="pages/examples/invoice.html">OR1848</a></td>
                        <td>Samsung Smart TV</td>
                        <td><span class="label label-warning">Pending</span></td>
                        <td>
                        <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                        <td>iPhone 6 Plus</td>
                        <td><span class="label label-danger">Delivered</span></td>
                        <td>
                        <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                        <td>Samsung Smart TV</td>
                        <td><span class="label label-info">Processing</span></td>
                        <td>
                        <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="pages/examples/invoice.html">OR1848</a></td>
                        <td>Samsung Smart TV</td>
                        <td><span class="label label-warning">Pending</span></td>
                        <td>
                        <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                        <td>iPhone 6 Plus</td>
                        <td><span class="label label-danger">Delivered</span></td>
                        <td>
                        <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="pages/examples/invoice.html">OR9842</a></td>
                        <td>Call of Duty IV</td>
                        <td><span class="label label-success">Shipped</span></td>
                        <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                        </td>
                    </tr>
                    </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->

        </div>
        <!-- /.col -->
            </div>
            <!-- /.row -->
            </section>
            <!-- /.content -->

@stop