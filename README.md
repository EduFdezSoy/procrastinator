# Procrastinator - WORK IN PROGRESS
<b>Procrastinator</b> es una aplicación web autoalojable para gestionar listas de tareas y actividades por hacer.  
Permite llevar un registro de tareas pendientes y realizadas, con soporte multiusuario, y clasificadas según categorías que los usuarios puede crear y gestionar.  
Las tareas se pueden programar como atemporales, programadas, y como periódicas; y se pueden visualizar en formato de lista, en calendario, o como diario.  
Para el alta de nuevos usuarios únicamente se necesita la dirección de email del nuevo usuario, permitiendo así al nuevo usuario rellenar sus datos y elegir él mismo la contraseña deseada. La aplicación también inlcluye un registro de los inicios de sesión fallidos
Esta aplicación ha sido desarrollada por <a href="https://twitter.com/EduFdezSoy">EduFdezSoy</a> utilizando PHP y MySQL (del lado del servidor) además de otros lenguajes soportados por todos los navegadores modernos.  

## Roadmap
<s>1- PHP que genera un XML o JSON (por decidir) con las tareas y sus datos</s>  
<s>2- Usar AJAX para llamar, leer y mostrar el archivo generado anteriormente</s>  
<s>2.1- Limpiar codigo y comentar</s>  
<s>2.2- Migrado CSS actual a SCSS</s>  
3- Construir pestañas según la db  
3.1- Cambiar de pestañas con javascript  
3.2- Seleccionar pestaña con php único + AJAX (usar un id para mostrar la adecuada)  
4- Mostrar tareas completas (pestaña pegando a la derecha?)  
5- Botón y modal principal para añadir tareas  
5.1- Asegurar botón de completar y botón de deshacer  
6- Crear paginación (mostrar num de pag, botones y no mostrar si no hay mas)  
7- Una vez consigamos mostrar las tareas por pantalla añadir login y seguridad  
8- PHP para añadir y editar tareas  
9- Mostrar tareas completas  
10- Pagina de administración, usuarios existentes, administrar usuarios  
   --- FIRST RELASE PLANED ---  
11- Integración con yourls, pestaña y configuracion de la db y la API en la pestaña de configuración  
12- Investigar e implementar servicios de notificaciones de Firefox y Chrome  
13- Añadir servicios de comunicación via email (tareas pendientes, semanal, mensual...) configurable  
14- Añadir calendario, check-box para mostrar/ocultar tareas + Eventos independientes a las tareas  
15- Añadir tiempo empleado en realizar una tarea  

## Base de Datos
<a href="http://imgur.com/wYUNQaf"><img src="http://i.imgur.com/wYUNQaf.png" title="source: imgur.com" /></a>
Esquema de la base de datos [20/2/2017]
