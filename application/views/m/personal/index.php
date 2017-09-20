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
                    <i class="cash-avatar iconfont icon-geren"></i>
                    <div class="cash-money flex-1 flex">
                        <p>漫步彼岸</p>
                    </div>
                    <i class="cash-icon iconfont icon-youjiantou"></i>
                </a>
            </li>
        </ol>
        <ol class="cash-ul sep-button">
            <li>
                <a href="<?php echo site_url('m/account/index') ?>" class="flex">
                    <p class="flex-1">我的钱包</p>
                    <i class="cash-icon iconfont icon-youjiantou"></i>
                </a>
            </li>
        </ol>
        <ol class="cash-ul sep-button">
            <li>
                <a href="http://www.htewl.com/home/card/bankCard.html" class="flex">
                    <p class="flex-1">我的银行卡</p>
                    <i class="cash-icon iconfont icon-youjiantou"></i>
                </a>
            </li>
            <li>
                <a href="http://www.htewl.com/home/account/myBouns.html" class="flex">
                    <p class="flex-1">我的金币</p>
                    <i class="cash-num"><span>0</span>枚</i>
                    <i class="cash-icon iconfont icon-youjiantou"></i>
                </a>
            </li>
        </ol>
    </ul>
</section>
<footer class="user-foot">
    <ul class="flex">
        <li>
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
        <li class="active">
            <a href="<?php echo site_url('m/personal/index') ?>">
                <i class="iconfont icon-wode"></i>
                <p>我的</p>
            </a>
        </li>
    </ul>
</footer>
<?php $this->load->view('m/layout/footer'); ?>