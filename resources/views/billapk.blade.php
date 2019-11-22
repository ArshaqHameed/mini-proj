<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Flood Relief') }}</title>

    <link rel="icon" href="img/img4.png">
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
                <a href="{{ url('/user') }}" class="btn btn-danger" style="float:right;bottom:13px;right-margin:10px;">Back to Home</a>
            </div>
            <!-- Search form -->

        </nav>
    </div>
    <div class="form-group">
    <h2>Bill Generation</h2></div>
    <div class="container-fluid col-12">
    <table>
        <tr>
            <th colspan="2">#</th>
            <th colspan="2" >Ration Card No</th>
            <th colspan="2">Name</th>
            <th colspan="2">Number</th>
            <th colspan="2">House Name</th>
            <th colspan="2">Taluk</th>
            <th colspan="2">Village</th>
            <th colspan="2">Adhar</th>
            <th colspan="2">Account Number</th>
            <th colspan="2">IFSC</th>
            <th colspan="2">Action</th>
        </tr>
        @if(count($data) >0)
            @foreach ($data as $key => $v)
                @csrf
    @method('PATCH')
            <tr>
                <td colspan="2"> {{++$key}}</td>
                <td colspan="2">{{$v->ration}}</td>
                <td colspan="2">{{$v->name}} </td>
                <td colspan="2">{{$v->mobile}}</td>
                <td colspan="2">{{$v->housename}}</td>
                <td colspan="2">{{$v->taluk}}</td>
                <td colspan="2">{{$v->village}}</td>
                <td colspan="2">{{$v->adhar}}</td>
                <td colspan="2">{{$v->account}}</td>
                <td colspan="2">{{$v->ifsc}}</td>
                <td colspan="2">
                    <div>
                    <a class="btn btn-sm btn-primary" href="{{ route('billapk.storebill',$v->ration)}}">For Bill</a>
                    </div>
                </td>
            </tr>
            @endforeach
        @endif
        </table>
</div>
<br>

<div class="col-xs offset-5">
<a  class="btn btn-primary" href="{{ route('billapk.gen')}}">Generate Bill</a>
</div>
</body>
</html>
