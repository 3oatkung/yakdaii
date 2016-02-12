<table>
<tr>
	<th>email</th>
</tr>

@foreach($emails as $email)
<tr>
	<td>{{$email->id}}</td>
	<td>{{$email->email}}</td>

</tr>
@endforeach
</table>