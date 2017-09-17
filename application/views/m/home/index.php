<?php $this->load->view('layout/header');?>
<div id="top" class="home-top tophome">
	<div class="headers homehd" id="hometop">
		<div class="homez">
			<a href="<?php echo site_url('m/home/category')?>" class="h_t h_fl"></a>
			<form action="<?php echo site_url('m/home/search');?>" class="t_se home-search">
				<input type="search" class="t_sl" id="t_sl" name="keyword" placeholder="搜索商品" />
				<input class="t_sr" type="submit" value=""/>
			</form>
			<a href="<?php echo site_url('m/home/wl');?>" class="h_t h_wl">物流</a>
		</div>
	</div>
</div>
<?php $this->load->view('layout/footer');?>