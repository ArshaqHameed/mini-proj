<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Flood Relief</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">


    <link rel="icon" href="img/img4.png">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- jQuery CDN -->
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
    </script>

    <style type="text/css">
        .box{
            width:600px;
            margin: 0 auto;
            border: 1px solid #ccc;
        }
        .has-error{
            background-color: #ffff99;
        }
        .close {
            float: right;
            font-size: 21px;
            font-weight: bold;
            line-height: 1;
            color: #000;
            text-shadow: 0 1px 0 #fff;
            filter: alpha(opacity=20);
            opacity: .2;
          }
          .close:hover,
          .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
            filter: alpha(opacity=50);
            opacity: .5;
          }

    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <p class="navbar-brand">
                        Flood Relief
                    </p>
                </div>
                <a href="{{ url('/user') }}" class="btn btn-danger" style="float:right;bottom:13px;">Back to Home</a>
            </div>
        </nav>
    </div>
<br>
<br><br><br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(\Session::has('success'))
                            <div class="alert alert-success alert-dismissible" area-label="close">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                <p>{{ \Session::get('success') }}</p>
                            </div>
                        @endif

                        @isset($message)
                <div class="alert alert-danger">
                    <strong>{{$message}}</strong>
                </div>
                @endif
            <div class="card">

                <div class="card-header"> <br></div>
                    <div class="card-body">
                    <br><br>
                        <form method="get" action="search" autocomplete="off">
                            @csrf
                            <div class="col-md-9">
                                <input id="search" type="text" placeholder="Enter Ration card Number :" class="form-control" name="search" autofocus>
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary" >Search Application</button>
                            </div>
                        </form>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
</div>

<br>

</body>
</html>
