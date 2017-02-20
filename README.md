# Procrastinator - WORK IN PROGRESS
<b>Procrastinator</b> es una aplicación web autoalojable para gestionar listas de tareas y actividades por hacer.  
Permite llevar un registro de tareas pendientes y realizadas, con soporte multiusuario, y clasificadas según categorías que los usuarios puede crear y gestionar.  
Las tareas se pueden programar como atemporales, programadas, y como periódicas; y se pueden visualizar en formato de lista, en calendario, o como diario.  
Para el alta de nuevos usuarios únicamente se necesita la dirección de email del nuevo usuario, permitiendo así al nuevo usuario rellenar sus datos y elegir él mismo la contraseña deseada. La aplicación también inlcluye un registro de los inicios de sesión fallidos
Esta aplicación ha sido desarrollada por <a href="https://twitter.com/EduFdezSoy">EduFdezSoy</a> utilizando PHP y MySQL (del lado del servidor) además de otros lenguajes soportados por todos los navegadores modernos.

## Notas importantes
Añadir campo de prioridad a la base de datos, puede ser 0123, baja, media (por defecto, no se muestra), alta y urgente. Las urgentes se muestran en otra categoría, para enfatizar (?)

## Roadmap
1- PHP que genera un XML o JSON (por decidir) con las tareas y sus datos  
2- Usar AJAX para llamar, leer y mostrar el archivo generado anteriormente  
3- Una vez consigamos mostrar las tareas por pantalla añadir login y seguridad  
4- Añadir CSS, añadir botones y menú también  
5- PHP para añadir y editar tareas  
6- Pagina de administración, usuarios existentes, administrar usuarios  
7- Integración con yourls, pestaña y configuracion de la db y la API en la pestaña de configuración

## Base de Datos
<a href="http://imgur.com/wYUNQaf"><img src="http://i.imgur.com/wYUNQaf.png" title="source: imgur.com" /></a>
Esquema de la base de datos [20/2/2017]
