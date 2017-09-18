<?php $this->load->view('home/layout/header') ?>
<header class="my-head flex">
	<div class="my-return"></div>
	<div class="add-name">
		充值失败
	</div>
	<div class="add-submit">
		<a href="<?php echo site_url('home/account/index'); ?>">
			重新充值
		</a>
	</div>
</header>
<section class="scuess-text widthMax">
	<div class="scuess-round">
		<i class="scuess-false iconfont">&#xe60f;</i>
		<p>充值失败！</p>
	</div>
</section>
<?php $this->load->view('home/layout/footer'); ?>