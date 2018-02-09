<center><table border="1px black">
<tr>
	<td>#</td>
	<td>From</td>
	<td>To</td>
	<td>Depart</td>
	<td>Maskapai</td>
	<td>Price</td>
</tr>
<?php $no=1; foreach($rute as $r){ ?>
<tr>
	<td><?php echo $no++; ?></td>
	<td><?php echo $r->rute_from; ?></td>
	<td><?php echo $r->rute_to; ?></td>
	<td><?php echo $r->depart_at; ?></td>
	<td><?php echo $r->description; ?></td>
	<td><?php echo $r->price; ?></td>
</tr>
<?php } ?>
</table>
</center>