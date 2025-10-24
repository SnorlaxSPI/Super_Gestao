<h3>Fornecedores</h3>

@php

@endphp

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }} <br>
    Status: {{ $fornecedores[0]['status'] }} <br>
    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj'] ?? 'CNPJ não informado' }} <br>
    @endisset
@endisset

@if ($fornecedores[0]['status'] == 'S')
    Fornecedor Ativo
@else
    Fornecedor Inativo
@endif
<br>
@unless ($fornecedores[1]['status'] == 'S')
    Fornecedor Inativo no unless
@endunless
