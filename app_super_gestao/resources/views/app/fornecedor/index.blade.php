<h3>Fornecedor</h3>

@php
    /*
    }
    */
@endphp

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[1]['cnpj'] ?? '' }}
    <!--
        $variável testada não estiver definida (isset)
        ou
        $variável testada possuir o valor null
    -->
@endisset
