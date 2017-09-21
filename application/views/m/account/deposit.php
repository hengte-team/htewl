<?php $this->load->view('m/layout/header') ?>
<header class="process-header am-cf">
	<div class="return am-fl">
		<a href="javascript:history.back();">
			<i class="iconfont icon-fanhui"></i>
		</a>
	</div>
	<div class="title am-fl">账户充钻</div>
	<div class="more am-fl"></div>
</header>
<section class="full-text widthMax">
	<form action="<?php echo site_url('m/account/depositPost'); ?>" id="form-deposit" method="post" >
		<a href="javascript:;" class="bank-link flex" data-am-modal="{target: '#bank-list'}">
			<?php if(validateWeiXin()): ?>
				<input type="hidden" name="pay_bank" value="2" >
				<img src="htewl/m/images/bank68/bank-201.png">
				<p class="flex-1">微信支付</p>
				<!-- <i class="cash-icon iconfont">&#xe611;</i> -->
			<?php else : ?>
				<input type="hidden" name="pay_bank" value="1" >
				<img id="bank-img" src="htewl/m/images/bank68/bank-1.png">
				<p class="flex-1" id="bank-name">支付宝支付</p>
				<!-- <i class="cash-icon iconfont">&#xe611;</i> -->
			<?php endif; ?>
		</a>
		<ul>
			<li>
				<h6>充钻数量：</h6>
				<div class="full-input flex-1">
					<input type="text" name="amount" autocomplete="off" >
				</div>
			</li>
		</ul>
		<p class="full-public">每次最多可充钻100,000.00元 。（1钻=1元）</p>
		<div class="full-submit">
			<button type="submit">下一步</button>
		</div>
	</form>
</section>
<footer class="user-foot">
	<ul class="flex">
		<li>
			<a href="<?php echo site_url('m/home/index') ?>">
				<i class="iconfont icon-shouye"></i>
				<p>首页</p>
			</a>
		</li>
		<li class="active">
			<a href="<?php echo site_url('m/account/deposit') ?>">
				<i class="iconfont icon-chongzhi"></i>
				<p>充钻</p>
			</a>
		</li>
		<li>
			<a href="<?php echo site_url('m/group/index') ?>">
				<i class="iconfont icon-qunzu"></i>
				<p>组群</p>
			</a>
		</li>
		<li>
			<a href="<?php echo site_url('m/personal/index') ?>">
				<i class="iconfont icon-wode"></i>
				<p>我的</p>
			</a>
		</li>
	</ul>
</footer>
<?php $this->load->view('m/layout/footer'); ?>