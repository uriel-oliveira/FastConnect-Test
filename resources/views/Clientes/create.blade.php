@extends('app')

@section('content')

	<h1>Novo Cliente</h1>
	
	{!! Form::open(['action' => 'ClientesController@store', 'method' => 'POST'])!!}
	<table align=center>
		<tr>
			<th colspan=2><h4>Dados Pessoais</h4></th>
		</tr>
		<tr>
			<th>{{Form::label('nome','Nome')}}</th>
			<td>{{Form::text('nome','',['placeholder' => 'Nome Completo'])}}</td>
		</tr>
		<tr>
			<th>{{Form::label('telefone','Telefone')}}</th>
			<td>{{Form::text('telefone','',['placeholder' => '(##) ####-####'])}}</td>
		</tr>
		<tr>
			<th>{{Form::label('documento','Documento')}}</th>
			<td>{{Form::text('documento','',['placeholder' => 'RG/CPF'])}}</td>
		</tr>
		<tr>
			<th colspan=2><h4>Endereço</h4></th>
		</tr>
		<tr>
			<th>{{Form::label('municipio','Município')}}/{{Form::label('uf','UF')}}</th>
			<td>{{Form::text('municipio','',['size' => '13'])}} {{Form::text('uf','',['placeholder' => 'UF', 'size' => '1'])}}</td>
		</tr>
		<tr>
			<th>{{Form::label('cep','CEP')}}</th>
			<td>{{Form::text('cep','',['placeholder' => '#####-###'])}}</td>
		</tr>
		<tr>
			<th>{{Form::label('rua','Rua')}}</th>
			<td>{{Form::text('rua','')}}</td>
		</tr>
		<tr>
			<th>{{Form::label('complemento','Complemento')}}</th>
			<td>{{Form::text('complemento','')}}</td>
		</tr>
		<tr>
			<td colspan=2 style="padding-top:15px">{{Form::submit('Enviar', ['class' => 'btn btn-primary btn-block'])}}</td>
		</tr>
	</table>
	{!! Form::close()!!}
@endsection