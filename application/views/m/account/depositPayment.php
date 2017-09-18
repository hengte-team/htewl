<?php $this->load->view('home/layout/header') ?>
<header class="my-head flex">
	<div class="my-return">
		<a href="#">
			<i class="iconfont">&#xe624;</i>
		</a>
	</div>
	<div class="add-name">
		支付订单
	</div>
	<div class="add-submit">
		<a href="#">
			限额说明
		</a>
	</div>
</header>
<section class="full-text widthMax">
	<ul class="mode-text">
		<li>
			<h6>充值金额</h6>
			<div class="full-input flex-1">
				<i>258566122</i>
			</div>
		</li>
		<li data-am-modal="{target: '#my-alert'}">
			<h6>应付金额</h6>
			<div class="full-input flex-1">
				<i>￥100.00</i>
			</div>
		</li>
	</ul>
	<a href="javascript:;" class="bank-link flex" data-am-modal="{target: '#bank-list'}">
		<img src="">
		<p class="flex-1">中国工商银行</p>
		<i class="cash-icon iconfont">&#xe611;</i>
	</a>
	<p class="full-public">每次最多可充值100,000.00元 (具体限额以银行为准)。</p>
	<div class="full-submit">
		<button type="button" data-am-modal="{target: '#pay-pass'}">确定支付</button>
	</div>
</section>

<div class="am-modal-actions" id="bank-list">
	<div class="bank-head flex">
		<i class="iconfont" data-am-modal-close>&#xe62f;</i>
		<p class="flex-1">选择支付方式</p>
	</div>
	<div class="bank-choose">
		<div class="scroller">
			<ul class="bank-tion">
				<li  class="active">
					<img src="">
					<p class="flex-1">中国工商银行</p>
					<i class="iconfont">&#xe62b;</i>
				</li>
				<li>
					<img src="">
					<p class="flex-1">中国银行</p>
					<i class="iconfont">&#xe62b;</i>
				</li>
				<li>
					<img src="">
					<p class="flex-1">中国工商银行</p>
					<i class="iconfont">&#xe62b;</i>
				</li>
				<li>
					<img src="">
					<p class="flex-1">中国银行</p>
					<i class="iconfont">&#xe62b;</i>
				</li>
				<li>
					<img src="">
					<p class="flex-1">中国工商银行</p>
					<i class="iconfont">&#xe62b;</i>
				</li>
				<li>
					<img src="">
					<p class="flex-1">中国银行</p>
					<i class="iconfont">&#xe62b;</i>
				</li>
				<li>
					<img src="">
					<p class="flex-1">中国工商银行</p>
					<i class="iconfont">&#xe62b;</i>
				</li>
				<li>
					<img src="">
					<p class="flex-1">中国银行</p>
					<i class="iconfont">&#xe62b;</i>
				</li>
			</ul>
		</div>
	</div>
</div>

<div class="am-modal-actions" id="pay-pass">
	<div class="bank-head flex">
		<i class="iconfont" data-am-modal-close>&#xe62f;</i>
		<p class="flex-1">请输入支付密码</p>
	</div>
	<div class="pass-export">
		<i>1.00元</i>
		<form action="">
			<input type="hidden" value="1.00">
			<input type="password">
			<button type="submit">确认支付</button>
		</form>
		<div class="pass-forget flex">
			<div class="flex-1"></div>
			<a href="#">忘记支付密码</a>
		</div>
	</div>
</div>

<div class="alert-explain am-modal" tabindex="-1" id="my-alert">
	<p>身份证不对</p>
	<div class="am-modal-footer">
	  <span class="am-modal-btn">我已经知道了</span>
	</div>
</div>

<script type="text/javascript">
	var IScroll = $.AMUI.iScroll;
	var myProvince = new IScroll('.bank-choose');
</script>

<?php $this->load->view('home/layout/footer'); ?>