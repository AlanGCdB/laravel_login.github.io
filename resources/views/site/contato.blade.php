@extends('site.layouts.basico')

@section('conteudo')
    <h1 class="contato">Entre em contato conosco</h1>
    <section>
        <form class="form" action="{{ route('site.contato') }}">
            <div>
                <input type="text" id="nome" name="nome" placeholder="Seu nome">
            </div>
            <div>
                <input type="text" id="telefone" name="telefone" placeholder="Seu telefone">
            </div>
            <div>
                <input type="email" id="email" name="email" placeholder="Seu e-mail">
            </div>
            <div>
                <select name="motivo_contato_id" id="">
                    <option value="">Motivo do contato</option>
                    <option value="1">Dúvida</option>
                    <option value="2">Elogio</option>
                    <option value="3">Reclamação</option>
                </select>
            </div>
            <div>
                <label for="mensagem">Mensagem</label>
                <textarea name="mensagem" rows="4" cols="50" id="mensagem">
                </textarea>
            </div>

            <div class="btn">
                <button class="botao col-2">Enviar Mensagem</button>
            </div>
        </form>
    </section>
@endsection
