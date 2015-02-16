
<div style="margin:.5em 1em; background:orange; text-align:center">
<a href="<?=site_url('/Practica_Principal/index')?>">Inicio/Destacados</a>
<?php foreach ($array as $categoria):?>

<a href="<?=site_url('/Practica_Principal/muestraCat/' . $categoria['idCat'] . '/')?>"><?=$categoria['nombre_cat']?> </a>
<?php 
endforeach;
?>

</div>
<?php 
