<?php
$MODULE = $_SERVER["REQUEST_URI"];
$PATH_SELF = explode("/", $_SERVER["REQUEST_URI"]);
$MODULE = $PATH_SELF[sizeof($PATH_SELF) - 2];
$MODULE_FILE = $PATH_SELF[sizeof($PATH_SELF) - 1];

?>
<div class="tpl-left-nav tpl-left-nav-hover">
    <div class="tpl-left-nav-title">管理列表</div>
    <div class="tpl-left-nav-list">
        <ul class="tpl-left-nav-menu">
            <li class="tpl-left-nav-item">
                <a href="?Php=Home/index" class="nav-link active">
                    <i class="am-icon-home"></i>
                    <span>首页</span></a>
            </li>
            <li class="tpl-left-nav-item <?php echo $MODULE == 'Basic' ? 'active' : '' ?>">
                <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                    <i class="am-icon-cogs"></i>
                    <span>基本设置</span>
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right <?php echo $MODULE=='Basic'?'':'tpl-left-nav-more-ico-rotate'?>"></i>
                </a>
                <ul class="tpl-left-nav-sub-menu <?php echo $MODULE == 'Basic' ? 'active' : '' ?>">
                    <li>
                        <a href="./?Php=Home/Basic/Basicsetup"
                           class="<?php echo $MODULE_FILE == 'Basicsetup' ? 'active' : '' ?>">
                            <i class="am-icon-angle-right"></i>
                            <span>基本设置</span>
                            <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="./?Php=Home/Basic/Statistics"
                           class="<?php echo $MODULE_FILE == 'Statistics' ? 'active' : '' ?>">
                            <i class="am-icon-angle-right"></i>
                            <span>流量统计设置</span>
                            <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="tpl-left-nav-item">
                <a href="javascript:;"
                   class="nav-link tpl-left-nav-link-list <?php echo $MODULE == 'Security' ? 'active' : '' ?>">
                    <i class="am-icon-expeditedssl"></i>
                    <span>安全管理</span>
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right <?php echo $MODULE=='Security'?'':'tpl-left-nav-more-ico-rotate'?>"></i>
                </a>
                <ul class="tpl-left-nav-sub-menu <?php echo $MODULE == 'Security' ? 'active' : '' ?>">
                    <li>
                        <a href="./?Php=Home/Security/UserPass"
                           class="<?php echo $MODULE_FILE == 'UserPass' ? 'active' : '' ?>">
                            <i class="am-icon-angle-right"></i>
                            <span>登录重置</span>
                            <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="tpl-left-nav-item">
                <a href="javascript:;"
                   class="nav-link tpl-left-nav-link-list <?php echo $MODULE == 'Ad' && $MODULE_FILE != 'IeUrl' ? 'active' : '' ?>">
                    <i class="am-icon-sitemap"></i>
                    <span>广告设置</span>
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right <?php echo $MODULE == 'Ad' && $MODULE_FILE != 'IeUrl' ?'':'tpl-left-nav-more-ico-rotate'?>"></i>

                </a>
                <ul class="tpl-left-nav-sub-menu  <?php echo $MODULE == 'Ad' && $MODULE_FILE != 'IeUrl' ? 'active' : '' ?>">
                    <li>
                        <a href="./?Php=Home/Ad/Top" class="<?php echo $MODULE_FILE == 'Top' ? 'active' : '' ?>">
                            <i class="am-icon-angle-right"></i>
                            <span>头部横幅广告</span>
                            <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="./?Php=Home/Ad/Video"
                           class="<?php echo $MODULE_FILE == 'Video' ? 'active' : '' ?>">
                            <i class="am-icon-angle-right"></i>
                            <span>详情与内容横幅广告</span>
                            <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="./?Php=Home/Ad/Couplets"
                           class="<?php echo $MODULE_FILE == 'Couplets' ? 'active' : '' ?>">
                            <i class="am-icon-angle-right"></i>
                            <span>对联展现广告</span>
                            <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="./?Php=Home/Ad/Float"
                           class="<?php echo $MODULE_FILE == 'Float' ? 'active' : '' ?>">
                            <i class="am-icon-angle-right"></i>
                            <span>底部浮漂广告</span>
                            <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="./?Php=Home/Ad/AdJs"
                           class="<?php echo $MODULE_FILE == 'AdJs' ? 'active' : '' ?>">
                            <i class="am-icon-angle-right"></i>
                            <span>广告联盟JS广告</span>
                            <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                        </a>
                    </li>
                </ul>
            </li>

            <?php if (isset($plug_menu)){?>
                <li class="tpl-left-nav-item">
                    <a href="javascript:;"
                       class="nav-link tpl-left-nav-link-list <?php echo $MODULE == 'Zhanqun'  ? 'active' : '' ?>">
                        <i class="am-icon-sitemap"></i>
                        <span>扩展管理</span>
                        <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right <?php echo $MODULE == 'Zhanqun'  ?'':'tpl-left-nav-more-ico-rotate'?>"></i>
                    </a>
                    <ul class="tpl-left-nav-sub-menu  <?php echo $MODULE == 'Zhanqun'  ? 'active' : '' ?>">
                        <li>
                            <a href="./?Php=<?php echo $plug_menu[0]['plug_path']?>" class="<?php echo $MODULE_FILE == 'index' ? 'active' : '' ?>">
                                <i class="am-icon-angle-right"></i>
                                <span><?php echo $plug_menu[0]['plug_name']?></span>
                                <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php }?>

            <li class="tpl-left-nav-item">
                <a href="./?Php=Home/Ad/IeUrl"
                   class="nav-link tpl-left-nav-link-list <?php echo $MODULE_FILE == 'IeUrl' ? 'active' : '' ?>">
                    <i class="am-icon-gg"></i>
                    <span>友链管理</span>
                    <i class="tpl-left-nav-content tpl-badge-danger">友链</i></a>
            </li>
        </ul>
    </div>
</div>
