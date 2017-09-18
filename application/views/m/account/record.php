<?php $this->load->view('home/layout/header') ?>
<header class="my-head down-head my-out flex">
	<div class="my-return">
		<a href="javascript:history.go(-1);">
			<i class="iconfont">&#xe624;</i>
		</a>
	</div>
	<div class="my-name" data-am-modal="{target: '#amount-type'}">
		收支明细
	</div>
</header>
<section class="out-money out-jilu widthMax">
	<?php if ( isset($amountList) && $amountList->num_rows() > 0 ) : ?>
		<ul class="out-list" id="deposit-record-list">
			<?php $this->load->view('home/account/ajaxRecord'); ?>
		</ul>
		<div class="sec-load am-scrollspy-init <?php echo $more ? '' : 'am-hide'; ?>" id="load-more">
	        <i class="iconfont am-animation-spin">&#xe60b;</i>
	    </div>
		<div class="no-more <?php echo $more ? 'am-hide' : ''; ?>">
			没有更多了
		</div>
	<?php endif; ?>

	<div class="out-no flex flex-align-center  <?php if ( isset($amountList) && $amountList->num_rows() > 0 ){echo 'am-hide';} ?> " id="page-empty">
		<div class="out-null">
			<i class="iconfont">&#xe62c;</i>
			<p>您还没有收支记录</p>
		</div>
	</div>

	<div class="down-pull am-modal am-modal-alert" tabindex="-1" id="amount-type">
		<div class="down-wap" id="wrapper">
			<div class="down-iscoll">
			 	<ul>
			 		<li class="active" data-type="">
			 			<p class="flex-1">
			 				全部
			 			</p>
			 			<i class="iconfont">&#xe62b;</i>
			 		</li>
			 		<li data-type="disburse">
			 			<p class="flex-1">
			 				支出
			 			</p>
			 			<i class="iconfont">&#xe62b;</i>
			 		</li>
			 		<li data-type="income">
			 			<p class="flex-1">
			 				收入
			 			</p>
			 			<i class="iconfont">&#xe62b;</i>
			 		</li>
			 	</ul>
		 	</div>
	 	</div>
	</div>
</section>
<?php $this->load->view('home/layout/footer'); ?>