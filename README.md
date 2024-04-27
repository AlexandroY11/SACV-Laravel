Funcionalidades
Base de Datos
Utilizamos migraciones de Laravel para definir la estructura de las tablas en la base de datos.

Ademas, usamos factories y seeders para alimentar la base de datos, teniendo en cuenta la biblioteca PHP Faker, para generar datos falsos, y poder trabajar con ellos.

Puedes correr los seeders de la siguiente manera:

php artisan db:seed --class=NombreDelSeeder

-> php artisan db:seed --class=DueñoSeeder
-> php artisan db:seed --class=MascotaSeeder
-> php artisan db:seed --class=VisitaSeeder

Modelos
Se establecieron modelos para cada entidad con las relaciones adecuadas:
Mascotas pertenecen a un Dueño.
Mascotas tienen múltiples Visitas.

Controladores
Desarrollamos controladores para gestionar la lógica de las operaciones CRUD para mascotas, dueños y visitas.

Vistas
Creamos vistas utilizando Blade para permitir la interacción con la información de mascotas, dueños y detalles de visitas.

Rutas
Configuramos rutas web para cada operación CRUD.
Protegimos las rutas con el middleware auth de Laravel Breeze.
Autenticación
Implementamos Laravel Breeze para la gestión de autenticación y registro de usuarios.
Versionamiento con Git
Inicializamos un repositorio Git en el proyecto, utilizando una rama main.
Cada desarrollador trabaja en su propia rama para las nuevas funcionalidades, integrando sus cambios a main a través de pull requests.
Repositorio Remoto
Sincronizamos el proyecto con un repositorio en GitHub, configurando permisos adecuados para los colaboradores del equipo de desarrollo.
Demostración
Puedes acceder a una demostración funcional del sistema en link-a-la-demo.

¡Gracias por utilizar el Sistema de Administración de Clínicas Veterinarias (SACV)!