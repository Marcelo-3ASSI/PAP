@extends("layout")
@section("scriptjs")
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(function(){
            //JQUERY --- ONLOAD -- Ao carregar a pagina
            $("#codigopostal").mask("0000-000")
        })
    </script>
@endsection
@section("conteudo")
    <div class="col-12">
        <h2 class="mb-3">Registar Cliente</h2>
    </div>
    
    <form action="{{ route('registar_cliente') }}" method="post">
        @csrf
        <div class="row">
        <div class="col-6">
            <div class="form-group">
                Nome: <input type="text" name="nome" class="form-control" />
            </div> 
        </div>
        <div class="col-6">
            <div class="form-group">
                E-mail: <input type="text" name="email" class="form-control" />
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                Utilizador de Login: <input type="text" name="login" id="login" class="form-control" />
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                Palavra-Passe: <input type="password" name="password" class="form-control" />
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                Morada: <input type="text" name="endereco" class="form-control" />
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                Contacto: <input type="text" name="numero" class="form-control" />
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                Código Postal: <input type="text" name="codigopostal" id="codigopostal" class="form-control" />
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                Cidade: <input type="text" name="cidade" class="form-control" />
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                Distrito: <input type="text" name="distrito" class="form-control" />
            </div>
        </div>
        </div>
    </br>
        <input type="submit" value="Registar" class="btn btn-success btn-sm" />
    </form>
@endsection