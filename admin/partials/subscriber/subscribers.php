<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<script type="text/javascript">
	jQuery(document).ready(function () {
		jQuery('#datalist').DataTable( {
			"order": [[ 0, "desc" ]]
		} );
	});
</script>
<table id="datalist">
    <thead>
		<tr>
			<th><u><?php esc_attr_e("#", "wplg-sc") ?></u></th>
			<th><u><?php esc_attr_e("Email", "wplg-sc") ?></u></th>
			<th><u><?php esc_attr_e("Name", "wplg-sc") ?></u></th>
			<th><u><?php esc_attr_e("Form", "wplg-sc") ?></u></th>
			<th><u><?php esc_attr_e("Delete", "wplg-sc") ?></u></th>		
		</tr>
	</thead>
	<tbody>
		<?php
			if ($resusers) {			   
				$i=0;
				foreach ($resusers as $key => $value) {				   
				    $i++;
					$id = $value->id;					
					$email = $value->email;					
					$name = $value->name;
					$form_name = $value->form_name;
				?>
				<tr>
					<td><?php echo "$id"; ?></td>
					<td><?php echo $email; ?></td> 
					<td><?php echo $name; ?></td> 
					<td><?php echo $form_name; ?></td> 	
					<td><u><a href="admin.php?page=<?php echo WPSC_BASENAME; ?>&tool=subscribers&info=mail&did=<?php echo $id; ?>"><?php esc_attr_e("Delete", "wplg-sc") ?></a></u></td>
					
					
				</tr>
				<?php
				}
			} 
		?>
		
	</tbody>
</table>