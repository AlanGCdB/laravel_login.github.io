@extends('site.layouts.basico')

@section('conteudo')
    <section>
        <h1 class="login"> Login</h1>
        <form class="form" action="./contato.html">
            <div>
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Seu e-mail">
            </div>
            <div>
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="*** ***">
            </div>
            <div class="btn">
                <button class="botao col-2">Logar</button>
            </div>
        </form>
    </section>
@endsection
