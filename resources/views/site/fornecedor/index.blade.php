<h3>Fornecedor</h3>

{{-- Comentario no interpretador blade --}}

@php 

/*if(isset($variavel)) {}// retornar true se a variavel estiver definida

*/
@endphp

{{--executa enquanto retorno for falso--}}

@isset($fornecedores)

@forelse ($fornecedores as $indice => $fornecedor)
  Iteração atual: {{$loop->iteration}}
<br>
Fornecedor: {{$fornecedor['nome']}}
<br>
Status: {{$fornecedor['status']}}
<br>
CNPJ: {{$fornecedor['cnpj'] ?? 'Dado não foi preenchido'}}
<br>
Telefone: ({{$fornecedor['ddd'] ?? ''}}) {{$fornecedor ['telefone'] ?? ''}}
<br>
@if($loop->first)
 Primeira iteração do loop
@endif

@if($loop->last)
 Primeira iteração do loop

 <br>
 Total de registros: {{ $loop->count}}
@endif
<hr>


@empty
 NÃO EXISTEM FORNECEDORES CADASTRADOS
@endforelse
@endisset




