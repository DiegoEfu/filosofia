<?php
declare(strict_types=1);

require_once __DIR__ . '/data.php';

function e(string $valor): string {
    return htmlspecialchars($valor, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="color-scheme" content="dark">
  <title><?= e($portafolioMetadata['titulo']) ?></title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <!-- Cabecera Compacta y Visual en Modo Oscuro -->
  <header class="hero-header">
    <div class="hero-inner">
      <div class="hero-text">
        <span class="hero-badge">Portafolio Digital Interactivo</span>
        <h1><?= e($portafolioMetadata['titulo']) ?></h1>
        <p><?= e($portafolioMetadata['subtitulo']) ?></p>
      </div>

      <!-- Tarjeta / Insignia de Autoría -->
      <div class="author-badge-card" id="author-card">
        <div class="author-avatar" aria-hidden="true">👨‍💻</div>
        <div class="author-info">
          <span class="author-label">Portafolio</span>
          <strong class="author-name"><?= e($autor['nombre']) ?><?= $autor['apellido'] !== '' ? ' ' . e($autor['apellido']) : '' ?></strong>
          <span class="author-subtext"><?= e($autor['profesion']) ?></span>
        </div>
        <button type="button" class="btn-author-modal" id="btn-open-author" data-dialog-target="modal-author" aria-label="Ver ficha completa de autoría">
          Ficha &rarr;
        </button>
      </div>
    </div>

    <!-- Mapa Visual Rápido (Infografía de los 2 Bloques + 5 Estrategias) -->
    <div class="visual-summary-strip">
      <div class="summary-stat">
        <span class="stat-num">4</span>
        <div>
          <strong>Origen del Conocimiento</strong>
          <small>Racionalismo &bull; Empirismo &bull; Intelectualismo &bull; Apriorismo</small>
        </div>
      </div>
      <div class="summary-stat">
        <span class="stat-num">5</span>
        <div>
          <strong>Posibilidad del Conocimiento</strong>
          <small>Dogmatismo &bull; Escepticismo &bull; Subjetivismo &bull; Realismo &bull; Criticismo</small>
        </div>
      </div>
      <div class="summary-stat">
        <span class="stat-num">5</span>
        <div>
          <strong>Estrategias de DO con IA</strong>
          <small>Aplicadas a Psicología del Trabajo e Ingeniería</small>
        </div>
      </div>
    </div>
  </header>

  <!-- Barra de Pestañas Interactiva con Anchor Positioning + Buscador -->
  <nav class="filter-bar" aria-label="Filtros del portafolio">
    <div class="filter-inner">
      <ul class="tab-list" id="tab-list">
        <li class="active">
          <button type="button" class="tab-btn" data-filter="all" aria-current="page">
            ✨ Todo el Portafolio
          </button>
        </li>
        <li>
          <button type="button" class="tab-btn" data-filter="origen">
            🌱 Según el Origen (4)
          </button>
        </li>
        <li>
          <button type="button" class="tab-btn" data-filter="posibilidad">
            🔭 Según la Posibilidad (5)
          </button>
        </li>
        <li>
          <button type="button" class="tab-btn" data-filter="estrategias">
            🚀 5 Estrategias DO (Punto 7)
          </button>
        </li>
      </ul>

      <search class="quick-search">
        <input
          type="search"
          id="quick-search-input"
          placeholder="🔍 Buscar postura, autor o tema..."
          aria-label="Buscar en el portafolio"
        >
      </search>
    </div>
  </nav>

  <main class="container">

    <!-- SECCIÓN 1 y 2: TARJETAS VISUALES DE LAS 9 HOJAS -->
    <section id="seccion-hojas" class="portfolio-section">
      <div class="section-heading">
        <div>
          <h2>📁 Las 9 Hojas del Portafolio (Haz clic en cualquiera para ver sus 7 puntos)</h2>
          <p>Cada tarjeta resume la postura filosófica y su investigación con IA. Al abrirla verás la ficha completa lista para presentar.</p>
        </div>
      </div>

      <div class="cards-grid" id="cards-grid">
        <?php foreach ($hojasInvestigacion as $hoja): ?>
          <?php include __DIR__ . '/sheet_template.php'; ?>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- SECCIÓN 3 (PUNTO 7): LAS 5 ESTRATEGIAS DE DESARROLLO ORGANIZACIONAL -->
    <section id="seccion-estrategias" class="portfolio-section" style="margin-top: 3rem;">
      <div class="section-heading">
        <div>
          <h2>🚀 5 Estrategias de Desarrollo Organizacional (Punto 7)</h2>
          <p>Propuestas prácticas para la empresa integrando los postulados filosóficos, la psicología laboral y la Inteligencia Artificial.</p>
        </div>
      </div>

      <div class="do-grid">
        <?php foreach ($estrategiasDO as $est): ?>
          <article class="do-visual-card">
            <div class="do-card-header">
              <span class="do-icon" aria-hidden="true"><?= $est['icono'] ?></span>
              <div>
                <span class="do-step-badge">Estrategia DO #0<?= (int)$est['numero'] ?> &bull; <?= e($est['duracion']) ?></span>
                <h3><?= e($est['nombre']) ?></h3>
              </div>
            </div>

            <div class="do-pills">
              <?php foreach ($est['postulados'] as $postulado): ?>
                <span class="do-pill"><?= e($postulado) ?></span>
              <?php endforeach; ?>
              <span class="do-pill do-pill-foco"><?= e($est['foco']) ?></span>
            </div>

            <p class="do-summary"><?= e($est['resumen']) ?></p>

            <div class="do-steps-box">
              <strong>Pasos de aplicación:</strong>
              <ol>
                <?php foreach ($est['pasos'] as $paso): ?>
                  <li><?= e($paso) ?></li>
                <?php endforeach; ?>
              </ol>
            </div>

            <div class="do-kpi-footer">
              🎯 <strong>Resultado esperado:</strong> <?= e($est['kpi']) ?>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

  </main>

  <!-- Modal de Ficha de Autoría -->
  <dialog id="modal-author" class="sheet-dialog author-dialog" closedby="any" aria-labelledby="author-dialog-title">
    <div class="dialog-sheet-content">
      <header class="dialog-sheet-header">
        <div class="dialog-title-group">
          <span class="dialog-icon" aria-hidden="true">👨‍💻</span>
          <div>
            <span class="folio-pill">Ficha Académica de Autoría</span>
            <h2 id="author-dialog-title"><?= e($autor['nombre']) ?><?= $autor['apellido'] !== '' ? ' ' . e($autor['apellido']) : '' ?></h2>
          </div>
        </div>
        <form method="dialog">
          <button type="submit" class="btn-close-modal" aria-label="Cerrar ficha">&times; Cerrar</button>
        </form>
      </header>

      <div class="seven-points-grid">
        <div class="point-box point-highlight">
          <span class="point-num">Investigador / Autor</span>
          <p><strong><?= e($autor['nombre']) ?><?= $autor['apellido'] !== '' ? ' ' . e($autor['apellido']) : '' ?></strong></p>
        </div>
        <div class="point-box">
          <span class="point-num">Profesión</span>
          <p><?= e($autor['profesion']) ?></p>
        </div>
        <div class="point-box point-full">
          <span class="point-num">Asignatura</span>
          <p><?= e($autor['asignatura']) ?></p>
        </div>
        <div class="point-box">
          <span class="point-num">Maestría</span>
          <p><?= e($autor['carrera']) ?></p>
        </div>
        <div class="point-box">
          <span class="point-num">Institución</span>
          <p><?= e($autor['institucion']) ?></p>
        </div>
        <div class="point-box point-full">
          <span class="point-num">Fecha de Publicación / Entrega</span>
          <p><?= e($autor['fecha']) ?> &bull; Ciclo Lectivo <?= e($autor['año']) ?></p>
        </div>
      </div>
    </div>
  </dialog>

  <footer class="simple-footer">
    <div class="footer-author-box">
      <p class="footer-copy">Portafolio Digital: Filosofía, Desarrollo Organizacional e Inteligencia Artificial</p>
      <p class="footer-credits">
        Diseñado e investigado por <strong><?= e($autor['nombre']) ?><?= $autor['apellido'] !== '' ? ' ' . e($autor['apellido']) : '' ?></strong> &bull; <?= e($autor['asignatura']) ?> (<?= e($autor['año']) ?>)
      </p>
    </div>
  </footer>

  <script>
    // 1. Abrir modales de cada Hoja y Autoría con soporte de cierre al hacer clic afuera (light-dismiss)
    document.querySelectorAll('[data-dialog-target]').forEach((btn) => {
      btn.addEventListener('click', () => {
        const dialogId = btn.getAttribute('data-dialog-target');
        const dialog = document.getElementById(dialogId);
        if (dialog) {
          dialog.showModal();
        }
      });
    });

    // Fallback para navegadores sin soporte nativo de closedby="any"
    if (!('closedBy' in HTMLDialogElement.prototype)) {
      document.querySelectorAll('dialog.sheet-dialog').forEach((dialog) => {
        dialog.addEventListener('click', (event) => {
          if (event.target !== dialog) return;
          const rect = dialog.getBoundingClientRect();
          const isDialogContent = (
            rect.top <= event.clientY &&
            event.clientY <= rect.top + rect.height &&
            rect.left <= event.clientX &&
            event.clientX <= rect.left + rect.width
          );
          if (!isDialogContent) {
            dialog.close();
          }
        });
      });
    }

    // 2. Filtro visual instantáneo por Pestañas (sin recargar la página)
    const tabItems = document.querySelectorAll('#tab-list li');
    const tabButtons = document.querySelectorAll('.tab-btn');
    const cards = document.querySelectorAll('.visual-card');
    const seccionHojas = document.getElementById('seccion-hojas');
    const seccionEstrategias = document.getElementById('seccion-estrategias');

    tabButtons.forEach((btn) => {
      btn.addEventListener('click', () => {
        const filter = btn.getAttribute('data-filter');

        // Actualizar pestaña activa y atributo aria-current
        tabItems.forEach((li) => li.classList.remove('active'));
        tabButtons.forEach((b) => b.removeAttribute('aria-current'));
        btn.parentElement.classList.add('active');
        btn.setAttribute('aria-current', 'page');

        if (filter === 'estrategias') {
          seccionHojas.style.display = 'none';
          seccionEstrategias.style.display = '';
        } else if (filter === 'origen' || filter === 'posibilidad') {
          seccionHojas.style.display = '';
          seccionEstrategias.style.display = 'none';
          cards.forEach((card) => {
            card.style.display = card.getAttribute('data-category') === filter ? '' : 'none';
          });
        } else {
          // 'all'
          seccionHojas.style.display = '';
          seccionEstrategias.style.display = '';
          cards.forEach((card) => {
            card.style.display = '';
          });
        }
      });
    });

    // 3. Buscador rápido en tiempo real
    const searchInput = document.getElementById('quick-search-input');
    const doCards = document.querySelectorAll('.do-visual-card');

    if (searchInput) {
      searchInput.addEventListener('input', (e) => {
        const query = e.target.value.trim().toLowerCase();
        cards.forEach((card) => {
          const modalId = card.querySelector('[data-dialog-target]')?.getAttribute('data-dialog-target');
          const modalText = modalId ? document.getElementById(modalId)?.textContent.toLowerCase() : '';
          const match = card.textContent.toLowerCase().includes(query) || modalText.includes(query);
          card.style.display = match ? '' : 'none';
        });
        doCards.forEach((doCard) => {
          doCard.style.display = doCard.textContent.toLowerCase().includes(query) ? '' : 'none';
        });
      });
    }

    // 4. Botón de impresión
    document.getElementById('btn-print')?.addEventListener('click', () => {
      window.print();
    });
  </script>
</body>
</html>
