<?php if ( $withdrawList->num_rows() > 0 ) : ?>
	<?php foreach( $withdrawList->result() as $value ) : ?>
	<li>
		<div class="flex">
			<h5 class="flex-1">
				状态：
				<span>
				<?php
                    if ($value->audit_state == 2)
                    {
                         if ($value->state == 1)
                        {
                            echo "初审失败";
                        }
                        elseif($value->state == 2)
                        {
                            echo "终审失败";
                        }
                    }
                    else
                    {
                        if ($value->state == 0)
                        {
                            echo "待初审";
                        }
                        elseif($value->state == 1)
                        {
                            echo "待终审";
                        }
                        else
                        {
                            echo "提现成功";
                        }
                    }
                    ?>
				</span>
			</h5>
			<div class="out-time"><?php echo $value->created_at; ?></div>
		</div>
		<div class="flex">
			<h5 class="flex-1">余额：<?php echo bcsub($value->amount_carry, $value->amount, 2); ?></h5>
			<div class="out-price"><?php echo '-', $value->amount; ?></div>
		</div>
	</li>
	<?php endforeach; ?>
<?php endif; ?>