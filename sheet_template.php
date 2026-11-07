<?php
/**
 * Plantilla de Tarjeta Visual + Modal de Hoja Completa (Punto 6).
 * Espera la variable $hoja en el ámbito actual.
 */
?>
<!-- Tarjeta Visual Resumida -->
<article
  class="visual-card"
  data-category="<?= e($hoja['categoria_id']) ?>"
  style="--card-accent: <?= e($hoja['color']) ?>; --card-bg-soft: <?= e($hoja['bg_soft']) ?>;"
>
  <div class="card-top">
    <div class="card-icon-badge" aria-hidden="true"><?= $hoja['icono'] ?></div>
    <div class="card-meta-right">
      <span class="folio-pill">Hoja #0<?= (int)$hoja['numero'] ?></span>
      <span class="cat-pill"><?= e($hoja['categoria_nombre']) ?></span>
    </div>
  </div>

  <h3 class="card-postura"><?= e($hoja['postura']) ?></h3>
  <p class="card-idea"><?= e($hoja['idea_clave']) ?></p>

  <div class="metric-banner">
    <span class="metric-spark" aria-hidden="true">⚡</span>
    <strong>Impacto en la IA:</strong> <?= e($hoja['metrica_destacada']) ?>
  </div>

  <ul class="mini-chips">
    <li><strong>Enfoque:</strong> <?= e($hoja['variable_empresarial']) ?></li>
    <li><strong>Fuente:</strong> <?= e($hoja['revista_fuente']) ?></li>
    <li><strong>Duración:</strong> <?= e($hoja['duracion']) ?></li>
  </ul>

  <div class="card-actions">
    <button
      type="button"
      class="btn-open-sheet"
      data-dialog-target="modal-<?= e($hoja['id']) ?>"
    >
      Abrir Hoja Completa (7 Puntos) &rarr;
    </button>
  </div>
</article>

<!-- Modal Nativo con los 7 Puntos resumidos y visuales -->
<dialog
  id="modal-<?= e($hoja['id']) ?>"
  class="sheet-dialog"
  closedby="any"
  aria-labelledby="title-<?= e($hoja['id']) ?>"
  style="--card-accent: <?= e($hoja['color']) ?>; --card-bg-soft: <?= e($hoja['bg_soft']) ?>;"
>
  <div class="dialog-sheet-content">
    <header class="dialog-sheet-header">
      <div class="dialog-title-group">
        <span class="dialog-icon" aria-hidden="true"><?= $hoja['icono'] ?></span>
        <div>
          <span class="folio-pill">Hoja #0<?= (int)$hoja['numero'] ?> &bull; <?= e($hoja['categoria_nombre']) ?></span>
          <h2 id="title-<?= e($hoja['id']) ?>"><?= e($hoja['postura']) ?></h2>
        </div>
      </div>
      <form method="dialog">
        <button type="submit" class="btn-close-modal" aria-label="Cerrar hoja">&times; Cerrar</button>
      </form>
    </header>

    <div class="dialog-research-banner">
      <div class="research-banner-info">
        <p class="research-name">📄 <strong>Investigación:</strong> <?= e($hoja['titulo_investigacion']) ?></p>
        <p class="research-source">
          <strong>Autores:</strong> <?= e($hoja['autores_referencia']) ?> &bull;
          Revista: <cite><?= e($hoja['revista_fuente']) ?></cite> &bull;
          Impacto: <strong><?= e($hoja['metrica_destacada']) ?></strong>
        </p>
      </div>
      <?php if (!empty($hoja['enlace_referencia'])): ?>
        <a
          href="<?= e($hoja['enlace_referencia']) ?>"
          target="_blank"
          rel="noopener noreferrer"
          class="ref-banner-link"
          title="Abrir publicación científica en sitio oficial"
        >
          <span>🔗 Ver Revista / Enlace</span> &nearr;
        </a>
      <?php endif; ?>
    </div>

    <!-- Cuadrícula Visual de los 7 Puntos del Punto 6 -->
    <div class="seven-points-grid">
      <div class="point-box point-full">
        <span class="point-num">1. Resumen de la Investigación</span>
        <p><?= e($hoja['resumen_investigacion']) ?></p>
      </div>

      <div class="point-box">
        <span class="point-num">2A. Variable Filosófica</span>
        <p><?= e($hoja['variable_filosofica']) ?></p>
      </div>

      <div class="point-box">
        <span class="point-num">2B. Variable Empresarial</span>
        <p><?= e($hoja['variable_empresarial']) ?></p>
      </div>

      <div class="point-box">
        <span class="point-num">3. Trabajadores Aplicados</span>
        <p><?= e($hoja['tipo_trabajadores']) ?></p>
      </div>

      <div class="point-box">
        <span class="point-num">5. Duración</span>
        <p><?= e($hoja['duracion']) ?></p>
      </div>

      <div class="point-box">
        <span class="point-num">4. Descripción de la Estrategia</span>
        <p><?= e($hoja['descripcion_estrategia']) ?></p>
      </div>

      <div class="point-box">
        <span class="point-num">6. Su Aporte Principal</span>
        <p><?= e($hoja['aporte']) ?></p>
      </div>

      <div class="point-box point-full point-highlight">
        <span class="point-num">7. Aplicación Estratégica Corporativa</span>
        <p><?= e($hoja['como_lo_aplicaria']) ?></p>
      </div>

      <!-- Referencia bibliográfica formal en formato APA dentro del modal -->
      <?php if (!empty($hoja['cita_apa'])): ?>
        <div class="point-box point-full point-ref-apa">
          <span class="point-num">📚 Referencia Bibliográfica (Normas APA 7ma Edición)</span>
          <p class="apa-citation-text"><?= e($hoja['cita_apa']) ?></p>
          <a
            href="<?= e($hoja['enlace_referencia']) ?>"
            target="_blank"
            rel="noopener noreferrer"
            class="ref-inline-link"
          >
            Acceder a la fuente en línea &rarr;
          </a>
        </div>
      <?php endif; ?>
    </div>
  </div>
</dialog>
