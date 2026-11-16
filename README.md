# Sistema web de la Posta de Salud Comunitaria

Proyecto integrador de DSI406 Tecnología Backend, desarrollado con Laravel y PostgreSQL.

## Requisitos

- PHP 8.3 o superior con la extensión `pdo_pgsql`.
- Composer 2.
- PostgreSQL.
- Git.

## Instalación

1. Clonar el repositorio:

   ```bash
   git clone https://github.com/bvillafuerte251ds33-droid/posta-salud.git
   ```

2. Ingresar a la carpeta:

   ```bash
   cd posta-salud
   ```

3. Instalar las dependencias:

   ```bash
   composer install
   ```

4. Copiar el archivo de configuración:

   ```bash
   copy .env.example .env
   ```

5. Generar la clave de la aplicación:

   ```bash
   php artisan key:generate
   ```

6. Crear la base de datos `posta_salud` en PostgreSQL.

7. Configurar las credenciales de conexión a PostgreSQL en el archivo `.env`.

8. Ejecutar las migraciones:

   ```bash
   php artisan migrate
   ```

9. Iniciar el servidor:

   ```bash
   php artisan serve
   ```

10. Abrir en el navegador:

    http://127.0.0.1:8000

## Autor

**Brandon Villafuerte Pompilla**

Instituto de Educación Superior Público Túpac Amaru – Cusco

Programa de Estudios: Desarrollo de Sistemas de Información

Asignatura: DSI406 – Tecnología Backend