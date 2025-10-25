<h3>Fornecedores</h3>

@php

@endphp

@isset($fornecedores)
    <p><b>Listagem de fornecedores</b></p>

    @php $i = 0; @endphp
    @while (isset($fornecedores[$i]))
        Fornecedor: {{ $fornecedores[$i]['nome'] }} <br>
        Status: {{ $fornecedores[$i]['status'] }} <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'CNPJ não informado' }} <br>
        Telefone: ({{ $fornecedores[$i]['ddd'] ?? 'DDD não informado' }})
        {{ $fornecedores[$i]['telefone'] ?? 'Telefone não informado' }} <br>
        <hr>
        @php $i++; @endphp
    @endwhile
@endisset
