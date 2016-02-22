@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
  {!! Form::open(['url'=>'/developer']) !!}
  {!! Form::textarea('code',null,['class'=>'form-control'])!!}
  {!! Form::submit('demo',['class'=>'btn btn-primary form-control']) !!}
  {!! Form::close() !!}    
    </div>
    </div>
    </div>
       </div>
       </div>
@endsection