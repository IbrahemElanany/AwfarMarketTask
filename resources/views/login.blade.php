<html>
<head>
    <title>Simple Login System in Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .box{
            width:600px;
            margin:0 auto;
            border:1px solid #ccc;
        }
    </style>
</head>
<body>
<br />
<div class="container box">
    <h3 align="center">AdminPanel Login</h3><br />


    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['method'=>'POST','action'=>'UsersController@Do_login','files'=>true]) !!}

        {{csrf_field()}}



            <div class="form-group">
                {!! Form::label('email','Email :') !!}
                {!! Form::email('email',null,['class'=>'form-control']) !!}

            </div>


        <div class="form-group">
            {!! Form::label('password','Password :') !!}
            {!! Form::password('password',['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Login',['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}


</div>
</body>
</html>
