<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title-page')</title>
    
    <!-- Bootstrap -->
    @section('css')
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    @show

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    @include('default_template.nav_bar')

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <!-- conteúdo da pagina -->
            <h1>
            @yield('title-model') - <small>@yield('subtitle-model')</small> </h1>
            <hr>
            @yield('content-model')
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          @yield('paginate')
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

  </body>
</html>