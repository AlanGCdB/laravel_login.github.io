<footer class="footer-bg">
    <div class="footer">
        <div class="footer-contato">
            <h3 class="font-2-l-b cor-0">Contato</h3>
            <ul class="font-2-m cor-5">
                <li><a href="tel:+552199999999">+55 21 9999-9999</a></li>
                <li><a href="mailto:Jesus@caminho.com">Jesus@caminho.com</a></li>
                <li>Rua Céu, 07 - Botafogo</li>
                <li>São Paulo - SP</li>
            </ul>
            <div class="footer-redes">
                <a href="./">
                    <img src="{{ asset('img/redes/instagram.svg') }}" width="32" height="32" alt="Instagram">
                </a>
                <a href="./">
                    <img src="{{ asset('img/redes/facebook.svg') }}" width="32" height="32" alt="Facebook">
                </a>
                <a href="./">
                    <img src="{{ asset('img/redes/youtube.svg') }}" width="32" height="32" alt="Youtube">
                </a>
            </div>
        </div>
        <div class="footer-informacoes">
            <h3 class="font-2-l-b cor-0">Informações</h3>
            <nav>
                <ul class="font-1-m cor-5">
                    <li><a href="{{ route('site.index') }}">Home</a></li>
                    <li><a href="{{ route('site.login') }}">Login</a></li>
                    <li><a href="{{ route('site.contato') }}">Contato</a></li>
                </ul>
            </nav>
        </div>
        <p class="footer-copy font-2-m cor-6"> © Alguns direitos reservados.</p>
    </div>
</footer>
