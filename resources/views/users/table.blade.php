<table class="table table-bordered">
    <thead><tr><th style="width: 25%">ФИО</th><th style="width: 20%">Образование</th><th>Города</th></tr></thead>
    <tbody>
        @foreach($users as $name => $user)
        <tr>
            <td>{{$name}}</td>
            @foreach($user as $qualification => $item)
                <td>{{$qualification}}</td>
                <td>
                @for($i = 0, $c = count($item); $i < $c; $i++)
                    {{$item[$i]->city_name}}
                    @if($i!=$c-1)
                        ,
                    @endif
                @endfor
                </td>
            @endforeach
        </tr>
        @endforeach
    </tbody>
</table>