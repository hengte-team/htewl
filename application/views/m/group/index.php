<?php $this->load->view('m/layout/header') ?>
<header class="process-header am-cf">
    <div class="return am-fl">
        <a href="javascript:history.back();">
            <i class="iconfont icon-fanhui"></i>
        </a>
    </div>
    <div class="title am-fl">组群</div>
    <div class="more am-fl"></div>
</header>
组群
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
        <li class="active">
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
<?php $this->load->view('m/layout/footer'); ?>
