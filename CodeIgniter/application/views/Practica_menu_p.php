

<?php
echo $this->pagination->create_links();

foreach ($array as $destaca):
	
echo "<div>"; 

if ($destaca['imagen'] != null)
{
	
	echo "<IMG src=\"" . $destaca['imagen'] . "\" width=\"100px\" height=\"100px\">";

}else{

	echo "<IMG src=\"http://static.trendipia.com/5/3/1/c/531c3b4000a427778f4e9a817b226aa87f82777a/producto-no-disponible1_full.jpg\" width=\"100px\" height=\"100px\">";
	
}
?>

	 <br> Nombre: <?=$destaca['nombre']?>
     <br>Precio: <?=$destaca['precio_venta']?>
     <br>Descripcion: <?=$destaca['descripcion']?>
     <br>Anuncio: <?=$destaca['anuncio']?>
     <br>Stock actual: <?=$destaca['stock_disp']?>
     <br><a href="<?=site_url('/Practica_Principal/info_producto/' . $destaca['idProd'] . '/')?>">Mas informacion</a></div></br>
<?php 
endforeach;


