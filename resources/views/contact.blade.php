@extends('layouts.app')
@section('content')
    <h1>Shilpa institute</h1>
    <p>You can post about your dansala here</p>

    {!! Form::open(['url' => 'contact/submit']) !!}
            <div class="row">
              <div class="col">
                    {{Form::label('name','Name') }}
                    {{Form::text('name', '',['class' => 'form-control','placeholder'=>'Name'])}}
              </div>
              <div class="col">
                    {{Form::label('email','Email') }}
                    {{Form::text('email', '',['class' => 'form-control','placeholder'=>'Email Address'])}}
              </div>
            </div>
            <div class="row">
                <div class="col">
                    {{Form::label('message','Post') }}
                    {{Form::textarea('message', '',['class' => 'form-control','placeholder'=>'Text Message'])}}
                </div>
            </div>
            <div class="row" style="margin-top:10px;">
                <div class="col">
                {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
                </div>
            </div>
    {!! Form::close() !!}

@endsection
