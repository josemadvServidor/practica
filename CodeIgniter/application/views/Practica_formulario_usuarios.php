<?php 				echo validation_errors();?>
<form action="<?=site_url('/Practica_usuarios/creaUsuario')?>" method="post">
DNI <?=form_input("dni")?><br>
Nombre de Usuario <?=form_input("nombre")?><br>
Clave <?=form_input("clave")?><br>
Email <?=form_input("email")?><br>
Nombre Real <?=form_input("nombreR")?><br>
Apellidos <?=form_input("apellidos")?><br>
Direccion <?=form_input("dir")?><br>
Codigo Postal <?=form_input("cp")?><br>
Provincia <select name="provincia">

<?php 
foreach ($provincias as $provincia):?>


<option value="<?=$provincia['cod']?>"><?=$provincia['nombre']?>

<?php 

endforeach;
?>

</select><br>
<input type="submit" value="Enviar">
</form><br>