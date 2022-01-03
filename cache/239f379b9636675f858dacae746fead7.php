<div id="daily_login"></div>
		<div class="top-nav hidden-xs">
			<div class="container p-l-5">
				<div class="top-menu">
					<ul class="pull-left">
						<li class="top-menu-link"><a target="_blank" rel="nofollow noopener" class="recommend-link" href="www.sexporn.host">
								杏MAP</a></li>
						<li class="top-menu-link"><a target="_blank" rel="nofollow noopener" class="recommend-link" href="www.sexporn.host">
								翻墙撸</a></li>
						<li class="top-menu-link hidden-xs"><a target="_blank" rel="nofollow noopener" class="recommend-link" href="www.sexporn.host">
								色站大全</a></li>
						<li class="top-menu-link force-show-inline-block"><a target="_blank" rel="noopener" class="recommend-link force-show-inline-block"
							 href="www.sexporn.host"> AV资料库</a></li>
						<li class="top-menu-link force-show-inline-block"><a target="_blank" rel="noopener" class="recommend-link force-show-inline-block"
							 href="www.sexporn.host"> 杏色小说</a></li>
						<li class="top-menu-link force-show-inline-block"><a target="_blank" rel="nofollow noopener" class="recommend-link force-show-inline-block"
							 href="www.sexporn.host">禁漫天堂</a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		</div>

		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">

					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
						<span style="color: #456;">搜寻</span>
					</button>
					<a class="navbar-brand force-show-inline-block" href="/"><img src="<?php echo $this->value['WebLogo']; ?>" alt="<?php echo $this->value['WebTitle']; ?>"></a>


					<h1 class="page_title hidden-xs"><?php echo $this->value['WebTitle']; ?></h1>
				</div>
				<div class="navbar-collapse collapse navbar-inverse-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<ul class="search-dropdown-menu">
								<form class="form-inline" name="search">
									<div class="input-group">
										<input type="text" class="form-control ui-autocomplete-input" placeholder="搜寻全站影片" name="search" value="" autocomplete="off">
										<span class="input-group-btn">
											<button type="submit" class="btn bg-red text-wt"><i class="fas fa-search"></i></button>
										</span>
									</div>
								</form>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<nav class="visible-xs-block  mobile-nav">
			<style type="text/css">
				.d-flex li{
					display: inline-block;
					float: left;
				}
			</style>
			<ul class="list-inline d-flex" style="cursor: pointer;overflow-x: auto;white-space:nowrap; width: auto;">
				<?php if ($this->value['thisPage'] == 'index' || $this->value['thisPage'] == 'search') { ?>
				<?php $vodtypes=(array)$this->value['数据分类'];$shuzu='1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> 
				<li><a class="<?php echo $types[$x]['id'] === $this->value['typeId'] ? 'btn-s bg-red' : 'recommend-link' ?>" href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li>
				<?php } ?>
				<?php  }else{ ?>
				<li><a class="<?php echo $types[$x]['id'] === $this->value['typeId'] ? 'btn-s bg-red' : 'recommend-link' ?>" href="/">首页</a></li>
				<?php  $types = array();$vodtype=(array)$this->value['vodtype'];$pid = $vodtype[$this->value['typeId']]['type'];for($i = 0 ; $i < count($vodtype) ; $i++){if($vodtype[$i]['type'] === $pid){array_push($types,$vodtype[$i]);}}for($x=0;$x<count($types);$x++){ ?>
				<li>
					<a class="<?php echo $types[$x]['id'] === $this->value['typeId'] ? 'btn-s bg-red' : 'recommend-link' ?>" href="/?m=<?php  echo $types[$x]['type'] ?>_list*<?php  echo $types[$x]['id'] ?>*1" rel="nofollow noopener"><?php  echo $types[$x]['name'] ?></a>
				</li>
				<?php  } ?>
				<?php } ?>
			</ul>
		</nav>
		<div class="panel-recommend panel-scroll-line hidden-xs" style="background-color: #bfccd800;">
			<div class="container">
				<div class="nav-btn">
					<ul>
						<li>
							<ul class="nav-btn-right" style="cursor: pointer;">
								<li>
									<button class="btn-s <?php echo strpos($_SERVER['QUERY_STRING'],'video_list') !== false ? 'bg-red' : 'bg-maincolor'; ?> m-r-10">
										<a class="recommend-link" style="margin-left: 0px !important;" href="/?m=video_list*<?php echo rand(1,18) ?>*1">激情视频</a>
									</button>
								</li>
								<li>
									<button class="btn-s <?php echo strpos($_SERVER['QUERY_STRING'],'bt_list') !== false ? 'bg-red' : 'bg-maincolor'; ?> m-r-10">
										<a class="recommend-link" style="margin-left: 0px !important;" href="/?m=bt_list*<?php echo rand(35,36) ?>*1">种子下载</a>
									</button>
								</li>

								<li>
									<button class="btn-s <?php echo strpos($_SERVER['QUERY_STRING'],'pic_list') !== false ? 'bg-red' : 'bg-maincolor'; ?> m-r-10">
										<a class="recommend-link" style="margin-left: 0px !important;" href="/?m=pic_list*<?php echo rand(25,30) ?>*1">图片专区</a>
									</button>
								</li>
								<li>
									<button class="btn-s <?php echo strpos($_SERVER['QUERY_STRING'],'book_list') !== false ? 'bg-red' : 'bg-maincolor'; ?> m-r-10">
										<a class="recommend-link" style="margin-left: 0px !important;" href="/?m=book_list*<?php echo rand(19,24) ?>*1">小说专区</a>
									</button>
								</li>

								<li>
									<button class="btn-s <?php echo strpos($_SERVER['QUERY_STRING'],'radio_list') !== false ? 'bg-red' : 'bg-maincolor'; ?> m-r-10">
										<a class="recommend-link" style="margin-left: 0px !important;" href="/?m=radio_list*<?php echo rand(31,34) ?>*1">有声电台</a>
									</button>
								</li> 

							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<?php $AdminTop=(array)$this->value['TopWebAd'];$AdminTop_count=count($AdminTop);for ($x=0; $x<=$AdminTop_count-1; $x++) {$TopWeb=$AdminTop[$x];$TopWebUrl=$TopWeb['TopWebUrl'];$TopRemarks=$TopWeb['TopRemarks'];$TopPicUrl=$TopWeb['TopPicUrl'];$TopState=$TopWeb['TopState'];$TopPicUrlWidth=$TopWeb['TopPicUrlWidth'];$TopPicUrlHeight=$TopWeb['TopPicUrlHeight'];;?> 
			<li style="list-style: none;"><a target="_blank"  href="<?php echo $TopWebUrl?>" ><img style="width:<?php echo $TopPicUrlWidth?>;height:<?php echo $TopPicUrlHeight?>;margin-bottom:2px;" src="<?php echo $TopPicUrl?>"></a></li> 
		<?php } ?>