<div>
cabecera
<a href="<?=site_url('/Practica_Principal/ir_carro')?>">Acceder al carro</a>
<?php if ($this->session->userdata('dentro') == false){?>
<a href="<?=site_url('/Practica_Principal/inicioSesion')?>">Iniciar Sesion</a>

<?php }else{?>
	
	<p>Usuario: <?=$this->session->userdata('nombre')?></p>
	<p>ID: <?=$this->session->userdata('id')?></p>
	<a href="<?=site_url('/Practica_usuarios/cierre_sesion')?>">Cerrar sesion</a>
	<a href="<?=site_url('/Practica_usuarios/mod_datos')?>">Modificar informacion de usuario</a>	
	<a href="<?=site_url('/Practica_Principal/consulta_pedidos')?>">Mostrar pedidos</a>	
	<?php 
}?>
</div>
