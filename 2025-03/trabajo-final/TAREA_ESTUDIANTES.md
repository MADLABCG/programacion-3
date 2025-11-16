## Programación HTML, CSS y PHP Básico

## 📋 Descripción General

En esta tarea, deberás crear un sitio web personal utilizando HTML, CSS y PHP. El sitio debe tener una estructura modular con layout compartido, navegación funcional y múltiples páginas con estilos personalizados.

## 🎯 Objetivos de Aprendizaje

- Estructurar un proyecto web con directorios organizados
- Utilizar PHP para incluir archivos reutilizables (layout compartido)
- Crear un sistema de navegación dinámico en PHP
- Implementar hojas de estilo con CSS (Bootstrap + personalización)
- Desarrollar múltiples páginas HTML conectadas
- Pasar variables entre secciones PHP

## 📁 Estructura de Carpetas (OBLIGATORIA)

```
tu-proyecto/
├── index.php              # Página principal (Home)
├── about.php              # Página de perfil personal
├── noticias.php           # Página de noticias
├── biografias.php         # Página con biografías
├── css/
│   ├── bootstrap.css      # Framework Bootstrap
│   └── estilos.css        # Estilos personalizados
├── js/
│   └── bootstrap.js       # JavaScript de Bootstrap
├── img/                   # Carpeta de imágenes
└── layouts/
    ├── header.php         # Cabecera con etiquetas HTML
    ├── navbar.php         # Barra de navegación
    └── footer.php         # Pie de página
```

---

## 📝 Requisitos Técnicos

### 1. **Archivo: `layouts/header.php`**

- [ ] Incluir declaración DOCTYPE html con atributo lang="es"
- [ ] Meta charset UTF-8
- [ ] Meta viewport para responsive design
- [ ] Título dinámico usando variable `$titulo`
- [ ] Enlaces a hojas de estilo: bootstrap.css y estilos.css

**Ejemplo de variable a usar:**

```php
<?php echo $titulo ?? 'Mi Sitio Web'; ?>
```

### 2. **Archivo: `layouts/navbar.php`**

- [ ] Crear función `esActivo()` que reciba parámetro `$menu`
- [ ] Comparar con variable global `$pagina` para resaltar link activo
- [ ] Crear 4 links de navegación: Home, Acerca de Mí, Noticias, Biografías
- [ ] Agregar clase CSS "active" al link de la página actual
- [ ] Usar rutas relativas (./)

**Elementos a mostrar:**

```
- Nombre/Logo de institución
- Link Home (index.php)
- Link Acerca de Mí (about.php)
- Link Noticias (noticias.php)
- Link Biografías (biografias.php)
```

### 3. **Archivo: `layouts/footer.php`**

- [ ] Incluir información de derechos de autor
- [ ] Agregar año actual con PHP: `<?php echo date('Y'); ?>`
- [ ] Incluir nombres de estudiantes del grupo
- [ ] Opcional: links a redes sociales

### 4. **Archivo: `index.php` (Home)**

- [ ] Definir variables: `$titulo = "Home"` y `$pagina = "index"`
- [ ] Incluir header.php y navbar.php
- [ ] Crear sección hero/banner con:
  - Título de la institución
  - Descripción breve
  - Botón de "Conocer más"
- [ ] Mostrar al menos 3 noticias destacadas en tarjetas
- [ ] Usar clases Bootstrap: container-fluid, row-fluid, span6, thumbnail

### 5. **Archivo: `about.php`**

- [ ] Definir variables: `$titulo = "Sobre Mi"` y `$pagina = "about"`
- [ ] Incluir header.php y navbar.php
- [ ] Mostrar foto de perfil
- [ ] Sección "Datos Personales":
  - Nombre
  - Edad/Fecha de nacimiento
  - Ocupación
  - Intereses
- [ ] Sección "Datos Académicos":
  - Grado/Carrera
  - Universidad
  - Año de graduación
  - Certificaciones (si aplica)
- [ ] Aplicar estilos CSS para bordes, colores y espaciado

### 6. **Archivo: `noticias.php`**

- [ ] Definir variables: `$titulo = "Noticias"` y `$pagina = "noticias"`
- [ ] Incluir header.php y navbar.php
- [ ] Mostrar un listado de noticias (mínimo 5)
- [ ] Cada noticia debe tener:
  - Imagen destacada
  - Título
  - Fecha
  - Descripción breve
  - Link "Leer más"
- [ ] Usar estructura responsiva con Bootstrap

### 7. **Archivo: `biografias.php`**

- [ ] Definir variables: `$titulo = "Biografías"` y `$pagina = "biografias"`
- [ ] Incluir header.php y navbar.php
- [ ] Mostrar biografías de 3-4 personajes importantes
- [ ] Cada biografía debe incluir:
  - Foto
  - Nombre
  - Fecha de nacimiento/muerte
  - Logros principales
  - Descripción detallada (párrafo)
- [ ] Usar cards o tarjetas de Bootstrap

### 8. **Archivo: `css/estilos.css`**

- [ ] Estilos para clases personalizadas
- [ ] Colores: define al menos 3 colores principales
- [ ] Fuentes: define familia de fuentes
- [ ] Espaciado: padding y margin coherentes
- [ ] Estilos para:
  - `.contenedor` - contenedor principal
  - `.titulo` - títulos de secciones
  - `.datos-personales` - sección de datos
  - `.foto` - fotos de perfil
  - `.espacio-navbar` - espaciado bajo navbar fijo
  - `.espacio-footer` - espaciado superior del footer

## 🎨 Requisitos de Diseño

- [ ] Usar Bootstrap para estructura responsiva
- [ ] Colores coherentes en toda la página
- [ ] Tipografía clara y legible
- [ ] Navbar fijo en la parte superior
- [ ] Footer consistente en todas las páginas
- [ ] Imágenes de tamaño apropiado
- [ ] Espaciado y alineación uniforme

## 💻 Requisitos PHP

- [ ] Variables de página y título en cada archivo
- [ ] Función `esActivo()` en navbar.php funcional
- [ ] Inclusión correcta de archivos con `include`
- [ ] Uso de variables globales cuando sea necesario
- [ ] Operador null coalescing `??` para valores por defecto
- [ ] Función `date()` en footer

## 📌 Notas Importantes

1. **Modularidad**: Reutiliza el header, navbar y footer en todas las páginas
2. **Rutas**: Usa rutas relativas (./carpeta/archivo.php)
3. **Variables de Control**: Define `$titulo` y `$pagina` al inicio de cada página
4. **Responsividad**: Prueba en diferentes tamaños de pantalla
5. **Validación**: Verifica que no haya errores en la consola del navegador

## 🚀 Cómo Ejecutar

1. Coloca el proyecto en tu servidor web (XAMPP) "c:/xampp/htdocs/tu-proyecto"
2. Accede a: `http://127.0.0.1/tu-proyecto/index.php`
3. Navega entre páginas usando la barra de navegación
4. Verifica que todos los estilos se carguen correctamente

## 📚 Conceptos a Reforzar

- **HTML**: Estructura semántica, etiquetas de formulario
- **CSS**: Selectores, cascada, especificidad, flexbox/grid
- **PHP**: Include/require, variables globales, funciones, operadores
- **Bootstrap**: Grid system, componentes, clases utilitarias
