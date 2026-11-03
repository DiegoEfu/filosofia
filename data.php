<?php
/**
 * Datos resumidos, visuales y directos del Portafolio Digital.
 * Epistemología aplicada al Desarrollo Organizacional (DO), Psicología del Trabajo e Ingeniería con IA.
 */

// =============================================================================
// DATOS DE AUTORÍA DEL ESTUDIANTE / INVESTIGADOR
// =============================================================================
$autor = [
    'nombre' => 'Diego',
    'apellido' => 'Faria', // Puedes agregar tu apellido aquí (ej: 'Pérez', 'González')
    'profesion' => 'Ingeniero en Informática',
    'institucion' => 'Universidad Bicentenaria de Aragua (UBA)',
    'carrera' => 'Maestría en Informática Aplicada Mención Inteligencia Artificial',
    'asignatura' => 'Filosofía de las Ciencias',
    'fecha' => 'Noviembre del 2026',
    'año' => '2026',
    'correo' => 'diegoafbrito12@gmail.com'
];

$portafolioMetadata = [
    'titulo' => 'Portafolio Digital: Filosofía, IA y Desarrollo Organizacional',
    'subtitulo' => '9 Hojas Epistemológicas + 5 Estrategias Empresariales con Inteligencia Artificial',
];

$hojasInvestigacion = [
    // =========================================================================
    // BLOQUE I: SEGÚN EL ORIGEN DEL CONOCIMIENTO (4 Hojas)
    // =========================================================================
    [
        'id' => 'hoja-01',
        'numero' => 1,
        'categoria_id' => 'origen',
        'categoria_nombre' => 'Origen del Conocimiento',
        'postura' => 'Racionalismo',
        'icono' => '🧠',
        'color' => '#3b82f6',
        'bg_soft' => 'rgba(59, 130, 246, 0.16)',
        'idea_clave' => 'La razón y las reglas lógicas son la base del saber.',
        'metrica_destacada' => '-34% Fatiga Decisional',
        'revista_fuente' => 'Computers & Industrial Engineering (2024)',
        'titulo_investigacion' => 'IA Simbólica y Grafos Lógicos para Reducir la Fatiga Decisional',
        'resumen_investigacion' => 'Los motores de IA basados en reglas lógicas claras y restricciones previas (en vez de "cajas negras") reducen un 34% la sobrecarga mental de los líderes al asignar recursos.',
        'variable_filosofica' => 'Deducción lógica y reglas formales a priori.',
        'variable_empresarial' => 'Toma de decisiones estratégicas y carga mental.',
        'tipo_trabajadores' => 'Ingenieros de sistemas, arquitectos de software y directores (145 profesionales).',
        'descripcion_estrategia' => 'Estrategia "OntoLogic": Crear un árbol de reglas lógicas claras sobre límites de carga laboral para que la IA asigne proyectos sin saturar al personal.',
        'duracion' => '6 meses (2 diseño lógico, 2 programación, 2 evaluación).',
        'aporte' => 'Brinda transparencia total (IA Explicable) y evita la ansiedad de no saber por qué un algoritmo asignó una tarea.',
        'como_lo_aplicaria' => 'Programaría un validador lógico en el gestor de proyectos (Jira/Asana) que bloquee automáticamente asignar más de 2 tareas críticas simultáneas a un mismo ingeniero.'
    ],
    [
        'id' => 'hoja-02',
        'numero' => 2,
        'categoria_id' => 'origen',
        'categoria_nombre' => 'Origen del Conocimiento',
        'postura' => 'Empirismo',
        'icono' => '📊',
        'color' => '#10b981',
        'bg_soft' => 'rgba(16, 185, 129, 0.16)',
        'idea_clave' => 'Todo conocimiento nace de la experiencia y los datos medibles.',
        'metrica_destacada' => '89% Precisión Anti-Burnout',
        'revista_fuente' => 'Journal of Applied Psychology (2023)',
        'titulo_investigacion' => 'People Analytics y Machine Learning para Prevenir el Burnout',
        'resumen_investigacion' => 'Entrenando algoritmos exclusivamente con datos reales observados (horas extra, micro-encuestas de pulso y rotación) se predice el agotamiento laboral con 6 semanas de anticipación.',
        'variable_filosofica' => 'Observación empírica e inducción basada en datos.',
        'variable_empresarial' => 'Prevención del Burnout y retención del talento.',
        'tipo_trabajadores' => 'Desarrolladores de software y agentes de soporte técnico (420 trabajadores remotos/híbridos).',
        'descripcion_estrategia' => 'Estrategia "DataPulse": Medición semanal con 3 preguntas rápidas y telemetría de desconexión digital para detectar desgaste real antes de que ocurra una renuncia.',
        'duracion' => '9 meses (3 recolección de datos, 3 pruebas piloto, 3 medición).',
        'aporte' => 'Reemplaza las suposiciones de los jefes por evidencia real: desconectar el servidor a las 18:00 hrs reduce 41% el agotamiento.',
        'como_lo_aplicaria' => 'Implementaría un tablero en RR.HH. con semáforos empíricos cada viernes; si un equipo pasa a rojo por exceso de horas, se activa una semana de descarga operativa.'
    ],
    [
        'id' => 'hoja-03',
        'numero' => 3,
        'categoria_id' => 'origen',
        'categoria_nombre' => 'Origen del Conocimiento',
        'postura' => 'Intelectualismo',
        'icono' => '🤝',
        'color' => '#14b8a6',
        'bg_soft' => 'rgba(20, 184, 166, 0.16)',
        'idea_clave' => 'Unión de experiencia práctica (sentidos) + abstracción mental (razón).',
        'metrica_destacada' => '+52% Aprendizaje Rápido',
        'revista_fuente' => 'Journal of Knowledge Management (2024)',
        'titulo_investigacion' => 'Inteligencia Híbrida para Capturar la Sabiduría de Expertos Senior',
        'resumen_investigacion' => 'Se graban casos prácticos resueltos en planta por ingenieros veteranos y, con ayuda de IA generativa, se extraen las reglas universales para enseñar a los jóvenes un 52% más rápido.',
        'variable_filosofica' => 'Síntesis entre experiencia práctica y concepto universal.',
        'variable_empresarial' => 'Gestión del conocimiento y mentoría intergeneracional.',
        'tipo_trabajadores' => 'Ingenieros senior de planta y técnicos jóvenes recién ingresados (85 duplas).',
        'descripcion_estrategia' => 'Estrategia "MentorIA": Cada vez que un experto resuelve una falla difícil, conversa 15 minutos con un asistente de IA que transforma su experiencia en una guía paso a paso.',
        'duracion' => '8 meses (2 captura en campo, 3 síntesis con IA, 3 capacitación).',
        'aporte' => 'Evita que el conocimiento valioso se pierda cuando un trabajador veterano se jubila o cambia de empresa.',
        'como_lo_aplicaria' => 'Crearía una biblioteca viva donde cada incidente técnico resuelto se resume en una ficha de "Caso Real + Lección Aprendida" consultable mediante un chat interno.'
    ],
    [
        'id' => 'hoja-04',
        'numero' => 4,
        'categoria_id' => 'origen',
        'categoria_nombre' => 'Origen del Conocimiento',
        'postura' => 'Apriorismo',
        'icono' => '⚖️',
        'color' => '#818cf8',
        'bg_soft' => 'rgba(129, 140, 248, 0.16)',
        'idea_clave' => 'La mente aplica moldes o principios éticos previos para ordenar los datos.',
        'metrica_destacada' => '+28% Equidad en Selección',
        'revista_fuente' => 'European Journal of Work & Org. Psychology (2024)',
        'titulo_investigacion' => 'Candados Éticos A Priori en Algoritmos de Selección de Personal',
        'resumen_investigacion' => 'Si una IA aprende de currículums históricos sin reglas previas, copia sesgos humanos. Al imponer reglas de equidad *a priori* antes de leer los datos, sube 28% la contratación justa.',
        'variable_filosofica' => 'Estructuras normativas *a priori* previas a la experiencia.',
        'variable_empresarial' => 'Justicia organizacional y reclutamiento sin sesgos.',
        'tipo_trabajadores' => 'Psicólogos de selección, reclutadores IT y candidatos (3,200 procesos evaluados).',
        'descripcion_estrategia' => 'Estrategia "Currículum Ciego A Priori": Programar moldes de equidad obligatorios antes de que la IA evalúe candidatos o ascensos internos.',
        'duracion' => '5 meses (2 diseño ético, 1 ajuste de algoritmo, 2 validación).',
        'aporte' => 'Demuestra que los datos crudos son ciegos si no los guiamos previamente con principios éticos y psicométricos claros.',
        'como_lo_aplicaria' => 'Configuraría el software de RR.HH. para ocultar automáticamente género, edad, foto y universidad, evaluando únicamente pruebas prácticas anónimas.'
    ],

    // =========================================================================
    // BLOQUE II: SEGÚN LA POSIBILIDAD DEL CONOCIMIENTO (5 Hojas)
    // =========================================================================
    [
        'id' => 'hoja-05',
        'numero' => 5,
        'categoria_id' => 'posibilidad',
        'categoria_nombre' => 'Posibilidad del Conocimiento',
        'postura' => 'Dogmatismo',
        'icono' => '⚙️',
        'color' => '#fbbf24',
        'bg_soft' => 'rgba(251, 191, 36, 0.16)',
        'idea_clave' => 'Confianza total e incuestionada en las reglas o en el sistema.',
        'metrica_destacada' => '+22% Velocidad en Rutinas',
        'revista_fuente' => 'Computers in Human Behavior (2023)',
        'titulo_investigacion' => 'Sesgo de Automatización y Confianza Ciega en la Gestión Algorítmica',
        'resumen_investigacion' => 'Seguir sin cuestionar las órdenes de la IA acelera un 22% las tareas rutinarias seguras, pero hace que el 68% de los supervisores obedezcan a la máquina incluso cuando esta se equivoca.',
        'variable_filosofica' => 'Aceptación incuestionada del sistema (Dogmatismo vs. Agencia).',
        'variable_empresarial' => 'Estandarización operativa y prevención de errores humanos.',
        'tipo_trabajadores' => 'Supervisores de logística automatizada y operadores de almacén (210 trabajadores).',
        'descripcion_estrategia' => 'Estrategia "Estandarización Consciente": Usar reglas fijas automáticas solo en tareas simples y entrenar a los trabajadores con simulacros de error para que no obedezcan a ciegas.',
        'duracion' => '4 meses (1 clasificación de tareas, 2 entrenamiento, 1 control).',
        'aporte' => 'Delimita dónde sirve obedecer protocolos estrictos (seguridad básica) y dónde es peligroso confiar ciegamente en la IA.',
        'como_lo_aplicaria' => 'Dejaría automatizados los respaldos e inventarios rutinarios, pero añadiría un botón de "Reportar fallo de IA" con bonificaciones para quien detecte errores del sistema.'
    ],
    [
        'id' => 'hoja-06',
        'numero' => 6,
        'categoria_id' => 'posibilidad',
        'categoria_nombre' => 'Posibilidad del Conocimiento',
        'postura' => 'Escepticismo',
        'icono' => '🔍',
        'color' => '#f87171',
        'bg_soft' => 'rgba(248, 113, 113, 0.16)',
        'idea_clave' => 'Duda metódica: no dar nada por verdadero sin verificarlo antes.',
        'metrica_destacada' => '-79% Errores por Alucinación',
        'revista_fuente' => 'IEEE Transactions on Engineering Management (2024)',
        'titulo_investigacion' => 'Duda Metódica y "Red Teaming" contra Alucinaciones de IA',
        'resumen_investigacion' => 'Los equipos de ingeniería que aplican el escepticismo metódico (cuestionar y verificar cada respuesta de la IA generativa) reducen un 79% las fallas de código y errores técnicos.',
        'variable_filosofica' => 'Suspensión del juicio (epojé) y verificación rigurosa.',
        'variable_empresarial' => 'Control de calidad (QA), ciberseguridad y pensamiento crítico.',
        'tipo_trabajadores' => 'Ingenieros de calidad (QA), auditores de seguridad y programadores (180 profesionales).',
        'descripcion_estrategia' => 'Estrategia "Auditor Escéptico (Abogado del Diablo)": En cada proyecto se rota a un integrante cuya misión oficial es dudar y poner a prueba las respuestas de la IA.',
        'duracion' => '3 meses (implementado en sprints quincenales ágiles).',
        'aporte' => 'Convierte la duda filosófica en un escudo práctico contra las "alucinaciones" tecnológicas y el conformismo grupal.',
        'como_lo_aplicaria' => 'Antes de aprobar cualquier informe o código generado con IA en la empresa, exigiría pasar por un checklist de doble verificación humana.'
    ],
    [
        'id' => 'hoja-07',
        'numero' => 7,
        'categoria_id' => 'posibilidad',
        'categoria_nombre' => 'Posibilidad del Conocimiento',
        'postura' => 'Subjetivismo',
        'icono' => '🎨',
        'color' => '#c084fc',
        'bg_soft' => 'rgba(192, 132, 252, 0.16)',
        'idea_clave' => 'La verdad y el valor dependen de la perspectiva y vivencia de cada persona.',
        'metrica_destacada' => '+44% Satisfacción Laboral',
        'revista_fuente' => 'Journal of Organizational Behavior (2024)',
        'titulo_investigacion' => 'Personalización de Asistentes de IA según la Psicología del Trabajador',
        'resumen_investigacion' => 'Una misma IA es vista como ayuda por unos y como amenaza por otros. Permitir que cada trabajador personalice cómo interactúa con la IA según su estilo eleva 44% la satisfacción.',
        'variable_filosofica' => 'Perspectivismo y vivencia subjetiva del sujeto.',
        'variable_empresarial' => 'Compromiso laboral (Engagement) y adaptación al cambio.',
        'tipo_trabajadores' => 'Diseñadores UX, creativos, analistas y administrativos de 4 generaciones (310 empleados).',
        'descripcion_estrategia' => 'Estrategia "Job Crafting Subjetivo": Talleres donde cada empleado adapta sus herramientas digitales a su propio estilo de aprendizaje, ritmo y valores personales.',
        'duracion' => '6 meses (2 diagnóstico personal, 2 configuración, 2 seguimiento).',
        'aporte' => 'Humaniza la tecnología reconociendo que no todos los cerebros ni todas las generaciones trabajan igual.',
        'como_lo_aplicaria' => 'Permitiría que cada empleado configure su asistente de IA en 3 modos a elección: "Silencioso bajo demanda", "Paso a paso guiado" o "Creativo conversacional".'
    ],
    [
        'id' => 'hoja-08',
        'numero' => 8,
        'categoria_id' => 'posibilidad',
        'categoria_nombre' => 'Posibilidad del Conocimiento',
        'postura' => 'Realismo',
        'icono' => '🏭',
        'color' => '#22d3ee',
        'bg_soft' => 'rgba(34, 211, 238, 0.16)',
        'idea_clave' => 'Los modelos deben reflejar fielmente la realidad física y biológica.',
        'metrica_destacada' => '-38% Lesiones y Fatiga Física',
        'revista_fuente' => 'Applied Ergonomics / Int. Journal of Production Research (2024)',
        'titulo_investigacion' => 'Gemelos Digitales y Ergonomía Realista en Plantas Industriales',
        'resumen_investigacion' => 'Mediante Gemelos Digitales conectados a sensores reales de temperatura, ruido y esfuerzo físico, se ajustan las metas de producción a la capacidad biológica real del trabajador.',
        'variable_filosofica' => 'Correspondencia objetiva con la realidad material.',
        'variable_empresarial' => 'Salud ocupacional, ergonomía y capacidad instalada real.',
        'tipo_trabajadores' => 'Operarios de manufactura, ingenieros industriales y supervisores (260 trabajadores).',
        'descripcion_estrategia' => 'Estrategia "Gemelo Realista": Alinear las metas gerenciales con los tiempos físicos reales de operación y descanso humano, evitando metas imposibles.',
        'duracion' => '10 meses (3 medición física, 4 simulación realista, 3 rediseño).',
        'aporte' => 'Evita el "autoengaño directivo" de exigir en papel metas que superan los límites físicos y humanos de la planta.',
        'como_lo_aplicaria' => 'Vincularía el planificador de entregas con la capacidad real de horas disponibles (descontando pausas, reuniones y mantenimiento real) para fijar fechas cumplibles.'
    ],
    [
        'id' => 'hoja-09',
        'numero' => 9,
        'categoria_id' => 'posibilidad',
        'categoria_nombre' => 'Posibilidad del Conocimiento',
        'postura' => 'Criticismo',
        'icono' => '🏛️',
        'color' => '#fb7185',
        'bg_soft' => 'rgba(251, 113, 133, 0.16)',
        'idea_clave' => 'Síntesis kantiana: usar el conocimiento pero auditando siempre sus límites.',
        'metrica_destacada' => '100% IA Auditada con Ética',
        'revista_fuente' => 'Academy of Management Perspectives (2024)',
        'titulo_investigacion' => 'Gobernanza Crítica Reflexiva: Límites entre IA y Juicio Humano',
        'resumen_investigacion' => 'Estudio en 18 empresas demuestra que el mejor rendimiento se logra cuando un Comité Crítico define qué tareas puede hacer la IA y cuáles exigen empatía y ética exclusivamente humanas.',
        'variable_filosofica' => 'Examen reflexivo de alcances y límites del conocimiento.',
        'variable_empresarial' => 'Gobernanza ética de IA, liderazgo humanista y sostenibilidad.',
        'tipo_trabajadores' => 'Comités mixtos: psicólogos laborales, ingenieros de IA, directivos y trabajadores (18 empresas).',
        'descripcion_estrategia' => 'Estrategia "Frontera Crítica Humano-IA": Auditar cada tecnología preguntando: ¿Qué sabe realmente este algoritmo?, ¿Dónde falla? y ¿Cómo protege la dignidad del trabajador?',
        'duracion' => '12 meses (Programa anual con auditorías trimestrales).',
        'aporte' => 'Une lo mejor de la ciencia de datos con la prudencia ética, garantizando que la IA nunca reemplace el juicio moral humano.',
        'como_lo_aplicaria' => 'Crearía un sello interno de "IA Auditada" donde toda herramienta automatizada tenga siempre un canal de revisión humana para cualquier trabajador afectado.'
    ]
];

// =============================================================================
// PUNTO 7: CINCO (5) ESTRATEGIAS DE DESARROLLO ORGANIZACIONAL (RESUMIDAS Y VISUALES)
// =============================================================================
$estrategiasDO = [
    [
        'numero' => 1,
        'icono' => '🧩',
        'nombre' => 'Cerebro Bimodal: Reglas Claras + Datos Reales',
        'postulados' => ['Racionalismo', 'Empirismo'],
        'foco' => 'Diseño de Procesos y Prevención del Desgaste',
        'resumen' => 'Combina la planificación lógica de cargas de trabajo (Racionalismo) con termómetros semanales de bienestar en tiempo real (Empirismo).',
        'pasos' => ['Definir reglas lógicas de máximo de proyectos por persona.', 'Medir el clima cada viernes con 3 preguntas rápidas.', 'Ajustar metas según la evidencia real.'],
        'kpi' => '-30% sobrecarga laboral y +25% claridad de rol.',
        'duracion' => '6 meses'
    ],
    [
        'numero' => 2,
        'icono' => '🎓',
        'nombre' => 'Academia Viva de Sabiduría Práctica',
        'postulados' => ['Intelectualismo', 'Realismo'],
        'foco' => 'Gestión del Conocimiento y Capacitación Rápida',
        'resumen' => 'Captura experiencias reales de planta (Realismo) y usa IA para resumirlas en principios prácticos que aceleran el aprendizaje de nuevos talentos (Intelectualismo).',
        'pasos' => ['Grabar cómo los expertos resuelven fallas reales en terreno.', 'Usar IA para extraer las "reglas de oro" de cada caso.', 'Entrenar a los nuevos ingresos con simulaciones reales.'],
        'kpi' => '-45% tiempo de adaptación de nuevos empleados.',
        'duracion' => '8 meses'
    ],
    [
        'numero' => 3,
        'icono' => '🛡️',
        'nombre' => 'Talento Justo y Trabajo a Medida',
        'postulados' => ['Apriorismo', 'Subjetivismo'],
        'foco' => 'Selección Equitativa, Motivación y Job Crafting',
        'resumen' => 'Garantiza cero discriminación mediante candados éticos previos (Apriorismo) y permite a cada empleado adaptar la IA a su estilo personal (Subjetivismo).',
        'pasos' => ['Activar currículum ciego en algoritmos de RR.HH.', 'Realizar talleres para que cada persona configure su copiloto de IA.', 'Evaluar por objetivos claros y sentido del trabajo.'],
        'kpi' => '+40% percepción de justicia y +35 puntos en motivación (eNPS).',
        'duracion' => '6 meses'
    ],
    [
        'numero' => 4,
        'icono' => '🚨',
        'nombre' => 'Escudo de Alta Confiabilidad y Duda Metódica',
        'postulados' => ['Dogmatismo', 'Escepticismo'],
        'foco' => 'Control de Calidad (QA) y Seguridad Psicológica',
        'resumen' => 'Cumple al 100% los protocolos básicos de seguridad (Dogmatismo normativo), pero aplica auditoría escéptica obligatoria a las predicciones complejas de la IA (Escepticismo).',
        'pasos' => ['Automatizar checklists rutinarios de seguridad.', 'Asignar el rol rotativo de "Abogado del Diablo" en cada proyecto.', 'Premiar a quienes detecten alucinaciones o fallos de la IA.'],
        'kpi' => '-79% errores técnicos por confiar a ciegas en la IA.',
        'duracion' => '4 meses'
    ],
    [
        'numero' => 5,
        'icono' => '🧭',
        'nombre' => 'Consejo de Gobernanza Crítica Humano-IA',
        'postulados' => ['Criticismo'],
        'foco' => 'Liderazgo Ético y Transformación Cultural',
        'resumen' => 'Un comité mixto (Ingeniería + Psicología + Trabajadores) evalúa los límites de cada tecnología para asegurar que la IA potencie al humano sin reemplazar su dignidad (Criticismo).',
        'pasos' => ['Crear el Comité Tripartito de Ética y Productividad.', 'Definir qué decisiones nunca puede tomar un algoritmo solo.', 'Publicar un balance semestral de bienestar y tecnología.'],
        'kpi' => '100% de sistemas auditados y -50% ansiedad tecnológica.',
        'duracion' => '12 meses'
    ]
];
