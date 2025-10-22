<h3>Fornecedores</h3>

@php
    /*
  if () {

  } elseif() {

  } else {

  }
  */
@endphp

@if (count($fornecedores) >= 0 && count($fornecedores) < 10)
    <h4>Existem poucos fornecedores cadastrados</h4>
@elseif (count($fornecedores) >= 10 && count($fornecedores) < 50)
    <h4>Existem vários fornecedores cadastrados</h4>
@else
    <h4>Existem muitos fornecedores cadastrados</h4>
@endif
