<?php $this->load->view('home/layout/header'); ?>
<header class="my-head flex">
	<div class="my-return"></div>
	<div class="add-name">
		充值成功
	</div>
	<div class="add-submit">
		<a href="<?php echo site_url('home/account/index'); ?>">
			完成
		</a>
	</div>
</header>
<section class="scuess-text widthMax">
	<div class="scuess-round">
		<i class="iconfont">&#xe60e;</i>
		<p>充值成功！</p>
	</div>
</section>
<?php $this->load->view('home/layout/footer'); ?>