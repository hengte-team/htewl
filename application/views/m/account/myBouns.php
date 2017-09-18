<?php $this->load->view('home/layout/header') ?>
<header class="my-head flex">
	<div class="my-return">
		<a href="javascript:history.back();">
			<i class="iconfont">&#xe624;</i>
		</a>
	</div>
	<div class="my-name">
		我的金币
	</div>
</header>
<section class="bi-money widthMax">
	<img src="/wap/home/images/youbi.png">
	<h6 class="flex">
		<p>当前金币</p>
		<div class="bi-coin flex-1"><?php echo number_format($userAccount->amount_bonus); ?>金币</div>
	</h6>
	<dl>
		<dt>
			<i class="iconfont">&#xe63e;</i>
			<p>金币使用说明</p>
		</dt>
		<dd>
			<i>1</i>
			<p class="flex-1">金币为贝竹虚拟货币</p>
		</dd>
		<dd>
			<i>2</i>
			<p class="flex-1">金币可以在购买贝竹产品的时候抵掉部分货款;</p>
		</dd>
		<dd>
			<i>3</i>
			<p class="flex-1">金币为贝竹活动专用货币，最终解释权为贝竹公司所有;</p>
		</dd>
	</dl>
</section>
<?php $this->load->view('home/layout/footer'); ?>