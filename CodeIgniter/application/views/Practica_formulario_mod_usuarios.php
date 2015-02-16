<?php echo validation_errors();?>
<form action="<?=site_url('/Practica_usuarios/mod_datos')?>" method="post">
Nuevo DNI <?=form_input("dni", $infoUs[0]['dni_usu'])?><br>
Email <?=form_input("email", $infoUs[0]['email_usu'])?><br>
Nombre Real <?=form_input("nombreR", $infoUs[0]['nombre_real_usu'])?><br>
Apellidos <?=form_input("apellidos", $infoUs[0]['apellidos_usu'])?><br>
Direccion <?=form_input("dir", $infoUs[0]['direccion_usu'])?><br>
Codigo Postal <?=form_input("cp", $infoUs[0]['cp_usu'])?><br>
Provincia <select name="provincia">
<?php 
foreach ($provincias as $provincia):?>


<option value="<?=$provincia['cod']?>" <?php if ($provincia['cod'] == $infoUs[0]['cod_prov']){echo "selected";};?>><?=$provincia['nombre']?>

<?php 

endforeach;
?>

</select><br>
<input type="submit" value="Enviar">
</form><br>