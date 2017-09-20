<?php $this->load->view('m/layout/header');?>
<header class="user-head">
	<ul class="flex">
		<li>
			<a href="<?php echo site_url('m/account/index') ?>">
				<i class="iconfont icon-qian"></i>
				<p>0.00</p>
			</a>
		</li>
		<li>
			<a href="http://m.bzezt.com/home/discountMall/protection.html">
				<i class="iconfont icon-duihuan"></i>
				<p>兑换</p>
			</a>
		</li>
		<li>
			<a href="<?php echo site_url('m/home/rule') ?>">
				<i class="iconfont icon-guize"></i>
				<p>规则</p>
			</a>
		</li>
	</ul>
</header>
<div class="user-content widthMax">
	<a href="http://m.bzezt.com/">
		<img src="http://www.morginan.com/data/attachment/portal/201704/06/085712i7n7tfggemnoxncu.jpg" />
	</a>
	<a href="http://m.bzezt.com/home/discountMall/protection.html">
		<img src="http://www.morginan.com/data/attachment/portal/201704/06/085712i7n7tfggemnoxncu.jpg" />
	</a>
	<a href="http://m.bzezt.com/tourism/tourismcart.html">
		<img src="http://www.morginan.com/data/attachment/portal/201704/06/085712i7n7tfggemnoxncu.jpg" />
	</a>
	<a href="http://m.bzezt.com/tourism/tourismcart.html">
		<img src="http://www.morginan.com/data/attachment/portal/201704/06/085712i7n7tfggemnoxncu.jpg" />
	</a>
</div>
<footer class="user-foot">
	<ul class="flex">
		<li class="active">
			<a href="<?php echo site_url('m/home/index') ?>">
				<i class="iconfont icon-shouye"></i>
				<p>首页</p>
			</a>
		</li>
		<li>
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
<?php $this->load->view('m/layout/footer');?>