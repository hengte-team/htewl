<?php if ( $amountList->num_rows() > 0 ) : ?>
	<?php foreach( $amountList->result() as $value ) : ?>
	<li>
		<div class="flex">
		
			<h5 class="flex-1">
			 <?php
                $type_name = '';
                if ($value->product_type == 'hotel') {
                    $type_name = '酒店';
                } elseif ($value->product_type == 'line') {
                    $type_name = '线路';
                } elseif ($value->product_type == 'tourism') {
                    $type_name = '商品';
                } elseif ($value->product_type == 'scenic') {
                    $type_name = '景区';
                }
                echo $type_name, $levelType[$value->type];
            ?>
			</h5>
			
			<div class=" out-price">
				<?php
				if (in_array($value->type, array(PAY, CASH, DEDUCTION)) || $value->amount < 0)
				{
					echo '-', $value->amount; 
				}
				else
				{
					echo '+', $value->amount; 
				}
				?>
			</div>
		</div>
		<div class="flex">
			<h5 class="out-time"><?php echo $value->date; ?></h5>
		</div>
	</li>
	<?php endforeach; ?>
<?php endif; ?>