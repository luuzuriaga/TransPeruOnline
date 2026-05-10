# 🚍 TransPerú Online — Sistema de Gestión de Pasajes

> **Plataforma web para la reserva y gestión de viajes interprovinciales de manera rápida, segura y eficiente.**

TransPerú Online es una solución integral para empresas de transporte que buscan digitalizar su proceso de venta de pasajes. Permite a los usuarios registrarse, autenticarse y buscar rutas disponibles en tiempo real.

---

## ✨ Características Principales

- **💎 Diseño Premium:** Estética moderna, profesional y orientada al lujo para una mejor experiencia de usuario.
- **🔐 Autenticación de Usuarios:** Sistema completo de registro e inicio de sesión con validación de credenciales.
- **🔍 Búsqueda Inteligente:** Buscador de pasajes por origen, destino y fecha integrado desde la Landing Page.
- **🛣️ Secciones Dedicadas:** Páginas específicas para explorar Rutas, consultar Horarios y adquirir Pasajes.
- **📱 Interfaz Responsiva:** Diseño adaptable a dispositivos móviles y escritorio utilizando CSS3 y Flexbox/Grid.
- **📂 Gestión de Base de Datos:** Estructura optimizada en MySQL para el manejo de usuarios y registros.
- **🎨 Icons & UX:** Uso de FontAwesome 6 para una navegación visual e intuitiva.

---

## 🛠️ Stack Tecnológico

- **Frontend:** HTML5, CSS3 (Vanilla), JavaScript.
- **Backend:** PHP 8.x.
- **Base de Datos:** MySQL / MariaDB.
- **Iconografía:** [FontAwesome 6](https://fontawesome.com/).

---

## 🚀 Guía de Instalación

Para ejecutar este proyecto en tu entorno local (usando XAMPP, Laragon o similar):

### 1. Requisitos Previos
- Servidor local (XAMPP, WAMP, Laragon).
- PHP 7.4 o superior.
- MySQL.

### 2. Configuración de la Base de Datos
1. Abre **phpMyAdmin**.
2. Crea una nueva base de datos llamada `TransPeruOnline`.
3. Importa el archivo `db.sql` incluido en la raíz del proyecto.

### 3. Configuración del Proyecto
1. Clona o copia los archivos en la carpeta `htdocs` de tu servidor local.
2. Edita el archivo `config.php` si necesitas cambiar las credenciales de conexión:
   ```php
   $host = "localhost";
   $user = "root";
   $pass = "";
   $db = "TransPeruOnline";
   ```

### 4. Acceso
Abre tu navegador y dirígete a:
`http://localhost/TransPeruOnline/index.html`

---

## 📂 Estructura del Proyecto

```bash
TransPeruOnline/
├── index.html       # Landing Page y Búsqueda principal
├── login.html       # Página de Iniciar Sesión
├── register.html    # Página de Registro
├── rutas.html       # Página de Rutas y Destinos
├── horarios.html    # Página de Horarios de Salida
├── pasajes.html     # Página de Búsqueda y Compra de Pasajes
├── home.html        # Dashboard de usuario
├── style.css        # Estilos generales (Diseño Moderno/Premium)
├── config.php       # Configuración de conexión DB
├── db.sql           # Script de la base de datos
├── login_usu.php    # Lógica de autenticación
└── register.php     # Lógica de registro de usuarios
```

---

## 🤝 Contribuciones

Si deseas mejorar este proyecto, siéntete libre de hacer un fork y enviar un pull request.

---

<p align="center">
  Desarrollado para el sector transporte en Perú.
</p>
