<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="card-body">
<div class="row">
    <div class="col-sm-8">
@yield('content')
    </div>
    <div class="col-sm-4">
<p>Публичные пасты:</p>
@foreach($pasts ?? '' as $pasta)
<a href="/pasta/{{$pasta->hash}}">{{$pasta->pasta_name}}</a><br>
<a>{{$pasta->created_at}}</a><br><br>
@endforeach
    </div>
</div>
</div>
</body>
</html>
