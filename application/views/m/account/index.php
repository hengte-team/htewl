<?php $this->load->view('m/layout/header') ?>
<header class="process-header am-cf">
	<div class="return am-fl">
		<a href="javascript:history.back();">
			<i class="iconfont icon-fanhui"></i>
		</a>
	</div>
	<div class="title am-fl">现金账户</div>
	<div class="more am-fl"></div>
</header>
<section class="cash-text widthMax">
	<a href="<?php echo site_url('home/account/record'); ?>" class="cash-overplus flex">
		<i class="cash-avatar iconfont icon-geren"></i>
		<div class="cash-money flex-1 flex">
			<p>账户余额</p>
			<i><span>￥</span><?php echo number_format($userAccount->amount_carry, 2, '.', ','); ?></i>
		</div>
		<i class="cash-icon iconfont icon-youjiantou"></i>
	</a>
	<div class="cash-option flex">
		<a href="<?php echo site_url('home/account/deposit'); ?>">充值</a>
		<a href="<?php echo site_url('home/account/withdraw'); ?>">提现</a>
	</div>
	<ul class="cash-ul">
		<li>
			<a href="<?php echo site_url('home/card/bankCard'); ?>" class="flex">
				<p class="flex-1">我的银行卡</p>
				<i class="cash-icon iconfont icon-youjiantou"></i>
			</a>
		</li>
		<li>
			<a href="<?php echo site_url('home/account/myBouns'); ?>" class="flex">
				<p class="flex-1">我的金币</p>
				<i class="cash-num"><span><?php echo ($userAccount->amount_bonus >0 ) ? number_format($userAccount->amount_bonus) : 0 ; ?></span>枚</i>
				<i class="cash-icon iconfont icon-youjiantou"></i>
			</a>
		</li>
		<li>
			<!-- <a href="<?php echo site_url('home/safetycenter/selectPaymentStrategy'); ?>" class="flex"> 支付密码-->
			<a href="<?php echo site_url('home/safetycenter/selectLoginStrategy'); ?>" class="flex">
				<p class="flex-1">支付管理</p>
				<i class="cash-icon iconfont icon-youjiantou"></i>
			</a>
		</li>
	</ul>
</section>
<?php $this->load->view('m/layout/footer'); ?>