@extends('layouts.app')

@section('content')
  <h1>Contact</h1>

  {!!Form::open(['url'=>'contact/submit'])!!}
    <div class="form-group">
      
    </div>
  {!!Form::close()!!}
@endsection
