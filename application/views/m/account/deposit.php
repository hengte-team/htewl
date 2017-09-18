<?php $this->load->view('m/layout/header') ?>
<header class="process-header am-cf">
	<div class="return am-fl">
		<a href="javascript:history.back();">
			<i class="iconfont icon-fanhui"></i>
		</a>
	</div>
	<div class="title am-fl">账户充值</div>
	<div class="more am-fl"></div>
</header>
<section class="full-text widthMax">
	<form action="<?php echo site_url('m/account/depositPost'); ?>" id="form-deposit" method="post" >
		<a href="javascript:;" class="bank-link flex" data-am-modal="{target: '#bank-list'}">
			<?php if(validateWeiXin()): ?>
				<input type="hidden" name="pay_bank" value="201" >
				<img src="images/bank68/bank-201.png">
				<p class="flex-1">微信支付</p>
				<!-- <i class="cash-icon iconfont">&#xe611;</i> -->
			<?php else : ?>
				<input type="hidden" name="pay_bank" value="1" >
				<img id="bank-img" src="images/bank68/bank-1.png">
				<p class="flex-1" id="bank-name">支付宝支付</p>
				<!-- <i class="cash-icon iconfont">&#xe611;</i> -->
			<?php endif; ?>
		</a>
		<ul>
			<li>
				<h6>充值金额：</h6>
				<div class="full-input flex-1">
					<input type="text" name="amount" autocomplete="off" >
				</div>
			</li>
		</ul>
		<p class="full-public">每次最多可充值100,000.00元 (具体限额以银行为准)。</p>
		<div class="full-submit">
			<button type="submit">下一步</button>
		</div>
	</form>
</section>

<!-- <?php if(validateWeiXin()): ?>
<div class="am-modal-actions" id="bank-list">
	<div class="bank-head flex">
		<i class="iconfont" data-am-modal-close>&#xe62f;</i>
		<p class="flex-1">选择支付方式</p>
	</div>
	<div class="bank-choose">
		<div class="scroller">
			<ul class="bank-tion">
				<li data-deposit-method="1" class="active">
					<img src="images/bank68/bank-1.png">
					<p class="flex-1">支付宝支付</p>
                    <i class="iconfont">&#xe62b;</i>
				</li>
				<li data-deposit-method="201">
					<img src="images/bank68/bank-201.png">
					<p class="flex-1">微信支付</p>
                    <i class="iconfont">&#xe62b;</i>
				</li>
			</ul>
		</div>
	</div>
</div>
<?php endif; ?> -->

<?php //$this->load->view('m/layout/tip'); ?>
<?php $this->load->view('m/layout/footer'); ?>