@extends("layout")
@section("scriptjs")
<script>
$(function(){
    $(".infocompra").on('click', function(){
        //ao clicar no link com class .infocompra esta função será executada
        let id = $(this).attr("data-value")
        $.post('{{ route("compra_detalhes") }}', { idpedido : id }, (result) => {
            //Função de callback -- retorno do ajax
            $("#conteudopedido").html(result)
        })
    })
})
</script>
@endsection
@section("conteudo")

    <div class="col-12">
        <h2>Minhas Compras</h2>
    </div>

    <div class="col-12">
        <table class="table table-bordered">
            <tr>
                <th>Data da Compra</th>
                <th>Situação</th>
                <th></th>
            </tr>
            @foreach($lista as $ped)
            <tr>
                <td>@if ($ped->dt_pedido instanceof \DateTimeInterface)
                        {{  $ped->dt_pedido->format("d/m/Y H:i") }}
                    @else
                        {{ $ped->dt_pedido }} <!-- Trate o caso em que $ped->dt_pedido não é um objeto DateTime -->
                    @endif
                </td>
                <td>{{  $ped->statusDesc() }}</td>
                <a href="#" class="btn btn-sm btn-info infocompra" data-value="{{ $ped -> id }}" data-toggle="modal" data-target="#modalcompra">
                    <i class="fas fa-shopping-basket"></i>
                </a>
            </tr> 
            @endforeach
        </table>
    </div>

    <div class="modal fade" id="modalcompra">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detalhes da compra</h5>
                </div>
                <div class="modal-body">
                    <div id="conteudopedido"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>  
        </div>
    </div>

@endsection