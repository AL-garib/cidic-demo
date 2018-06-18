
@foreach($communication as $comm)

<tr class="gradeX">
    <td>{{$comm->phone}}</td>
    <br>
    <td>{{$comm->email}} 
        <br>

    <td>{{$comm->address}} 
    </td>

</tr>

@endforeach  