<?php $this->load->view('m/layout/header') ?>
<header class="process-header am-cf">
    <div class="return am-fl">
        <a href="javascript:history.back();">
            <i class="iconfont icon-fanhui"></i>
        </a>
    </div>
    <div class="title am-fl">个人中心</div>
    <div class="more am-fl"></div>
</header>
<section class="cash-text widthMax">
    <a href="<?php echo site_url('m/account/record'); ?>" class="cash-overplus flex">
        <i class="cash-avatar iconfont icon-geren"></i>
        <div class="cash-money flex-1 flex">
            <p>漫步彼岸</p>
        </div>
        <i class="cash-icon iconfont icon-youjiantou"></i>
    </a>
</section>
<footer class="user-foot">
    <ul class="flex">
        <li>
            <a href="http://m.bzezt.com/">
                <i class="iconfont icon-shouye"></i>
                <p>首页</p>
            </a>
        </li>
        <li>
            <a href="http://m.bzezt.com/home/discountMall/protection.html">
                <i class="iconfont icon-chongzhi"></i>
                <p>充钻</p>
            </a>
        </li>
        <li>
            <a href="http://m.bzezt.com/tourism/tourismcart.html">
                <i class="iconfont icon-qunzu"></i>
                <p>组群</p>
            </a>
        </li>
        <li class="active">
            <a href="<?php echo site_url('m/personal/index') ?>">
                <i class="iconfont icon-wode"></i>
                <p>我的</p>
            </a>
        </li>
    </ul>
</footer>
<?php $this->load->view('m/layout/footer'); ?>