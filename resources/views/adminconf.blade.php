rwerwe

<table>
@foreach ($listaAttivita as $item)
    <tr>
<td>{{$item->nome}}</td>
<td>{{$item->telefono}}</td>
<td>{{$item->email}}</td>
<td>{{$item->sitoweb}}</td>
<td>{{$item->attivita}}</td>
<td>{{$item->citta}}</td>
<td>{{$item->note}}</td>
<td><form method="POST" action="conferma-attivita">
    @csrf
<input type="hidden" name="id" value="{{$item->id}}">
<input type="submit" name="cancella" value="Conferma">
</form></td>
<td></td>

    </tr>


@endforeach
</table>
