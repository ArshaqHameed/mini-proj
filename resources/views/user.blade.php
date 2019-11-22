<head>
    <title>Flood Relief</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="icon" href="img/img4.png">

    <style>

        .footer{
  background: #152F4F;
  color:white;

  .links{
    ul {list-style-type: none;}
    li a{
      color: white;
      transition: color .2s;
      &:hover{
        text-decoration:none;
        color:#4180CB;
        }
    }
  }
  .about-company{
    i{font-size: 25px;}
    a{
      color:white;
      transition: color .2s;
      &:hover{color:#4180CB}
    }
  }
  .location{
    i{font-size: 18px;}
  }
  .copyright p{border-top:1px solid rgba(255,255,255,.1);}
}
    </style>
  </head>
<nav class="navbar navbar-inverse">
<div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="user" style="margin-left:5mm">Flood Relief</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
            {{--  --}}
    <li><a href="{{ route('newapk.create') }}">New Application</a></li>
    <li><a href="{{ url('editapk') }}">Update Application</a></li>
    <li><a href="{{ url('appealapk') }}">Appeal Application</a></li>
    {{--<li><a href="{{ url('billapk') }}"></a></li>--}}
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Bill Generation
                <span class="caret"></span>
        </a>
                <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ url('billapk') }}">
                                Initial Bill
                            </a>
                        </li>
                        <li>
                                <a href="{{ url('billappeal.index')}}">
                                    Appeal Bill
                                </a>
                        </li>
                </ul>
    </li>
     {{--<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> --}}
    <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="{{ url('/logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
    {{-- <li><a href="#">Page 3</a></li> --}}
    </ul>
</div>
</nav>

{{--@section('content')
<div class="container">

</div>
@endsection

<div class="card text-center">
        <div class="card-header">
          Featured
        </div>
        <div class="card-body panel-primary">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <div class="card-footer text-muted">
          2 days ago
        </div>
      </div>
<div class="card" style="width: 130cm;">
        <img class="card-img-top" src="/img/img1.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>--}}

      <div class="jumbotron">
            <div class="container">
                <img src="img\img1.jpg" width="100%" height="50%" alt="nting"/>
            </div>
        </div>
 <div class="panel panel-primary">
  <div class="panel-heading">
      <br>
  </div>
  <div class="panel-body">
    <strong >Flooding </strong> occur as an overflow of water from water bodies, such as a river, lake, or ocean, in which the water overtops or breaks levees, resulting in some of that water escaping its usual boundaries,or it may occur due to an accumulation of rainwater on saturated ground in an areal flood. While the size of a lake or other body of water will vary with seasonal changes in precipitation and snow melt, these changes in size are unlikely to be considered significant unless they flood property or drown domestic animals.
</div>
</div>

<div class="mt-5 pt-5 pb-5 footer">
    <div class="container">
      <div class="row mt-8 col-xs-12">
        <div class="col copyright">
          <br>
          <p style="text-align: center"><small class="text-white-50">© 2019. All Rights Reserved.</small></p>
        </div>
      </div>
    </div>
    </div>
