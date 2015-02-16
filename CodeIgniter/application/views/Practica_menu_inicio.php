
<form action="<?=site_url('/Practica_Principal/inicioSesion')?>" method="post">

Nombre de Usuario <?=form_input("nombre")?><br>
Clave <?=form_input("clave")?><br>

<input type="submit" value="Enviar">
</form><br>
<a href="<?=site_url('/Practica_usuarios/creaUsuario')?>">Nuevo usuario</a>
<br>