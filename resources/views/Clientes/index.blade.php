@extends('app')

@section('content')
	<script>
	  function ConfirmDelete(nome){
		return confirm("Deletar " + nome + " ?");
	  }
	</script>

	<h1>Clientes</h1>
	
	<table align=center>
		<tr>
			<th><a href='/clientes?orderBy={{$Clientes->orderByOptions["nome"]}}'>Nome</a></th>
			<th><a href='/clientes?orderBy={{$Clientes->orderByOptions["telefone"]}}'>Telefone</a></th>
			<th><a href='/clientes?orderBy={{$Clientes->orderByOptions["documento"]}}'>Documento</a></th>
			<th><a href='/clientes?orderBy={{$Clientes->orderByOptions["municipio"]}}'>Município</a>/<a href='/clientes?orderBy={{$Clientes->orderByOptions["uf"]}}'>UF</a></th>
			<th><a href='/clientes/create' class="btn btn-primary btn-sm btn-block">Novo Cliente</a></th>
		</tr>
		@foreach($Clientes as $Cliente)
		<tr>
			<td><a href='/clientes/{{$Cliente->id}}' class="btn btn-info">{{$Cliente->nome}}</a></td>
			<td>{{$Cliente->telefone}}</td>
			<td>{{$Cliente->documento}}</td>
			<td>{{$Cliente->municipio}}/{{$Cliente->uf}}</td>
			<td>
				<a href='/clientes/{{$Cliente->id}}/edit' class="btn btn-primary btn-sm">Editar</a>
				{!!Form::open(['action' => ['ClientesController@destroy',$Cliente->id], 'method' => 'POST', 'onSubmit' => 'return ConfirmDelete(this.nome.value)', 'class' => 'pull-right'])!!}
					{{Form::hidden('_method','DELETE')}}
					{{Form::hidden('nome',$Cliente->nome)}}
					{{Form::submit('Deletar', ['class' => 'btn btn-danger btn-sm'])}}
				{!!Form::close()!!}
			</td>
		</tr>
		@endforeach
	</table>
@endsection