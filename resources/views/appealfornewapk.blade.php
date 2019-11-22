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
        </nav>
    </div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Appeal Application') }}</div>
                <div class="card-body">
                <br>
                    <form method="POST" action="{{ route('appeal.store') }}" >
                    @csrf
                        <div class="form-group row">
                            @foreach ($data as $v)
                                <label for="ration" class="col-md-5 col-form-label text-md-left" style="padding-left: 85px;">{{ __('Ration Card Number :') }}</label>
                                <div class="col-md-6">
                                    <input id="ration" type="text"  align="center" value="{{ $v->ration}}" class="form-control" name="ration" >
                                </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-5 col-form-label text-md-left" style="padding-left: 85px;">{{ __('Applicant Name :') }}</label>
                                <div class="col-md-6">
                                    <input id="ration" type="text"  align="center" value="{{ $v->name}}" class="form-control" name="name" >
                                </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone" class="col-md-5 col-form-label text-md-left" style="padding-left: 85px;">{{ __('Mobile Number :') }}</label>
                                <div class="col-md-6">
                                    <input id="mobile" type="text"  align="center" value="{{ $v->mobile}}" class="form-control" name="mobile" >
                                </div>
                                </div>

                                <div class="form-group row">
                                    <label for="adhar" class="col-md-5 col-form-label text-md-left" style="padding-left: 85px;">{{ __('Aadhar Number :') }}</label>
                                <div class="col-md-6">
                                    <input id="adhar" type="text"  align="center" value="{{ $v->adhar}}" class="form-control" name="adhar" >
                                </div>
                                </div>

                                <div class="form-group row">
                                    <label for="account" class="col-md-5 col-form-label text-md-left" style="padding-left: 85px;">{{ __('Account Number :') }}</label>
                                <div class="col-md-6">
                                    <input id="account" type="text"  align="center" value="{{ $v->account}}" class="form-control" name="account" >
                                </div>
                                </div>

                                <div class="form-group row">
                                    <label for="ifsc" class="col-md-5 col-form-label text-md-left" style="padding-left: 85px;">{{ __('ifsc Number :') }}</label>
                                <div class="col-md-6">
                                    <input id="ifsc" type="text"  align="center" value="{{ $v->ifsc}}" class="form-control" name="ifsc" >
                                </div>
                                </div>
                            @endforeach

                            <div class="form-group row">
                                    <label for="amount" class="col-md-5 col-form-label text-md-left" style="padding-left: 85px;">{{ __('Select Slab Percentage:') }}</label>
                                <div class="col-md-6">
                                    <select name="amount" class="form-control input-md">
                                        <option value="None selected">Slab Percentage below</option>
                                        <option  value="60000">15  - 29 </option>
                                        <option  value="110000">30  - 59 </option>
                                        <option  value="215000">60  - 74 </option>
                                        <option  value="400000">75  - 100 </option>
                                    </select>
                                    @if ($errors->has('amount'))
                                    <span class="text-danger" role="alert">
                                        <strong><br>{{ $errors->first('amount') }}</strong>
                                    </span>
                                    @endif
                            </div>
                            </div>

                            <div class="form-group row mb-2" >
                            <div class="col-lg offset-md-4" >
                                <button type="submit" id="register" style="padding: 6px 60px;" class="btn btn-primary">
                                    {{ __('Apply Appeal') }}
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

