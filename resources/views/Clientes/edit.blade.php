@extends('app')

@section('content')

	<h1>Editar Cliente</h1>
	
	{!! Form::open(['action' => ['ClientesController@update',$Cliente->id], 'method' => 'POST'])!!}
	<table align=center>
		<tr>
			<th colspan=2><h4>Dados Pessoais</h4></th>
		</tr>
		<tr>
			<th>{{Form::label('nome','Nome')}}</th>
			<td>{{Form::text('nome',$Cliente->nome,['placeholder' => 'Nome Completo'])}}</td>
		</tr>
		<tr>
			<th>{{Form::label('telefone','Telefone')}}</th>
			<td>{{Form::text('telefone',$Cliente->telefone,['placeholder' => '(##) ####-####'])}}</td>
		</tr>
		<tr>
			<th>{{Form::label('documento','Documento')}}</th>
			<td>{{Form::text('documento',$Cliente->documento,['placeholder' => 'RG/CPF'])}}</td>
		</tr>
		<tr>
			<th colspan=2><h4>Endereço</h4></th>
		</tr>
		<tr>
			<th>{{Form::label('municipio','Município')}}/{{Form::label('uf','UF')}}</th>
			<td>{{Form::text('municipio',$Cliente->municipio,['size' => '13'])}} {{Form::text('uf',$Cliente->uf,['placeholder' => 'UF', 'size' => '1'])}}</td>
		</tr>
		<tr>
			<th>{{Form::label('cep','CEP')}}</th>
			<td>{{Form::text('cep',$Cliente->cep,['placeholder' => '#####-###'])}}</td>
		</tr>
		<tr>
			<th>{{Form::label('rua','Rua')}}</th>
			<td>{{Form::text('rua',$Cliente->rua)}}</td>
		</tr>
		<tr>
			<th>{{Form::label('complemento','Complemento')}}</th>
			<td>{{Form::text('complemento',$Cliente->complemento)}}</td>
		</tr>
		<tr>
			<td colspan=2 style="padding-top:15px">
				{{Form::hidden('_method','PUT')}}
				{{Form::submit('Enviar', ['class' => 'btn btn-primary btn-block'])}}
			</td>
		</tr>
	</table>
	{!! Form::close()!!}
@endsection