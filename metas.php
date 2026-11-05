<?php
require_once 'conectar.php';

$metasPendentes = R::find('metas', 'concluida = 0');
$metasConcluidas = R::find('metas', 'concluida = 1');

$totalPendentes = count($metasPendentes);
$totalConcluidas = count($metasConcluidas);
$totalMetas = $totalPendentes + $totalConcluidas;
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minhas Metas - Painel</title>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles/metas.css">
</head>
<body>

  <div class="app-container">
    <div class="main-wrapper">
      <header class="top-header">
        <div style="font-size: 13px; color: #7a5c71;"> Minhas metas</div>
        <div style="display: flex; align-items: center; gap: 12px;">
          <span style="font-size: 12px; color: #7a5c71;">📅 <?php echo date('d/m/Y'); ?></span>
        </div>
      </header>

      <main class="content-body">
        <div>
          <h2 class="page-title">Metas 2027</h2>
          <p class="page-desc">Gerencie suas metas, acompanhe o progresso e mantenha o próximo passo sempre visível.</p>

          <div class="section-label">Não concluídas (<?= $totalPendentes ?>)</div>
          <div class="task-box">
            <div>
              <?php foreach ($metasPendentes as $meta): ?>
              <div class="task-item">
                <div class="task-left">
                  <form action="concluir.php" method="POST" class="form-inline">
                    <input type="hidden" name="id" value="<?= $meta->id ?>">
                    <button type="submit" class="checkbox btn-transparent"></button>
                  </form>
                  <span class="task-text"><?= htmlspecialchars($meta->descricao) ?></span>
                </div>
                <div class="task-right">
                  <span class="task-date">Pendente</span>
                  <form action="deletar.php" method="POST" class="form-inline">
                    <input type="hidden" name="id" value="<?= $meta->id ?>">
                    <button type="submit" class="delete-btn">🗑️</button>
                  </form>
                </div>
              </div>
              <?php endforeach; ?>
            </div>

            <form action="adicionar.php" method="POST" class="add-task-row">
              <span>+</span>
              <input type="text" name="descricao" class="add-task-input" placeholder="Adicionar uma nova meta e pressionar Enter" required>
            </form>
          </div>

          
          <div class="section-label">Concluídas (<?= $totalConcluidas ?>)</div>
          <div class="task-box">
            <?php foreach ($metasConcluidas as $meta): ?>
            <div class="task-item completed">
              <div class="task-left">
                <form action="desfazer.php" method="POST" class="form-inline">
                    <input type="hidden" name="id" value="<?= $meta->id ?>">
                    <button type="submit" class="checkbox checked btn-transparent">✓</button>
                </form>
                <span class="task-text"><?= htmlspecialchars($meta->descricao) ?></span>
              </div>
              <div class="task-right">
                <form action="deletar.php" method="POST" class="form-inline">
                  <input type="hidden" name="id" value="<?= $meta->id ?>">
                  <button type="submit" class="delete-btn">🗑️</button>
                </form>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

        <aside>
          <div class="widget-card">
            <div style="display: flex; justify-content: space-between; font-weight: 700; margin-bottom: 12px;">
              <span>Seu progresso</span>
            </div>
            <div style="text-align: center; font-weight: 700; margin-bottom: 6px;">
              <?= $totalConcluidas ?> de <?= $totalMetas ?> metas concluídas
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; text-align: center; border-top: 1px solid #f8eaee; padding-top: 12px;">
              <div>
                <div style="font-size: 20px; font-weight: 700;"><?= $totalPendentes ?></div>
                <div style="font-size: 11px; color: #8c7385;">Pendentes</div>
              </div>
              <div>
                <div style="font-size: 20px; font-weight: 700;"><?= $totalConcluidas ?></div>
                <div style="font-size: 11px; color: #8c7385;">Concluídas</div>
              </div>
            </div>
          </div>
        </aside>
      </main>
    </div>
  </div>
</body>
</html>