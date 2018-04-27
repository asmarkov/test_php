<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<style>
    .box1 {
        grid-column-start: 1;
        grid-column-end: 4;
        grid-row-start: 1;
        grid-row-end: 3;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }
    * {box-sizing: border-box;}
    .wrapper {
        border-radius: 5px;
        background-color: #fff4e6;
    }
    .box {
        border-radius: 5px;
        padding: 1em;
    }

    select{
        width: 80%;
        height: 300px;
    }
    table{
        border-collapse: collapse;
        background-color:  white;
        border: 1px solid black;
        width: 100%;
    }
    tr{
        border-collapse: collapse;
        background-color:  white;
        border: 1px solid black;
    }
    td{
        text-align: center;
        border-collapse: collapse;
        background-color:  white;
        border: 1px solid black;
    }
    th{
        background-color: #ffccad;
        border-collapse: collapse;
        border: 1px solid black;
    }
</style>
<form id="data-form">



    <div class="wrapper">
        <div class="box box1">
            <div class="nested">Образование:</div>
            <div class="nested">
                <select name="qualification[]" multiple="multiple">
                    @foreach($qualifications as $qualification)
                        <option value="{{$qualification->id}}">{{$qualification->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="box box1">
            <div class="nested">Города:</div>
            <div class="nested">
                <select name="cities[]" multiple="multiple">
                    @foreach($cities as $city)
                        <option value="{{$city->id}}">{{$city->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="box box1">
            <div class="nested">Пользователи:</div>
        </div>
        <div class="box box4" id="table">
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