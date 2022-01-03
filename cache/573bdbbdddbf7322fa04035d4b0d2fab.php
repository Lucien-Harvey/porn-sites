<link href="<?php echo $this->value['StylePath']; ?>/css/font-awesome.css" rel="stylesheet">
<header class="header">
			<div class="container">
				<h1 class="logo"><a href="/" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="http://www.91king.xyz/Template/020hua/images/logo.png"><span><?php 	echo  $MYSQLVOD['d_name'] ?></span></a></h1>
				<div class="sitenav">
					<ul>
						<li class="<?php echo $this->value['thisPage'] === 'index' ? 'current-menu-item' : '' ?>"><a target="_blank" href="/" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><i
								 class="fa fa-home"></i> 首页</a></li>
						<li class="<?php echo strpos($_SERVER['QUERY_STRING'],'video_list') !== false ? 'current-menu-item' : ' '; ?>"><a target="_blank" href="#"> <i class="fa fa-play-circle"></i> 视频一区 </a>
							<ul class="sub-menu">
								<?php $vodtypes=(array)$this->value['数据分类'];$shuzu='1,2,3,4,5,6';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> <li><a  href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li><?php } ?>
							</ul>
						</li>
						<li class="<?php echo strpos($_SERVER['QUERY_STRING'],'video_list') !== false ? 'current-menu-item' : ' '; ?>"><a target="_blank" href="#"> <i class="fa fa-film"></i> 视频二区 </a>
							<ul class="sub-menu">
								<?php $vodtypes=(array)$this->value['数据分类'];$shuzu='7,8,9,10,11,12';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> <li><a  href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li><?php } ?>
							</ul>
						</li>
						<li class="<?php echo strpos($_SERVER['QUERY_STRING'],'video_list') !== false ? 'current-menu-item' : ' '; ?>"><a target="_blank" href="#"> <i class="fa fa-paper-plane"></i> 视频三区 </a>
							<ul class="sub-menu">
								<?php $vodtypes=(array)$this->value['数据分类'];$shuzu='13,14,15,16,17,18';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> <li><a  href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li><?php } ?>
							</ul>
						</li>
						<li class="<?php echo strpos($_SERVER['QUERY_STRING'],'book_list') !== false ? 'current-menu-item' : ' '; ?>"><a target="_blank" href="#"> <i class="fa fa-folder-open"></i> 小说资源 </a>
							<ul class="sub-menu">
								<?php $vodtypes=(array)$this->value['数据分类'];$shuzu='19,20,21,22,23,24';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> <li><a  href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li><?php } ?>
							</ul>
						</li>
						<li class="<?php echo strpos($_SERVER['QUERY_STRING'],'pic_list') !== false ? 'current-menu-item' : ' '; ?>"><a target="_blank" href="#"> <i class="fa fa-paper-plane"></i> 美图专区 </a>
							<ul class="sub-menu">
								<?php $vodtypes=(array)$this->value['数据分类'];$shuzu='25,26,27,28,29,30';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> <li><a  href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li><?php } ?>
							</ul>
						</li>
						<li class="<?php echo strpos($_SERVER['QUERY_STRING'],'radio_list') !== false ? 'current-menu-item' : ' '; ?> <?php echo strpos($_SERVER['QUERY_STRING'],'bt_list') !== false ? 'current-menu-item' : ' '; ?>"><a target="_blank" href="#"> <i class="fa fa-paper-plane"></i> 电台种子 </a>
							<ul class="sub-menu">
								<?php $vodtypes=(array)$this->value['数据分类'];$shuzu='31,32,33,34,35,36';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> <li><a  href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li><?php } ?>
							</ul>
						</li>
						<!-- 请改为自已的或者“不写入缓存”就关闭了 （此说明内容可删除）-->
					</ul>
				</div>
				<span class="sitenav-on"><i class="fa fa-navicon"></i>
				</span> <span class="sitenav-mask"></span>
				<span class="searchstart-on"><i class="fa fa-search"></i></span> <span class="searchstart-off"><i class="fa fa-remove"></i></span>
				<form onsubmit="return checkSearchForm()" name="searchform" id="searchform" class="searchform">
					<button tabindex="3" class="sbtn" type="submit"><i class="fa fa-search"></i></button>
					<input tabindex="2" class="sinput" name="search" type="text" placeholder="输入关键字" value="">
				</form>
			</div>
		</header>
		<div class="fullSlide">
			<div class="bd">
				<ul>
				<?php $AdminTop=(array)$this->value['TopWebAd'];$AdminTop_count=count($AdminTop);for ($x=0; $x<=$AdminTop_count-1; $x++) {$TopWeb=$AdminTop[$x];$TopWebUrl=$TopWeb['TopWebUrl'];$TopRemarks=$TopWeb['TopRemarks'];$TopPicUrl=$TopWeb['TopPicUrl'];$TopState=$TopWeb['TopState'];$TopPicUrlWidth=$TopWeb['TopPicUrlWidth'];$TopPicUrlHeight=$TopWeb['TopPicUrlHeight'];;?> 
				<li style="list-style: none;"><a target="_blank"  href="<?php echo $TopWebUrl?>" ><img style="width:<?php echo $TopPicUrlWidth?>;height:<?php echo $TopPicUrlHeight?>;margin-bottom:2px;" src="<?php echo $TopPicUrl?>"></a></li> 
				<?php } ?>
				</ul>
			</div>
			<div class="hd">
					<ul></ul>
				</div>
				<a class="prev" href="javascript:void(0)"></a><a class="next" href="javascript:void(0)"></a>
			</div>