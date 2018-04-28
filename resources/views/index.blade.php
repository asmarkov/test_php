<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/jquery-1.12.4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<form id="data-form">

    <div class="container">
        <div class="row m-4">
            <div class="col">Образование:</div>
            <div class="col">
                <select name="qualification[]" class="form-control" multiple="multiple" style="height: 300px;">
                    @foreach($qualifications as $qualification)
                        <option value="{{$qualification->id}}">{{$qualification->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row m-4">
            <div class="col">Города:</div>
            <div class="col">
            <select name="cities[]" class="form-control" multiple="multiple" style="height: 300px;">
                    @foreach($cities as $city)
                        <option value="{{$city->id}}">{{$city->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row m-4">
            <div class="col">Пользователи:</div>
            <div class="col"></div>
        </div>
        <div id="table">
            @include("users.table")
        </div>
    </div>





</form>
<script>
    $("select").on("change",function () {
        $.ajax({
            url: "/ajax/?"+ $('#data-form').serialize()
        }).done(function(data) {
            console.log(data);
            $( "#table" ).html( data);
        });
    });
</script>
</body>
</html>