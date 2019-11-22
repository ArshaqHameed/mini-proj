<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="img/img4.png">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Flood Relief') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

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
            width:650px;
            margin: 0 auto;
            border: 1px solid #ccc;
        }
        .has-error{
            background-color: #ffff99;
        }
            table {
      /* font-family: arial, sans-serif; */
      border-collapse: collapse;
      width: 100%;
      table-layout: auto;
    }

    td, th {
      border: 2px solid ;
      text-align: center;
      padding: 10px;
    }

    * {
      box-sizing: border-box;
    }

    form.example input[type=text] {
      padding: 10px;
      font-size: 17px;
      border: 1px solid grey;
      float: left;
      width: 80%;
      background: #f1f1f1;
    }

    form.example button {
      float: left;
      width: 20%;
      padding: 10px;
      background: #2196F3;
      color: white;
      font-size: 17px;
      border: 1px solid grey;
      border-left: none;
      cursor: pointer;
    }

    form.example button:hover {
      background: #0b7dda;
    }

    form.example::after {
      content: "";
      clear: both;
      display: table;
    }
    h2{
        text-align: center;
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
                <a href="{{ url('user') }}" class="btn btn-danger" style="float:right;bottom:13px;right-margin:10px;">Back to Home</a>
            </div>
        </nav>
    </div>

    <div class="container-fluid col-12">

<table>
    <tr>
        <th>#</th>
        <th >Ration Card No</th>
        <th>Account</th>
        <th>IFSC</th>
    </tr>
    @if(count($data1) >0)
            @foreach ($data1 as $key => $v)
            @csrf
            <tr>
                <td> {{++$key}}</td>
                <td>{{$v->ration}}</td>
                <td>{{$v->account}} </td>
                <td>{{$v->ifsc}} </td>
            </tr>
            @endforeach
    @endif
</table>
<br>
<br>
<div class="row">
        <div  class="col-lg offset-md-5">
     <a href="{{ url('billapk/pdf') }}" class="btn btn-success">Convert into PDF</a>
    </div>
</div>

</div>

    </body>
</html>
