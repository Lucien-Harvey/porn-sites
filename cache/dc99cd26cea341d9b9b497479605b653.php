        <!-- 左边 -->
        <div class="left-nav uk-float-left">
            <div class="logo">
                <a href="/">
                   <img src="<?php echo $this->value['WebLogo']; ?>" alt="<?php echo $this->value['WebTitle']; ?>">
                </a>
            </div>
            <div class="line"><hr></div>
            <div class="common-tab uk-flex">
                <a href="#" class="tab-a uk-flex-item-1" id="tab-tag">导航</a>
                <div class="tab-indicator"></div>
            </div>
            <div data-uk-accordion="{showfirst: true}">
                <div class="menu-tag" id="menu-tag">
                    <ul class="uk-nav uk-nav-side uk-nav-parent-icon " >
                        <li class="uk-parent uk-active">
                            <a href="#" class="icon uk-accordion-title"><i class="icon iconfont icon-shipin icon-video-one"></i>视频一区</a>
                            <ul class="uk-accordion-content uk-nav-sub">
                                <?php $vodtypes=(array)$this->value['数据分类'];$shuzu='1,2,3,4,5,6';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> <li><a  href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li><?php } ?>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="menu-tag" id="menu-tag">
                    <ul class="uk-nav uk-nav-side uk-nav-parent-icon ">
                        <li class="uk-parent uk-active">
                            <a href="#" class="icon uk-accordion-title"><i class="icon iconfont icon-shipin icon-video-two"></i>视频二区</a>
                            <ul class="uk-accordion-content uk-nav-sub">
                                <?php $vodtypes=(array)$this->value['数据分类'];$shuzu='7,8,9,10,11,12';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> <li><a  href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li><?php } ?>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="menu-tag" id="menu-tag">
                    <ul class="uk-nav uk-nav-side uk-nav-parent-icon " >
                        <li class="uk-parent uk-active">
                            <a href="#" class="icon uk-accordion-title"><i class="icon iconfont icon-shipin icon-video-three"></i>视频三区</a>
                            <ul class="uk-accordion-content uk-nav-sub">
                                <?php $vodtypes=(array)$this->value['数据分类'];$shuzu='13,14,15,16,17,18';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> <li><a  href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li><?php } ?>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="menu-tag" id="menu-tag">
                    <ul class="uk-nav uk-nav-side uk-nav-parent-icon " >
                        <li class="uk-parent uk-active">
                            <a href="#" class="icon uk-accordion-title"><i class="icon iconfont icon-shipin icon-video-four"></i>小说资源</a>
                            <ul class="uk-accordion-content uk-nav-sub">
                                <?php $vodtypes=(array)$this->value['数据分类'];$shuzu='19,20,21,22,23,24';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> <li><a  href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li><?php } ?>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="menu-tag" id="menu-tag">
                    <ul class="uk-nav uk-nav-side uk-nav-parent-icon " >
                        <li class="uk-parent uk-active">
                            <a href="#" class="icon uk-accordion-title"><i class="icon iconfont icon-shipin icon-video-five"></i>美图专区</a>
                            <ul class="uk-accordion-content uk-nav-sub">
                                <?php $vodtypes=(array)$this->value['数据分类'];$shuzu='25,26,27,28,29,30';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> <li><a  href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li><?php } ?>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="menu-tag" id="menu-tag">
                    <ul class="uk-nav uk-nav-side uk-nav-parent-icon " >
                        <li class="uk-parent uk-active">
                            <a href="#" class="icon uk-accordion-title"><i class="icon iconfont icon-shipin icon-video-six"></i>电台种子</a>
                            <ul class="uk-accordion-content uk-nav-sub">
                                <?php $vodtypes=(array)$this->value['数据分类'];$shuzu='31,32,33,34,35,36';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> <li><a  href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li><?php } ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- 右侧 -->
        <div class="right-content uk-float-left">
            <div class="uk-clearfix">
                <!-- 搜索 -->

                <div class="search">
                    <form  >
					
                        <input type="text" name="search" class="search-input" placeholder="请输入影片名或演员名">
                       <button><i class="icon iconfont icon-sousuo"></i></button>
                    </form>
                </div>
                <button class="icon iconfont icon-shoucang uk-float-right">Ctrl+D收藏本站</button>
                <p class="h-tip uk-float-right uk-margin-right">提示：点击查看永久收藏和无法观看电影说明</p>
            </div>
            
            <!-- 分割线 -->
            <div class="line"><hr></div>
			 <?php $AdminTop=(array)$this->value['TopWebAd'];$AdminTop_count=count($AdminTop);for ($x=0; $x<=$AdminTop_count-1; $x++) {$TopWeb=$AdminTop[$x];$TopWebUrl=$TopWeb['TopWebUrl'];$TopRemarks=$TopWeb['TopRemarks'];$TopPicUrl=$TopWeb['TopPicUrl'];$TopState=$TopWeb['TopState'];$TopPicUrlWidth=$TopWeb['TopPicUrlWidth'];$TopPicUrlHeight=$TopWeb['TopPicUrlHeight'];;?> 
				<li><a target="_blank"  href="<?php echo $TopWebUrl?>" ><img style="width:<?php echo $TopPicUrlWidth?>;height:<?php echo $TopPicUrlHeight?>;margin-bottom:2px;" src="<?php echo $TopPicUrl?>"></a></li> 
			 <?php } ?>
            <!-- 分割线 -->
            <div class="line"><hr></div>
		