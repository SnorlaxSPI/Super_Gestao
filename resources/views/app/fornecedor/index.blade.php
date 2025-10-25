<h3>Fornecedores</h3>

@php

@endphp

@isset($fornecedores)
    <p><b>Listagem de fornecedores</b></p>

    @foreach ($fornecedores as $indice => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }} <br>
        Status: {{ $fornecedor['status'] }} <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'CNPJ não informado' }} <br>
        Telefone: ({{ $fornecedor['ddd'] ?? 'DDD não informado' }})
        {{ $fornecedor['telefone'] ?? 'Telefone não informado' }} <br>
        <hr>
    @endforeach
@endisset
