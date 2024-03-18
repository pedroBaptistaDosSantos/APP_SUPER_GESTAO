<h3>Fornecedor</h3>
{{-- exemplo de comentário --}}


@if (count($fornecedores) > 0 && count($fornecedores) <= 3)
    <h3> Fornecedor</h3>

@endif

{{-- @dd($fornecedores); --}}

Fornecedor: {{ $fornecedores[0]['nome'] }}<br>
Status: {{ $fornecedores[0]['status'] }}