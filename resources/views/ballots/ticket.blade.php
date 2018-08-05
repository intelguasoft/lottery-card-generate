<!doctype html>
<html lang="es">

<head>
    <title>Lista de boletas: {{ date('d-m-Y H:i:s') }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/Ionicons/css/ionicons.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/AdminLTE.css') }}">
    <!-- DataTables with bootstrap 3 style -->
    <link rel="stylesheet" href="//cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.css">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style>
        .number {
            color: #2c2c2c;
            letter-spacing: .05em;
            font-weight: 900;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            @foreach ($collectionBallots as $ballots)
            <div class="col-xs-4">
                <!-- Widget: user widget style 1 -->
                <div class="box box-widget widget-user-2">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-green">
                        <div class="widget-user-image">
                            <img class="img-circle" src="{{ asset('./img/logo-trebol.png')}}" alt="Logo Lottery">
                        </div>
                        <!-- /.widget-user-image -->
                        <h3 class="widget-user-username">Lottery Card Generate</h3>
                        <div class="widget-user-desc">Bono Entre Amigos <span class="pull-right badge bg-red">N&#186;&#32;{{ str_pad($loop->iteration, 4, "0", STR_PAD_LEFT) }}</span></div>
                    </div>
                    <div class="box-footer no-padding">
                        <div class="row">
                            @foreach($ballots as $ticket)
                            <div class="col-xs-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">{{ $ticket }}</h5>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            @endforeach
                        </div>
                        <span class="description-text">{{ date('d/m/Y') }}</span>
                        <!-- /.row -->
                    </div>
                </div>
                <!-- /.widget-user -->
            </div>
            <!-- /.col -->
            @endforeach
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="{{ asset('vendor/adminlte/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/adminlte/vendor/jquery/dist/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('vendor/adminlte/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- Select2 -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <!-- DataTables with bootstrap 3 renderer -->
    <script src="//cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.js"></script>
    <!-- ChartJS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js"></script>
</body>

</html>