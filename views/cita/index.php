<h1 class="nombre-pagina">Bienvenido a Unlockopia</h1>
<p class="descripcion-pagina">Eliga tus juegos :D</p>

<?php
include_once __DIR__ . '/../templates/barra.php';
?>

<div id="app">
    <nav class="tabs">
        <button class="actual" type="button" data-paso="1">Juegos</button>
        <button type="button" data-paso="2">Información</button>
        <button type="button" data-paso="3">Resumen</button>
    </nav>

    <div id="paso-1" class="seccion">
        <h2>Servicios</h2>
        <p class="text-center">Elige tus juegos a continuación</p>
        <div id="servicios" class="listado-servicios"></div>
    </div>
    <div id="paso-2" class="seccion">
        <h2>Tus Datos y Cita</h2>
        <p class="text-center">Coloca tus datos y contacto</p>

        <form class="formulario">
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input id="nombre" type="text" placeholder="Tu Nombre" value="<?php echo $nombre; ?>" disabled />
            </div>

            <div class="campo">
                <label for="correo">Correo de contacto</label>
                <input id="correo" type="email" placeholder="Tu Correo" />
            </div>

            <div class="campo">
                <label for="telefono">Número de contacto</label>
                <input id="telefono" type="tel" placeholder="Tu Número de celular" />
            </div>

            <input type="hidden" id="id" value="<?php echo $id; ?>">

        </form>
    </div>
    <div id="paso-3" class="seccion contenido-resumen">
        <h2>Resumen</h2>
        <p class="text-center">Verifica que la información sea correcta</p>
    </div>

    <div class="paginacion">
        <button id="anterior" class="boton">&laquo; Anterior</button>

        <button id="siguiente" class="boton">Siguiente &raquo;</button>
    </div>
</div>

<?php
$script = "
        <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script src='build/js/app.js'></script>
    ";
?>

<!--
<div class="campo">
        <label for="telefono">Número de contacto</label>
        <div style="display: flex; align-items: center;">
            <select id="codigo-pais" style="margin-right: 5px;">
                <option value="+51">+51</option>
                <option value="+1">+1</option>
                <option value="+44">+44</option>
                <option value="+34">+34</option>
                //  Añadir más opciones según sea necesario 
            </select>
            <input id="telefono" type="tel" placeholder="Tu Número de Contacto" style="flex: 1;" />
        </div>
    </div>  -->