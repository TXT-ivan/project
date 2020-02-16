@extends('app')
@section('content')
    <form action="{{ route('pasta.create') }}" method="GET">
        <p>Код пасты:</p>
        <textarea name="text" style="width:600px; height:300px;"></textarea><br><br>
        <p>Выберите тип доступа:</p>
        <select name="access_type" size="1" >
            <option value="" hidden></option>
            <option value="0">Открытый</option>
            <option value="1">По ссылке</option>
        </select><br><br>
        <p>Выберите срок годности пасты:</p>
        <select name="active_time" size="1">
            <option value="" hidden></option>
            <option value="+10 minutes">10 минут</option>
            <option value="+1 hours">1 час</option>
            <option value="+3 hours">3 часа</option>
            <option value="+1 days">1 день</option>
            <option value="+7 days">1 неделя</option>
            <option value="+1 months">1 месяц</option>
            <option value="+100 years">Без ограничения</option>
        </select><br><br>
        <p>Имя пасты:</p>
        <input name="pasta_name"><br><br>
        <input type="submit" value="Создать пасту">
    </form>
@endsection
