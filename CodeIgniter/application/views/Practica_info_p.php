

<?php 
if ($array[0]['imagen'] != null)
{
	
echo "<IMG src=\"" . $array[0]['imagen'] . "\" width=\"300px\" height=\"300px\">";

}else{

echo "<IMG src=\"http://static.trendipia.com/5/3/1/c/531c3b4000a427778f4e9a817b226aa87f82777a/producto-no-disponible1_full.jpg\" width=\"300px\" height=\"300px\">";
	
}

?>
<form action="<?=site_url('/Practica_Principal/aniade_producto/' . $array[0]['idProd'] . '/')?>" method="post">
<p>Nombre: <?=$array[0]['nombre'] ?></p>
<p>Precio: <?=$array[0]['precio_venta'] ?></p>
<p>Descuento: <?=$array[0]['descuento_apl'] ?></p>
<p>IVA: <?=$array[0]['iva'] ?></p>
<p>Descripcion: <?=$array[0]['descripcion'] ?></p>
<p>Anuncio: <?=$array[0]['anuncio'] ?></p>
<p>Cantidad Disponible: <select name="cantidad">
<?php 

for ($n = 0; $n <= $array[0]['stock_disp']; $n++)
{
	
	echo "<option value=\"$n\">$n";
	
} 


?></select></p>
     <input type="submit" value="Aniadir al carrito">
</form>