<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">

        <title>@yield('title')</title>
    		<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">

        <!-- Bootstrap core CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="offcanvas.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="/assets/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <nav class="navbar navbar-top navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= url('/') ?>">Sistem Pakar</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?= url('/') ?>">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kerusakan <span class="caret"></span></a>
                            <ul class="dropdown-menu" style="width:200px;">
                                <a href="<?= url('diagnosis/Q001') ?>" class="list-group-item">Mesin Tidak Mau Hidup Atau Sulit Di Hidupkan</a>
                                <a href="<?= url('diagnosis/Q008') ?>" class="list-group-item">Kendala Pada Gigi Rotari Atau Kopling</a>
                                <a href="<?= url('diagnosis/Q013') ?>" class="list-group-item">Mesin Kekurangan Daya</a>
                                <a href="<?= url('diagnosis/Q021') ?>" class="list-group-item">Kendala Pada Karburator Dan Sistem Bahan Bakar</a>
                                <a href="<?= url('diagnosis/Q029') ?>" class="list-group-item">Kendala Pada Silinder Dan Klep</a>
                                <a href="<?= url('diagnosis/Q034') ?>" class="list-group-item">Kendala Pada Pengendalian Kemudi</a>
                                <a href="<?= url('diagnosis/Q038') ?>" class="list-group-item">Kendala Pada Alternator Atau Kopling Starter Atau Penegang Rantai Mesin</a>
                                <a href="<?= url('diagnosis/Q041') ?>" class="list-group-item">Kendala Pada Performa Jelek Kecepatan Rendah</a>
                                <a href="<?= url('diagnosis/Q045') ?>" class="list-group-item">Kendala Pada Performa Jelek Kecepatan Tinggi</a>
                            </ul>
                        </li>
                        <li><a href="<?= url('/tentang') ?>">Tentang</a></li>
                    </ul>
                </div><!-- /.nav-collapse -->
            </div><!-- /.container -->
        </nav><!-- /.navbar -->

        <div class="container-fluid" style="margin-top:20px;">
      			<div class="container">
      					<div class="panel-body">
      					    @yield('body')
      					</div>

      					<div class="panel-footer">
      						  @yield('footer')
      					</div>
      			</div>
        </div>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="/assets/js/ie10-viewport-bug-workaround.js"></script>
        <script src="offcanvas.js"></script>
    </body>
</html>
