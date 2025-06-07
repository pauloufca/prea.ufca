<?php
// model1/views/home_view.php

// link para encurtar o href:
$loginUrl = 'https://acesso.ufca.edu.br/realms/ufca/'
          . 'protocol/openid-connect/auth?'
          . 'client_id=prea&scope=openid%20email%20profile&'
          . 'response_type=code&redirect_uri=https%3A%2F%2Fprea.ufca.edu.br%2F'
          . 'api%2Fauth%2Fcallback%2Fkeycloak&'
          . 'state=NQSwzvVzQicEzNgcLOkarYqltneF2f-05kkEXxMdO88&'
          . 'code_challenge=Vsekr6wVT374_OffR3pRhIuvwJCX-z1Qp0DBlyERDGU&'
          . 'code_challenge_method=S256';
?><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sistema de recarga do RU - UFCA</title>
    <meta name="description" content="Interface de entrada do sistema de recarga" />
    <link rel="stylesheet" href="assets/css/style.css" />

    <!-- =========================
         Instruções de acessibilidade / e-MAG:
         - Skip to content
         - Landmarks semânticos <header>, <main>, <footer>
         - Botão como link com role="button" + aria-label
         - Contraste seguindo WCAG 2.1 
         - Foco visível (outline)
         ========================= -->
</head>
<body>

    <!-- Skip-Link: permite pular diretamente para o conteúdo principal -->
    <a href="#main-content" class="skip-link">Ir para o conteúdo principal</a>

    <header role="banner" class="header">
        <h1 class="visually-hidden">Sistema de recarga do RU</h1>
    </header>

    <main id="main-content" role="main" class="main">
        <section class="login-container" aria-labelledby="login-title">
            <h2 id="login-title" class="visually-hidden">Área de Login do PREA UFCA</h2>

            <h2 id="page-title" class="page-title">Recarga RU</h2>

            <a href="<?php echo $loginUrl; ?>"
               role="button"
               aria-label="Entrar no sistema de recarga do RU"
               class="btn-login">
                Entrar
            </a>
        </section>
    </main>

    <footer role="contentinfo" class="footer">
        <p>PREA © 2025 | <span aria-label="Desenvolvido pela Diretoria de TI da UFCA">Desenvolvido pela DTI/UFCA</span></p>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>
