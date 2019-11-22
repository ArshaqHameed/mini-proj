<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Flood Relief') }}</title>

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

    </style>
    <!-- for ration card checking -->
{{--<script>
$(document).ready(function(){
$('#ration').blur(function(){
var error_ration = '';
var ration = $('#ration').val();
var _token = $('input[name="_token"]').val();
var filter = /^[0-9]{10}$/;
if(!filter.test(ration))
{
$('#error').addClass('has-error');
$('#error_ration').html('<label class="text-danger">Invalid Ration Card No</label>');
$('#register').attr('disabled','disabled');
}
else
{
$.ajax({
url:"{{ route('newapk.check') }}",
method:"POST",
data:{ration:ration,_token:_token},
success:function(result)
{
if(result == 'unique')
{
$('#error_ration').html('<label class="text-success">Not Registered yet...</label>');
$('#ration').removeClass('has-error');
$('#register').attr('disabled',false);
}
else
{
$('#error_ration').html('<label class="text-danger">Application Already registered....</label>');
$('#ration').addClass('has-error');
$('#register').attr('disabled','disabled');
}
}
})
}
});
});
</script>
--}}</head>

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
                <div class="card-header">{{ __('Update Application') }}</div>
                <div class="card-body">
                        {{--// @if(count($errors) >0 )
                        //      @foreach($errors->all() as $error)
                        //         <div class="alert alert-danger">
                        //             {{ $error }}
                        //         </div>
                        //     @endforeach
                        // @endif--}}


                    <form method="post" action="{{ route('newapk.update', $newapk->ration) }}" autocomplete="off">
                            @csrf
                            @method('PATCH')

                        {{-- ration --}}
                        <div class="form-group row">
                            <label for="ration" class="col-md-4 col-form-label text-md-right">{{ __('Enter Ration Card Number :') }}</label>

                            <div class="col-md-6">
                            <input id="ration" type="text" class="form-control{{ $errors->has('ration') ? ' is-invalid' : '' }}" name="ration"  autofocus value="{{$newapk->ration}}" disabled>

                                {{--@if ($errors->has('ration'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ration') }}</strong>
                                        <span id="error_ration"></span>
                                    </span>
                                @endif--}}
                                @if($errors->has('ration'))
					                <span class="text-danger">{{ $errors->first('ration') }}</span>
					            @endif
                                <span id="error_ration"></span>
                            </div>
                        </div>
                        {{-- name --}}

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Enter Name :') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{$newapk->name}}">

                                @if ($errors->has('name'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       {{-- // <div class="form-group row">
                        //         <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Enter Name :') }}</label>
                        //         <div class="col-md-6">
				        //             <div class="form-group @error('name') has-error @enderror">
					    //                 <input type="text" id="name" name="name" class="form-control" placeholder="Enter Last Name" value="{{ old('name') }}">
					    //                 @error('name')
					    //                     <span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>
					    //                 @enderror
				        //             </div>
			            //         </div>
                        // </div>--}}

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Select Gender :') }}</label>

                            <div class="col-md-8">
                                <input id="gender" name="gender" type="radio" value="male" {{ ($newapk->gender=="male")? "checked" : "" }} style="margin-left:30px;margin-top:3px;">Male
                                <input id="gender" name="gender" type="radio" value="female" {{ ($newapk->gender=="female")? "checked" : "" }} style="margin-left: 50px">Female
                                <input id="gender" name="gender" type="radio" value="trans" {{ ($newapk->gender=="trans")? "checked" : "" }} style="margin-left: 50px">Transgender
                                @if ($errors->has('gender'))
                                    <span class="text-danger" role="alert">
                                        <strong><br>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Enter the Age :') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="number" min="15" value="{{$newapk->age}}" class="form-control @error('age') is-invalid @enderror" name="age"   placeholder="Select your Age :">

                                @if($errors->has('age'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Enter Mobile Number :') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="text" value="{{$newapk->mobile}}" class="form-control @error('mobile') is-invalid @enderror" name="mobile"   placeholder="Mobile Number :">

                                @if($errors->has('mobile'))
					                <span class="text-danger"><strong>{{ $errors->first('mobile') }}</strong></span>
					            @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="head" class="col-md-4 col-form-label text-md-right">{{ __('Family Head(Yes/No) :') }}</label>

                            <div class="col-md-6">
                                    <select name="head" class="form-control input-md">
                                        <option value="None selected">Please select below</option>
                                        <option value="yes" {{ ($newapk->head=="yes")? "selected" : "" }} name="head">Yes</option>
                                        <option value="no" {{ ($newapk->head=="no")? "selected" : "" }} name="head">No</option>
                                    </select>
                                @if($errors->has('head'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('head') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="housename" class="col-md-4 col-form-label text-md-right">{{ __('Enter House Name :') }}</label>

                            <div class="col-md-6">
                                <input id="housename" type="text" class="form-control @error('housename') is-invalid @enderror" name="housename"   placeholder="Enter Applicant House Name :" value="{{$newapk->housename}}">

                                @if($errors->has('housename'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('housename') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="taluk" class="col-md-4 col-form-label text-md-right">{{ __('Enter Taluk Name :') }}</label>

                            <div class="col-md-6">
                                <input id="taluk" type="text" class="form-control @error('taluk') is-invalid @enderror" name="taluk"   placeholder="Enter Applicant Taluk Name :" value="{{$newapk->taluk}}">

                                @if($errors->has('taluk'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('taluk') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="village" class="col-md-4 col-form-label text-md-right">{{ __('Enter Village Name :') }}</label>

                            <div class="col-md-6">
                                <input id="village" type="text" class="form-control @error('village') is-invalid @enderror" name="village"   placeholder="Enter Applicant Village Name :" value="{{$newapk->village}}">

                                @if($errors->has('village'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('village') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="panchayath" class="col-md-4 col-form-label text-md-right">{{ __('Enter Panchayath Name :') }}</label>

                            <div class="col-md-6">
                                <input id="panchayath" type="text" class="form-control @error('panchayath') is-invalid @enderror" name="panchayath"   placeholder="Enter Applicant Panchayath Name :" value="{{$newapk->panchayath}}">

                                @if($errors->has('panchayath'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('panchayath') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nofamily" class="col-md-4 col-form-label text-md-right">{{ __('Number of Family Members :') }}</label>

                            <div class="col-md-6">
                                <input id="nofamily" type="text" class="form-control @error('nofamily') is-invalid @enderror" name="nofamily"   placeholder="Select Number of Family Members :" value="{{$newapk->nofamily}}">

                                @if($errors->has('nofamily'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('nofamily') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="adhar" class="col-md-4 col-form-label text-md-right">{{ __('Enter Aadhar Number :') }}</label>

                            <div class="col-md-6">
                                <input id="adhar" type="text" class="form-control @error('adhar') is-invalid @enderror" name="adhar"   placeholder="Enter Aadhar Number :" value="{{$newapk->adhar}}">

                                @if($errors->has('adhar'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('adhar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="account" class="col-md-4 col-form-label text-md-right">{{ __('Enter Bank Account Number :') }}</label>

                            <div class="col-md-6">
                                <input id="account" type="text" class="form-control @error('account') is-invalid @enderror" name="account"   placeholder="Bank Account Number :" value="{{$newapk->account}}">

                                @if($errors->has('account'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('account') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ifsc" class="col-md-4 col-form-label text-md-right">{{ __('Enter IFSC Code :') }}</label>

                            <div class="col-md-6">
                                <input id="ifsc" type="text" class="form-control @error('ifsc') is-invalid @enderror" name="ifsc"   placeholder="IFSC Code :" value="{{$newapk->ifsc}}">

                                @if($errors->has('ifsc'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('ifsc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0" >
                            <div class="col-md-8 offset-md-4" >
                                <button type="submit" id="register" class="btn btn-primary">
                                    {{ __('Update Application') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>








