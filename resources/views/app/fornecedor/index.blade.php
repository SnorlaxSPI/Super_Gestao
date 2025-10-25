<h3>Fornecedores</h3>

@php

@endphp

@isset($fornecedores)
    <p><b>Listagem de fornecedores</b></p>

    @for ($i = 0; isset($fornecedores[$i]); ++$i)
        Fornecedor: {{ $fornecedores[$i]['nome'] }} <br>
        Status: {{ $fornecedores[$i]['status'] }} <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'CNPJ não informado' }} <br>
        Telefone: ({{ $fornecedores[$i]['ddd'] ?? 'DDD não informado' }})
        {{ $fornecedores[$i]['telefone'] ?? 'Telefone não informado' }} <br>
        <hr>
    @endfor
@endisset
