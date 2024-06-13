@if(isset($lista))
        <div class="row">
        @foreach($lista as $prod)
            <div class="col-3 mb-3 d-flex align-items-stretch">
                <div class="card">
                    <img src="{{ asset($prod->foto) }}" class="card-img-top" />
                    <div class="card-body d-flex-column">
                        <h6 class="card-title">{{ $prod->nome }} <br> {{ $prod->valor }} €</h6>
                        <a href="{{ route('adicionar_carrinho', ['idproduto' => $prod->id]) }}" class="btn btn-sm btn-secondary">Adicionar Ao Carrinho</a>
                        <br><br>
                        <a href="{{ route('avaliar_produto', ['idproduto' => $prod->id]) }}" class="btn btn-sm btn-secondary">Avaliar Produto</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
  @endif
