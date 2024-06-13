<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Produto;
use App\Models\pedido;
use App\Services\VendaService;
use Illuminate\Contracts\Auth\Authenticatable;
use App\Models\itens_pedido;
use App\Models\Avaliacao;

use PagSeguro\Configuration\Configure;

class ProdutoController extends Controller
{
    private $_configs;

    public function __construct(){
        $this -> _configs = new Configure();
        $this -> _configs -> setCharset("UTF-8");
        $this -> _configs -> setAccountCredentials(env('PAGSEGURO_EMAIL'), env('PAGSEGURO_TOKEN'));
        $this -> _configs -> setEnvironment(env("PAGSEGURO_AMBIENTE"));
        $this -> _configs -> setLog(true, storage_path('logs/pagseguro_' . date('Ymd') . '.log'));
    }

    public function getCredential(){
        return $this -> _configs -> getAccountCredentials();
    }

    public function produt(Request $request){
        $data = [];

        //Buscar todos os produtos
        //Select * from produtos
        $listaProdutos = Produto::all();
        $data["lista"] = $listaProdutos;

        return view("layout", $data);
    }

    public function categoria($idcategoria = 0, Request $request){
        $data = [];

        //SELECT * FROM categorias
        $listaCategorias = Categoria::all();

        //SELECT * FROM produtos limit 4
        $queryProduto = Produto::limit(20);

        if($idcategoria != 0){
            //WHERE categoria_id = $idcategoria
            $queryProduto->where("categoria_id", $idcategoria);
        }

        $listaProdutos = $queryProduto->get();

        $data["lista"] = $listaProdutos;
        $data["listaCategoria"] = $listaCategorias;
        $data["idcategoria"] = $idcategoria;
        return view("categoria", $data);
    }
    public function categoria2( Request $request){
        $data = [];

        //SELECT * FROM categorias
        $listaCategorias = Categoria::all();

        //SELECT * FROM produtos limit 4
        $queryProduto = Produto::limit(75);

        $listaProdutos = $queryProduto->get();

        $data["lista"] = $listaProdutos;
        $data["listaCategoria"] = $listaCategorias;
        return view("categoria", $data);
    }

    public function adicionarCarrinho($idProduto = 0, Request $request){
        //Buscar o produto pelo o ID
        $prod = Produto::find($idProduto);

        if($prod){
            //Encontrou um produto
            
            //Buscar a sessão do carrinho atual
            $carrinho = session('cart', []);

            array_push($carrinho, $prod);
            session([ 'cart' => $carrinho ]);
        }

        return redirect()->route("layout");
    }

    public function verCarrinho(Request $request){
        $carrinho = session('cart', []);
        $data = ['cart' => $carrinho ];

        return view("carrinho", $data);
    }

    public function excluirCarrinho($indice, Request $request){
        $carrinho = session('cart', []);
        if(isset($carrinho[$indice])){
            unset($carrinho[$indice]);
        }
        session(["cart" => $carrinho]);
        return redirect()->route("ver_carrinho");
    }

    public function finalizar(Request $request, Authenticatable $user){
        
        $prods = session('cart', []);
        $vendaService = new VendaService();
        $result = $vendaService->finalizarVenda($prods, $user);

        if($result["status"] == "ok"){
           request() -> session() -> forget("cart");
        }

        $request -> session() -> flash($result["status"], $result["message"]);
        return redirect() -> route("ver_carrinho");
    }

    public function historico(Request $request){
        $data = [];

        $idutilizador = \Auth::user()->id;

        $listaPedido = Pedido::where("utilizador_id", $idutilizador)
                            -> orderBy("dt_pedido", "desc")
                            -> get();
        $data["lista"] = $listaPedido;

        return view("compra/historico", $data);
    }

    public function detalhes(Request $request){
        $idpedido = $request -> input("idpedido");

        $listaItens = itens_pedido::join("produtos", "produtos.id", "=", "itens_pedidos.produto_id")
                        -> where("pedido_id", $idpedido)
                        -> get([ 'itens_pedidos.*', 'itens_pedidos.valor as valoritem', 'produtos.*']);

        $data = [];
        $data["listaItens"] = $listaItens;
        return view("compra/detalhes", $data);

    }

    public function pagar(Request $request){
        $data = [];

        $sessionCode = \PagSeguro\Services\Session::create(
            $this -> getCredential()
        );
        $IDSession = $sessionCode -> getResult();
        $data["sessionID"] = $IDSession;

        return view("compra/pagar", $data);
    }
    
    public function avaliarProduto($id){
        $produto = Produto::find($id);
        return view('avaliar_produto', compact('produto'));
        return redirect()->route("layout");
    }

    public function salvarAvaliacao(Request $request)
    {
        // Valide os dados do formulário, se necessário
        $request->validate([
            'rating' => 'required|integer|min:1|max:5', // Exemplo de regras de validação para a avaliação
            'comment' => 'nullable|string|max:255', // Exemplo de regras de validação para o comentário (opcional)
        ]);

        // Salve a avaliação do produto no banco de dados
        $avaliacao = new Avaliacao();
        $avaliacao->produto_id = $request->input('produto_id'); // Certifique-se de ajustar o nome do campo conforme necessário
        $avaliacao->rating = $request->input('rating');
        $avaliacao->comment = $request->input('comment');
        $avaliacao->save();

        // Redirecione de volta para a página do produto ou para onde desejar
        return redirect()->back()->with('success', 'Avaliação do produto salva com sucesso!');
    }

}
