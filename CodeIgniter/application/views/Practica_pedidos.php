<table><tr><td>Id</td><td>Productos</td><td>Importe Total</td><td>Estado</td><td>Opciones</td></tr>
<?php
foreach ($pedidos as $pedido):
?>

<tr><td><?=$pedido['id_pedido']?></td><td><?=$pedido['num_productos']?></td>
<td><?=$pedido['precio_total']?></td><td><?=$pedido['estado_ped']?></td>
<td><?php if ($pedido['estado_ped'] == 'p'){ ?>
  <a href="<?=site_url('/Practica_Principal/borra_pedido/' . $pedido['id_pedido'])?>">Anular pedido</a> <?php }else{echo "El pedido no se puede anular";}?>
  <a href=<?=site_url('/Practica_Principal/resumen_pedido/' . $pedido['id_pedido'])?>>Resumen pedido</a></td>

<?php 
endforeach;
?>
</table>