@extends("layout")
@section("scriptjs")
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$(function(){
    $("#codigopostal").mask("0000-000")
})
</script>
<br> 
@endsection
@section("conteudo")

    <div class="col-12 mt-5">
    <br> 
            <h2 class="mb-3">Entrar no Sistema</h2>

            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group">
                    Login:
                    <input type="text" name="login" class="form-control" id="login"/>
                </div> 

                <div class="form-group">
                    Palavra-Passe:
                    <input type="password" name="password" class="form-control" />
                </div> 
                </br>
                <input type="submit" value="Login" class="btn btn-lg btn-primary">
                <br><br>
            </form>
    </div>

    <div class="col-12 mt-5">
        <h5 class="mb-3">Se não tem uma conta, registe-se gratuitamente</h5>
            <form action="{{ route('registar') }}" method="post">
                @csrf
                <br>
            <input type="submit" value="Registar" class="btn btn-lg btn-primary">
        </form>
    </div>

@endsection