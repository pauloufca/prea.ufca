# prea.ufca
Sistema de Recarga do RU

# Projeto de acessibilidade para a interface https://prea.ufca.edu.br

## 1. Links consultados

- https://emag.governoeletronico.gov.br/  
- https://emag.governoeletronico.gov.br/cartilha-contratacao/  
- https://epwg.governoeletronico.gov.br/cartilha-codificacao.html  
- https://epwg.governoeletronico.gov.br/cartilha-usabilidade.html  
- https://www.gov.br/ds/home  
- https://acervo.ceweb.br/acervos/conteudo/01dcf0ea-bfdb-4795-8c92-1cca32e5dcab  
- https://acervo.ceweb.br/acervos/conteudo/9ef3187c-fcd9-4dfd-83c9-ce79d42f396d  
- https://acervo.ceweb.br/acervos/conteudo/81415fe5-e2f1-40e4-be30-c56f6b1c27b9  
- https://www.w3.org/WAI/standards-guidelines/aria/  
- https://www.w3.org/WAI/WCAG22/quickref/?versions=2.1  

### 1.1. NVDA

- https://www.nvaccess.org/download/  

> **Observação:** Foram apresentados cinco modelos distintos de interface, todos implementando boas práticas de acessibilidade (WCAG 2.1 nível AA), WAI-ARIA e padrões do Governo Brasileiro.

---

## 2. Estrutura Geral de Cada Modelo

```text
modelX/
├── controllers/
│   └── HomeController.php
├── views/
│   └── home_view.php
├── assets/
│   ├── css/
│   │   └── style.css
│   └── js/
│       └── script.js
└── index.php
```

### 2.1 index.php (front-controller)
Recebe todas as requisições, instancia o controlador e exibe a view.

### 2.2 controllers/HomeController.php
Contém a lógica para renderizar a view.

### 2.3 views/home_view.php
Contém todo o markup HTML da página, obedecendo aos padrões de acessibilidade (marcadores semânticos, atributos aria-, landmarks, controle de foco, etc.).

### 2.4 assets/css/style.css
Contém o CSS, seguindo recomendações de contraste, uso de :focus, tamanhos em unidades relativas (rem/em), e media-queries para responsividade.

### 2.5 assets/js/script.js
Contém o código JavaScript e/ou jQuery (quando necessário), sempre garantindo que eventuais interações adicionem atributos aria-live ou foco programático, evitando dependência exclusiva de mouse.

# 3. Modelos 

## 3.1 MODELO 1 – “Simples e de Alto Contraste (Fundo Claro)”

### Objetivo:

    - Máximo contraste (branco e preto);

    - Uso de landmarks (<header>, <main>, <footer>);

    - “Skip to content” para navegação por teclado;

    - Botão “Entrar” semanticamente marcado como <a role="button"> com aria-label;

    - Suporte a NVDA: foco visível, atributos aria- mínimos para leitura correta.

### 3.1.1 Comentários de acessibilidade no HTML (views/home_view.php)

    - <a href="#main-content" class="skip-link">Ir para o conteúdo principal</a>: permite ao usuário de leitor de tela ou teclado “pular” banners, menus, etc. (WCAG 2.4.1).

    - <h1 class="visually-hidden">PREA UFCA – Portal de Acesso</h1>: título principal invisível (aplicado visually-hidden via CSS) para leitores de tela.

    - <section aria-labelledby="login-title"> + <h2 id="login-title" class="visually-hidden">: garante que NVDA anuncie corretamente o propósito da seção “Área de Login”.

    - <a href="/login" role="button" aria-label="Entrar no sistema PREA UFCA" class="btn-login">: link estilizado como botão; role="button" e aria-label explicam o destino ao leitor de tela (WCAG 2.5.3: área de clique ).

    - Uso de landmarks (role="banner", role="main", role="contentinfo") para orientar navegação por leitores de tela (e-MAG/Recomendação Geral de Uso de ARIA).

