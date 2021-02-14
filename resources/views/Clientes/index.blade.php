@extends('app')

@section('content')
	<div class="title m-b-md">
		Clientes
	</div>
	<table>
		<tr>
			<th>Nome</th>
			<th>Telefone</th>
			<th>Documento</th>
			<th><a href='/clientes/create'>[add]</a></th>
		</tr>
		@foreach($clientes as $cliente)
		<tr>
			<td>{{$cliente->nome}}</td>
			<td>{{$cliente->telefone}}</td>
			<td>{{$cliente->documento}}</td>
			<td>
				<a href='/clientes/edit/{{$cliente->cliente_id}}'>[edit]</a>
				<a href='/clientes/delete/{{$cliente->cliente_id}}'>[del]</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection