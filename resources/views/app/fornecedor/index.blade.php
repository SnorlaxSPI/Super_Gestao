<h3>Fornecedores</h3>

@php

@endphp

Fornecedor: {{ $fornecedores[0]['nome'] }} <br>
Status: {{ $fornecedores[0]['status'] }} <br>

@if ($fornecedores[0]['status'] == 'S')
    Fornecedor Ativo
@else
    Fornecedor Inativo
@endif
<br>
@unless ($fornecedores[0]['status'] == 'S')
    Fornecedor Inativo no unless
@endunless
