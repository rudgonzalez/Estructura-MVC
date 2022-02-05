<?php
    include_once ("encabezado.php");
?>
<div class="contacto">
    <div class="contacto-container">
        <h2>CONTACTO</h2>
        <form>
            <div class="user-form">
                <div class="user-data">
                    <div class="form-input">
                        Nombre completo
                        <input type="text" placeholder="Nombre y apellido">
                    </div>
                    <div class="form-input">
                        Correo electrónico
                        <input type="email" placeholder="Correo de contacto">
                    </div>
                    <div class="form-input">
                        Número
                        <input type="number" placeholder="Número de teléfono">
                    </div>
                </div>
                <div class="user-msg">
                    <div class="form-textarea">
                        Asunto
                        <textarea placeholder="Dejanos tu mensaje"></textarea>
                    </div>
                </div>
            </div>
            <div class="user-accept">
                <div class="form-checkbox">
                    <input type="checkbox"> Quiero recibir notificaciones de <b>BeReborn</b>
                </div>
                <div class="form-submit">
                    <input type="submit" value="Enviar">
                </div>
            </div>
        </form>
    </div>
</div>
<?php
    include_once ("piedepagina.php");
?>