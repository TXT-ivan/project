@extends('app')

@section('content')
    <p>{{$pasta_name ?? ''}}</p><br>
    <p>Код пасты:</p>
    <textarea name="text" style="width:600px; height:300px;">{{$text ?? ''}}</textarea><br><br>
@endsection
