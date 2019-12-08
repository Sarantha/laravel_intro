@extends('layouts.app')
@section('content')
    <h1>Contact</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam atque saepe esse nulla quia explicabo. Harum dignissimos cum ratione quibusdam iste odio, quod omnis voluptatum maiores eveniet velit, eius rerum.</p>

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
                    {{Form::label('message','Message') }}
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
