@extends('app')

@section('content')
	
	<h1>Cliente: {{$Cliente->nome}}</h1>
	
	<table align=center>
		<tr>
			<th colspan=2><h4>Dados Pessoais</h4></th>
			<td rowspan=10 style="vertical-align:top">
				<table>
					<tr>
						<th colspan=3><h4>Itens: {{$Cliente->Itens->preco_total_BRL}} ({{$Cliente->Itens->quantidade}})</h4></th>
					</tr>
					<tr>
						<th>Nome</th>
						<th>Preço</th>
						<th>Código</th>
					<tr>
					@foreach($Cliente->Itens as $Item)
					<tr>
						<td>{{$Item->nome}}</td>
						<td>{{$Item->preco_BRL}}</td>
						<td>{{$Item->codigo}}</td>
					</tr>
					@endforeach
				</table>
			</td>
		</tr>
		<tr>
			<th>Nome</th>
			<td>{{$Cliente->nome}}</td>
		</tr>
		<tr>
			<th>Telefone</th>
			<td>{{$Cliente->telefone}}</td>
		</tr>
		<tr>
			<th>Documento</th>
			<td>{{$Cliente->documento}}</td>
		</tr>
		<tr>
			<th colspan=2><h4>Endereço</h4></th>
		</tr>
		<tr>
			<th>Município/UF</th>
			<td>{{$Cliente->municipio}}/{{$Cliente->uf}}</td>
		</tr>
		<tr>
			<th>CEP</th>
			<td>{{$Cliente->cep}}</td>
		</tr>
		<tr>
			<th>Rua</th>
			<td>{{$Cliente->rua}}</td>
		</tr>
		<tr>
			<th>Complemento</th>
			<td>{{$Cliente->complemento}}</td>
		</tr>
	</table>
@endsection