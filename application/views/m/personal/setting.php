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
<section class="widthMax user-ucenter">
    <ul>
        <ol class="sep-button">
            <li>
                <a href="<?php echo site_url('m/personal/setting'); ?>" class="cash-overplus flex">
                    <p class="flex-1">头像</p>
                    <i class="cash-avatar iconfont icon-geren"></i>
                </a>
            </li>
        </ol>
        <ol class="cash-ul sep-button">
            <li>
                <a href="http://www.htewl.com/home/card/bankCard.html" class="flex">
                    <p class="flex-1">手机号</p>
                    <i class="cash-num">15827620384</i>
                    <i class="cash-icon iconfont icon-youjiantou"></i>
                </a>
            </li>
            <li>
                <a href="http://www.htewl.com/home/account/myBouns.html" class="flex">
                    <p class="flex-1">昵称</p>
                    <i class="cash-num">漫步彼岸</i>
                    <i class="cash-icon iconfont icon-youjiantou"></i>
                </a>
            </li>
            <li>
                <a href="http://www.htewl.com/home/account/myBouns.html" class="flex">
                    <p class="flex-1">性别</p>
                    <i class="cash-num">男</i>
                    <i class="cash-icon iconfont icon-youjiantou"></i>
                </a>
            </li>
        </ol>
    </ul>
</section>
<?php $this->load->view('m/layout/footer'); ?>