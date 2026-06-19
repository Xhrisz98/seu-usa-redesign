# SEU-USA — MOCKUP & DESIGN RESTRUCTURING ANALYSIS
Este documento técnico sirve como la referencia maestra absoluta para la reestructuración y desarrollo modular del nuevo sitio web de **Sunshine Enterprise USA (SEU-USA)**. 

---

## 1. IDENTIDAD DE MARCA Y RECURSOS GRÁFICOS
*   **Nombre de la Empresa:** Sunshine Enterprise USA (SEU-USA)
*   **Slogan Principal:** "Building Futures, Connecting Talent. Your Success is Our Mission."
*   **Ubicación Principal (HQ):** 500 Winderley Place, Suite 218, Maitland, FL 32751
*   **Teléfono de Contacto:** (407)-636-2982
*   **Email de Contacto:** jobs@seu-usa.com
*   **Logo Oficial:** `https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img/http://seu-usa.com/wp-content/uploads/2025/07/logo.avif`

---

## 2. SISTEMA DE DISEÑO (TOKENS)
Toda la interfaz debe ser desarrollada con un enfoque de **editorial premium, limpio y de alta gama**, utilizando el siguiente sistema de diseño:

### A. Paleta de Colores (Tokens de Color)
*   `color-bg-primary`: `#ffffff` (Blanco puro para secciones principales)
*   `color-bg-secondary`: `#f8fafc` (Slate-50 para fondos y secciones alternas)
*   `color-bg-dark`: `#0f172a` (Slate-900 / Slate-950 para elementos oscuros selectos)
*   `color-text-primary`: `#0f172a` (Slate-950 para títulos principales de alta jerarquía)
*   `color-text-secondary`: `#475569` (Slate-600 para textos corporativos y descripciones)
*   `color-accent`: `#f59e0b` (Amber-500 para interacciones clave, marcas de verificación y estados activos)
*   `color-accent-dark`: `#d97706` (Amber-600 para hovers en botones)
*   `color-border`: `#e2e8f0` (Slate-200 para separadores sutiles y tarjetas)

### B. Tipografía y Estructura Visual
*   **Fuente Principal:** `Outfit` (Google Fonts).
*   **Botones (CTAs):** Estilo **Pill (píldora)** totalmente redondeados (`rounded-full`) con micro-interacciones de escalado sutil (`hover:scale-105 transition-all`).
*   **Tarjetas (Cards):** Diseño asimétrico con bordes muy redondeados (`rounded-3xl`), sombras orgánicas y sutiles (`shadow-sm`, `hover:shadow-md transition-all`), sin líneas pesadas.
*   **Iconografía:** Prohibido el uso de emojis. Se emplearán únicamente iconos SVG integrados (inline) de línea fina (Grosor: 2px).

---

## 3. MAPEO ESTRUCTURAL DE PÁGINAS Y COMPONENTES

### HOME (Página de Inicio — Nueva Propuesta Editorial)
La página principal debe estructurarse en las siguientes secciones lógicas consecutivas:

1.  **Top Utility Bar (Barra de Utilidad):**
    *   Fondo oscuro (`slate-950`).
    *   Datos de contacto directos: Teléfono, Correo, ubicación e indicador de cumplimiento "E-Verify System Active".
2.  **Navigation Header (Cabecera de Navegación):**
    *   Sticky (fijado), fondo blanco con opacidad/blur sutil (`backdrop-blur-md bg-white/90`).
    *   Logo oficial a la izquierda.
    *   Menú centrado con estados activos (`Home`, `About`, `Solutions`, `Sectors`, `Contact`).
    *   Botón en píldora a la derecha: "Consult an Agent" (Estilo Slate-900).
3.  **Hero Section (Diseño Dividido Asimétrico):**
    *   **Columna Izquierda:** Título editorial "Connecting Great Companies with Great People." con acentos en degradado ámbar. Subtítulo con el valor de empresa familiar y botones duales en píldora ("Hire Skilled Talent" y "Apply for Jobs").
    *   **Columna Derecha:** Cuadrícula de fotos reales de Unsplash y una tarjeta con la métrica flotante de cumplimiento "100% E-Verify Clearances".
4.  **The SEU Advantage (Propuesta de Valor):**
    *   Mapeo de reducción de riesgos para empresas: Alivio Administrativo, Cultura de Seguridad, E-Verify, y Despliegue Flexible.
5.  **Specialized Practice Groups (Sectores Editoriales):**
    *   Estructura de 4 columnas de tarjetas. Cada una debe incluir una imagen real de Unsplash relacionada al sector y un tag de cumplimiento:
        *   *Construction & Trades:* Imagen de obra en construcción. Tag: "OSHA Monitored".
        *   *Information Technology:* Imagen de ingenieros en sistemas. Tag: "Pre-Screened".
        *   *Accounting & Admin:* Imagen de oficina ejecutiva. Tag: "Background Checked".
        *   *Government & Education:* Imagen de sala de juntas institucional. Tag: "E-Verify Approved".
6.  **Maitland HQ Consultation (Formulario y Ubicación):**
    *   Estructura integrada en bloque oscuro (`slate-950`).
    *   **Izquierda:** Dirección física de Maitland, teléfono y propuesta de valor de los fundadores.
    *   **Derecha:** Formulario de solicitud de personal B2B corporativo (Nombre, Email, volumen de personal, sector e instrucciones de reclutamiento).
7.  **Light Premium Footer (Pie de Página):**
    *   Fondo limpio blanco, 4 columnas con enlaces organizados, marcas de cumplimiento de estado de Florida, políticas de empleo y copyright.

---

## 4. BANCO DE IMÁGENES DE EJEMPLO (URLs Reales de Unsplash)
Estas imágenes deben usarse de forma consistente en todo el sitio para asegurar la fidelidad visual:
*   **Hero - Reunión Profesional:** `https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=500&q=80`
*   **Construcción y Trades:** `https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=400&q=80`
*   **Information Technology (IT):** `https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=400&q=80`
*   **Oficina, Finanzas y Administración:** `https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=400&q=80`
*   **Gobierno y Entidades Públicas:** `https://images.unsplash.com/photo-1541872703-74c5e44368f9?auto=format&fit=crop&w=400&q=80`

---

## 5. REGLAS DE DESARROLLO PARA EL AGENTE DE CONSOLA (AGY)
*   **Modularidad:** Lee la estructura actual de `seu-usa.com` y asimila los textos corporativos de sus fundadores (Sam Faragalla y Rania Hanna), incorporándolos con estilo premium en las propuestas.
*   **Responsividad:** Todos los contenedores de tarjetas e imágenes deben transicionar de `grid-cols-1` en dispositivos móviles a `md:grid-cols-2` y `lg:grid-cols-4` en pantallas de escritorio.
*   **Validaciones:** El formulario de consulta debe incluir requerimientos interactivos en los campos antes del envío.

## 6. ARQUITECTURA DE ARCHIVOS EN LARAVEL (PHP)
Para la implementación en Laravel, el desarrollo se dividirá en componentes modulares utilizando el motor de plantillas Blade:

*   **Layout Maestro:** `resources/views/layouts/app.blade.php` (Contiene la estructura base HTML, etiquetas meta, importación de fuentes, llamadas a Vite `@vite(['resources/css/app.css', 'resources/js/app.js'])` u hojas de estilo, y la directiva `@yield('content')` o `{{ $slot }}`).
*   **Componentes Reutilizables:**
    *   Navbar: `resources/views/components/navbar.blade.php`
    *   Footer: `resources/views/components/footer.blade.php`
*   **Vistas Individuales (Blade):**
    *   Home: `resources/views/home.blade.php` (Extiende el layout app y renderiza el contenido específico).
    *   About Us: `resources/views/about.blade.php`
    *   Services: `resources/views/services.blade.php`
    *   Industries: `resources/views/industries.blade.php`
    *   Contact: `resources/views/contact.blade.php`
*   **Rutas del Sistema:** `routes/web.php` (Definición de rutas GET para cada vista).
*   **Controlador de Páginas (Opcional/Recomendado):** `app/Http/Controllers/PageController.php`