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
## Base de datos

El proyecto utiliza PostgreSQL como sistema gestor de base de datos.

### Tablas principales

- **users:** usuarios y roles del sistema.
- **pacientes:** información de los pacientes.
- **personal_medico:** datos del personal médico.
- **citas:** programación y estado de las citas.
- **atenciones:** diagnósticos y tratamientos registrados.

### Modelos y relaciones

Se implementaron modelos Eloquent para Paciente, PersonalMedico, Cita y Atencion, con sus respectivas relaciones entre tablas.

### Factories y seeders

Para generar datos de prueba se implementaron factories y seeders.

Ejecutar:

```bash
php artisan migrate:fresh --seed
```

**Importante:** este comando elimina las tablas y los datos existentes antes de volver a crearlos.

Datos generados:

- 3 usuarios con diferentes roles.
- 6 registros de personal médico.
- 40 pacientes.
- 100 citas médicas.

### Usuarios de prueba

| Rol | Correo | Contraseña |
|---|---|---|
| Administrador | admin@posta.test | password |
| Personal médico | medico@posta.test | password |
| Recepción | recepcion@posta.test | password |

Estas credenciales son únicamente para el entorno local de desarrollo.

### Restricciones de base de datos verificadas

- DNI de pacientes único.
- Sexo del paciente limitado a M o F.
- No se permite eliminar pacientes que tengan citas relacionadas.
- Cada atención está relacionada con una cita.
- Las restricciones de integridad impiden registrar valores no permitidos.