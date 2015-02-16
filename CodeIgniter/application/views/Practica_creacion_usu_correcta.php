<p>La creacion del usuario a tenido exito</p>
<a href="<?=site_url('/Practica_Principal/ir_carro')?>">Ir al carro</a>
<a href="<?=site_url('/Practica_Principal')?>">Continuar comprando</a>
<?php 
 if ($this->session->userdata('dentro') == true)
 {?>
 	<a href="<?=site_url('/Practica_Principal/resumen_productos')?>">Ir al resumen de precompra</a>
<?php  }