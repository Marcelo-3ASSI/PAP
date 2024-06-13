@extends("layout")
@section("conteudo")

<h1 class="row justify-content-center">Avaliar Produto: {{ $produto->nome }}</h1>

<form action="{{ route('salvar_avaliacao', ['id' => $produto->id]) }}" class="row justify-content-center" method="POST">
    @csrf
    <label for="rating">Avaliação:</label>
    <input type="number" name="rating" min="1" max="5" required><br><br>
    <label for="comment">Comentário:</label>
    <textarea name="comment" rows="4" required></textarea><br><br>
    <button type="submit">Enviar Avaliação</button>
</form>

@if(isset($cart) && count($cart) > 0)

    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>Nome</th>
                <th>Foto</th>
                <th>Valor</th>
                <th>Descrição</th>
            <tr>
        </thead>

        <form method="post" action="{{ route('avaliar_produto') }}">
        @csrf
        <input type="submit" value="Submeter Avaliação" class="btn btn-ig btn-sucess">
    </form>

    @else
        <p>Erro na submissão de avaliação</p>
    @endif

@endsection