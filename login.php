<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minhas Metas - Entrar ou criar conta</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles/style.css">
</head>
<body>

  <main class="main-card">
    <h1 class="brand-header">Minhas Metas</h1>

    <div class="grid-container">
      <section class="left-panel">
        <div>
          <div class="tag-line">Um passo de cada vez</div>
          <h2 class="hero-title">Pequenos passos.<br>Grandes conquistas.</h2>
          <p class="hero-description">Um lugar tranquilo para organizar suas metas e dar espaço ao que importa para você.</p>
          <div class="badge-pill">
            <span class="badge-icon">✓</span>
            <span>O seu ritmo também é progresso.</span>
          </div>
        </div>
        <p class="left-footer">Menos cobrança. Mais direção.</p>
      </section>

      <section class="right-panel">
        <form onsubmit="event.preventDefault();">
          <div class="form-header">
            <h2>Bom ter você aqui.</h2>
            <p>Entre para continuar a sua jornada.</p>
          </div>

          <div class="form-group">
            <label class="form-label" for="username">Nome do usuário</label>
            <input type="text" id="username" class="form-input" placeholder="Digite seu nome de usuário">
          </div>

          <div class="form-group">
            <label class="form-label" for="password">Senha</label>
            <input type="password" id="password" class="form-input" placeholder="Digite sua senha">
          </div>

          <a href="#" class="forgot-link">Esqueci minha senha</a>

          <button type="submit" class="btn-primary">
            <span>→</span> Entrar
          </button>

          <div class="divider">
            <span>ou comece agora</span>
          </div>

          <button type="button" class="btn-secondary">Cadastrar usuário</button>

          <p class="micro-copy">Seu próximo passo começa aqui. Sem custo.</p>
        </form>

        <footer class="page-footer">
          <div>
            <a href="#">Termos de uso</a>
            <a href="#">Privacidade</a>
          </div>
          <div style="margin-top: 4px;">© 2026 Minhas Metas. Feito para o seu tempo.</div>
        </footer>
      </section>
    </div>
  </main>

</body>
</html>