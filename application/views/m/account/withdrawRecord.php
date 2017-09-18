<?php $this->load->view('home/layout/header') ?>
<header class="my-head my-out flex">
	<div class="my-return">
		<a href="javascript:history.go(-1);">
			<i class="iconfont">&#xe624;</i>
		</a>
	</div>
	<div class="my-name">
		提现记录
	</div>
</header>
<section class="out-money out-jilu widthMax">
	<?php if ( isset($withdrawList) && $withdrawList->num_rows() > 0 ) : ?>
		<ul id="withdraw-record-list" class="out-list">
			<?php $this->view('home/account/ajaxWithdrawRecord'); ?>
		</ul>
		<?php if ( $more ) : ?>
			<div class="sec-load am-scrollspy-init" id="load-more">
		        <i class="iconfont am-animation-spin">&#xe60b;</i>
		    </div>
		<?php else : ?>
			<div class="no-more">
				没有更多了
			</div>
		<?php endif; ?>
	<?php else : ?>
		<div class="out-no flex flex-align-center">
			<div class="out-null">
				<i class="iconfont">&#xe63f;</i>
				<p>您还没有提现记录</p>
			</div>
		</div>
	<?php endif ?>
</section>
<?php $this->load->view('home/layout/footer'); ?>