@extends('app')

@section('content')
	<div class="title m-b-md">
		Cliente
	</div>
	{!! Form::open(['action' => 'ClientesController@store', 'method' => 'POST'])!!}
	<table>
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
	</table>
	{{Form::Submit('Enviar')}}
	{!! Form::close()!!}
@endsection