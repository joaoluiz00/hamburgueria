<h1>Pagina do cliente</h1>
@if (10 > 4)
    <p> Resposta Verdadeira</p>
@endif

<p> {{$numero}}</p>
@if ($numero > 0)
    <p> Numero Positivo</p>
@elseif ($numero == 0)
    <p> Numero nulo</p>
@else 
    <p> Numero negativo</p>
@endif

<p> Exemplo do For</p>
@for ($i = 0; $i < count($lanches); $i++)
    <p> {{$lanches[$i]}} - {{$i}} </p>
@endfor

<p> Exemplo do Foreach</p>
@foreach ($lanches as $lanches)
    <p> {{$loop->index}}</p>
    <p> {{$lanches}}</p>
@endforeach

<p> Exemplo do PHP </p>
@php
    $nome = "Batata frita";
    echo $nome;
@endphp

<a href="/"> Voltar para a Home</a>