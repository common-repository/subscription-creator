<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>    
<table>
    <thead>
		<tr>
			<th><u><?php esc_attr_e("Order", "wplg-sc") ?></u></th>
			<th><u><?php esc_attr_e("Name", "wplg-sc") ?></u></th>
			<th><u><?php esc_attr_e("Shortcode", "wplg-sc") ?></u></th>                
			<th></th>
			<th></th>
			<th></th>
		</tr>
	</thead>
    <tbody>	
		<?php
			if ($resultat) {
				$i=0;
				foreach ($resultat as $key => $value) {				   
					$i++;
					$id = $value->id;
					$title = $value->title;        
				?>
				<tr>
					<td><?php echo "$i"; ?></td>
					<td><?php echo $title; ?></td>
					<td><?php echo "[Subscribtion id=$id]"; ?></td>                
					<td><u><a href="admin.php?page=<?php echo WPSC_BASENAME; ?>&tool=add&act=update&id=<?php echo $id; ?>"><?php esc_attr_e("Edit", "wplg-sc") ?></a></u></td>
					<td><u><a href="admin.php?page=<?php echo WPSC_BASENAME; ?>&info=del&did=<?php echo $id; ?>"><?php esc_attr_e("Delete", "wplg-sc") ?></a></u></td>
					<td><u><a href="admin.php?page=<?php echo WPSC_BASENAME; ?>&tool=add&act=duplicate&id=<?php echo $id; ?>"><?php esc_attr_e("Duplicate", "wplg-sc") ?></a></u></td>        
				</tr>
				<?php
				}
			}          ?>      
	</tbody>
</table>