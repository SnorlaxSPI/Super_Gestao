<h3>Fornecedores</h3>

@php

@endphp

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }} <br>
    Status: {{ $fornecedores[0]['status'] }} <br>
    CNPJ: {{ $fornecedores[0]['cnpj'] ?? 'CNPJ não informado' }} <br>
    Telefone: ({{ $fornecedores[0]['ddd'] ?? 'DDD não informado' }})
    {{ $fornecedores[0]['telefone'] ?? 'Telefone não informado' }} <br>
    @switch($fornecedores[0]['ddd'])
        @case('11')
            São Paulo - SP
        @break

        @case('14')
            Bauru - SP
        @break

        @case('16')
            Ribeirão Preto - SP
        @break

        @default
            Localidade não encontrada -
    @endswitch
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
