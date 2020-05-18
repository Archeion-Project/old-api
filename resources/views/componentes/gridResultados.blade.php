<table class="table table-sm table-hover">
	<thead class="stick-head">
		<tr>
			<th scope="col-2">Assunto</th>
			<th scope="col-2">Periódico</th>
			<th scope="col-2">Data</th>
			<th scope="col-4">Resumo</th>
			<th scope="col-2">Comentários</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($resultadosBusca as $resultadoBusca)
			<tr>
				<td>{{ $resultadoBusca->assunto }}</td>
				<td>{{ $resultadoBusca->periodico }}</td>
				<td>{{ $resultadoBusca->data_edicao }}</td>
				<td>{{ $resultadoBusca->resumo }}</td>
				<td>{{ $resultadoBusca->comentarios }}</td>
			</tr>
		@endforeach
	</tbody>
</table>