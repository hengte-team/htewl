<?php $this->load->view('m/layout/header') ?>
<header class="process-header am-cf">
	<div class="return am-fl">
		<a href="javascript:history.back();">
			<i class="iconfont icon-fanhui"></i>
		</a>
	</div>
	<div class="title am-fl">提现</div>
	<div class="more am-fl">
		<a href="<?php echo site_url('m/account/withdrawRecord'); ?>">
			提现记录
		</a>
	</div>
</header>
<form method="post" id="withdraw-form">
	<section class="full-text widthMax">
		<input type="hidden" name="user_bank_id" value="<?php echo $userBank[0]->user_bank_id; ?>" >
		<ul>
			<li>
				<h6>提现金额</h6>
				<div class="full-input flex-1">
					<input type="tel" name="amount" autocomplete="off"  placeholder="请输入转出金额">
				</div>
			</li>
		</ul>
		<p class="full-log">可提现余额：<span id="amount-quote" ><?php echo $userAccount->amount_carry; ?></span>元</p>
		<dl class="full-payoff">
			<dt>请选择银行卡</dt>
			<dd class="flex" data-am-modal="{target: '#bank-list'}">
				<img id="bank-img" src="<?php echo 'htewl/m/images/bank68/bank-1.png'; ?>">
				<div class="flex flex-1">
					<div class="payoff-text flex-1">
						<h5 id="bank-name"><?php echo $userBank[0]->bank_name ?></h5>
						<p id="tail-number">尾号<?php echo substr($userBank[0]->bank_card, -4); ?></p>
					</div>
					<i class="cash-icon icon-youjiantou iconfont"></i>
				</div>
			</dd>
		</dl>
		<div class="full-arrive flex">
			<div class="flex-1">到账时间</div>
			<div>2个工作日</div>
		</div>
		<div class="full-submit">
			<button type="button" id="withdraw-button" >确认转出</button>
		</div>
	</section>
	<div class="alert-pay am-modal" tabindex="-1" id="payment-password">
	  	<h4 class="flex">
	  		<p class="flex-1">请输入密码</p>
	  		<a href="<?php echo site_url('m/safetycenter/selectLoginStrategy'); ?>">忘记密码</a>
	  	</h4>
	  	<div class="alert-text">
	  		<input type="password" name="payment_password" placeholder="请输入支付密码">
	  		<div class="alert-close flex">
	  			<div class="alert-lefe">
	  				<a href="javascript:void(0)" data-am-modal-close>取消</a>
	  			</div>
	  			<div class="alert-right">
	  				 <button type="button" id="payment-password-button" >确认转出</button>
	  			</div>
	  		</div>
	  	</div>
	</div>
</form>

<?php if ( count($userBank) > 1 ) : ?>
<div class="am-modal-actions" id="bank-list">
	<div class="bank-head flex">
		<i class="iconfont" data-am-modal-close>&#xe62f;</i>
		<p class="flex-1">选择银行卡</p>
	</div>
	<div class="bank-choose">
		<div class="scroller">
			<ul class="bank-tion">
				<?php foreach( $userBank as $key => $value ) : ?>
				<li <?php echo $key == 0 ? 'class="active"' : ''; ?> data-bank-name="<?php echo $value->bank_name; ?>" data-bank-id="<?php echo $value->user_bank_id; ?>" data-bank-number="<?php echo '尾号', substr($value->bank_card, -4); ?>" >
					<img src="<?php echo 'images/bank68/bank-', $value->bank_id, '.png'; ?>" >
					<p class="flex-1"><?php echo $value->bank_name , '(尾号' , substr($value->bank_card, -4) , ')'; ?></p>
					<i class="iconfont">&#xe62b;</i>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
	<a href="<?php echo site_url('home/card/bindBankCard'); ?>" class="bank-add">
		<i class="iconfont">&#xe633;</i>添加银行卡
	</a>
</div>
<?php endif; ?>
<?php $this->load->view('m/layout/footer'); ?>