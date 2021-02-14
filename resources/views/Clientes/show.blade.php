@extends('app')

@section('content')
	<div class="title m-b-md">
		Cliente
	</div>
	<table>
		<tr>
			<th>Nome</th>
			<td>{{$cliente->nome}}</td>
		</tr>
		<tr>
			<th>Telefone</th>
			<td>{{$cliente->telefone}}</td>
		</tr>
		<tr>
			<th>Documento</th>
			<td>{{$cliente->documento}}</td>
		</tr>
	</table>
@endsection