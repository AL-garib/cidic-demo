
@foreach($personal as $person)

<tr class="gradeX">
    <td>{{$person->name}}</td>
    <td>{{$person->identity}} 
    <td>{{$person->date_brith}} 
    </td>

</tr>

@endforeach  