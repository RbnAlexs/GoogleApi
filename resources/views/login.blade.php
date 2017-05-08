@extends('layouts.master')
@section('content')
{{Form::open (array ('url' => 'logincheck'))}}
 
<p> {{Form::text ('username', ‘‘, array ('placeholder'=>'Username','maxlength'=>30))}} </p>
 
<p> {{Form::password ('password', array('placeholder'=>'Password','maxlength'=>30)) }} </p>
 
<p> {{Form::submit ('Submit')}} </p>
 
{{Form::close ()}}
@stop
