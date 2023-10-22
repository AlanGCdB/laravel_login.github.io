@extends('site.layouts.basico')

@section('conteudo')
    <main class="principal">
        <h1>Jesus é o caminho</h1>
        <div class="assunto">
            <h2>Deixe Deus escrever a sua história!</h2>
            <p>Na vida, temos planos, metas e vontades. E mesmo quando planejamos bem a nossa vida, temos a sensação de
                faltar algo para alcançar alguns objetivos.</p>
            <span>Ler mais</span>
        </div>
        <div class="img">
            <ul>
                <li> <img src="{{ asset('img/img01.jpeg') }}" alt="salvador"></li>
                <li> <img src="{{ asset('img/img02.jpeg') }}" alt="salvador"></li>
                <li> <img src="{{ asset('img/img03.webp') }}" alt="salvador"></li>
                <li> <img src="{{ asset('img/img04.jpeg') }}" alt="salvador"></li>
                <li> <img src="{{ asset('img/img05.jpg') }}" alt="salvador"></li>
                <li> <img src="{{ asset('img/img06.jpg') }}" alt="salvador"></li>
            </ul>




        </div>
    </main>
@endsection
