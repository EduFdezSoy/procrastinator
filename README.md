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
<s>3- Construir pestañas según la db</s>  
<s>3.1- Cambiar de pestañas con javascript</s>  
<s>3.2- Seleccionar pestaña con php único + AJAX (usar un id para mostrar la adecuada)</s>  
<s>4- Mostrar tareas completas (pestaña pegando a la derecha?)</s>  
<s>5- Botón y modal principal para añadir tareas</s>  
<s>5.1- Preselecionar automaticamente la tab actual en el formulario</s>  
6- Asegurar botón de <s>completar</s> y botón de deshacer  
<s>7- Una vez consigamos mostrar las tareas por pantalla añadir login y seguridad</s>  
8- PHP para <s>añadir</s> y editar tareas  
<s>9- Mostrar tareas completas</s>  
10- Pagina de administración, usuarios existentes, administrar usuarios  
   --- FIRST RELASE PLANED ---  
11- Investigar e implementar servicios de notificaciones de Firefox y Chrome  
12- Crear paginación (mostrar num de pag, botones y no mostrar si no hay mas)  
13- Implementar prioridades en las tareas  
14- Integración con yourls, pestaña y configuracion de la db y la API en la pestaña de configuración  
15- Añadir servicios de comunicación via email (tareas pendientes, semanal, mensual...) configurable  
16- Añadir calendario, check-box para mostrar/ocultar tareas + Eventos independientes a las tareas  
17- Añadir tiempo empleado en realizar una tarea  

## Base de Datos
<a href="http://imgur.com/vw60H6q"><img src="http://i.imgur.com/vw60H6q.png" title="source: imgur.com" /></a>
Esquema de la base de datos [02/03/2017]
