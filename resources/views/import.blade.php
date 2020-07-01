<ul>
    @for($i=0;$i < $result["data"]; $i++)
    <li>
        {{$result["data"][$i]["title"]}} -
        {{$result["data"][$i]["description"]}} -
        {{$result["data"][$i]["publication_date"]}}
    </li>
    @endfor
</ul>