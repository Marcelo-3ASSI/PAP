@extends("layout")
@section("conteudo")
    <div class="col-2">
    @if(isset($listaCategoria) && count($listaCategoria) > 0)
        <div class="list-group">
        @if(isset($idcategoria))
            <a href="{{ route('categoria') }}" class="list-group-item list-group-item-action @if(0 == $idcategoria) active @endif">Todos os produtos</a>
                @foreach($listaCategoria as $cat)
                    <a href="{{ route('categoria_por_id', ['idcategoria' => $cat->id]) }}" 
                        class="list-group-item list-group-item-action @if($cat->id == $idcategoria) active @endif">
                        {{ $cat -> categoria }}</a>
                @endforeach
        @endif  

         @if(!isset($idcategoria))
             <a href="{{ route('categoria') }}" class="list-group-item list-group-item-action">Todos os produtos</a>
                @foreach($listaCategoria as $cat)
                <a href="{{ route('categoria_por_id', ['idcategoria' => $cat -> id]) }}" 
                class="list-group-item list-group-item-action">
                    {{ $cat -> categoria }}</a>
            @endforeach
        @endif
            </ul> 
        </div>
    @endif
    </div>

    <div class="col-10">
        @include("_produtos", ['lista' => $lista ])
    </div>
@endsection
