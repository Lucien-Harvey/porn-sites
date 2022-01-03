<div class="mobile_fix_bottom visible-xs-block show" id="footerMenu" style="z-index: 2000;">
				<ul class="list-unstyled">
					<li class="<?php echo strpos($_SERVER['QUERY_STRING'],'video_list') !== false ? 'on-this-page' : ' '; ?>">
						<a href="/?m=video_list*<?php echo rand(1,18) ?>*1">
							<img src="<?php echo $this->value['StylePath']; ?>/images/video.png" alt="" width="24px">
							<p>视频</p>
						</a>
					</li>
					<li class="<?php echo strpos($_SERVER['QUERY_STRING'],'bt_list') !== false ? 'on-this-page' : ' '; ?>">
						<a href="/?m=bt_list*<?php echo rand(35,36) ?>*1">
							<img src="<?php echo $this->value['StylePath']; ?>/images/xiazai.png" alt="" width="24px">
							<p>下载</p>
						</a>
					</li>
					<li class="<?php echo strpos($_SERVER['QUERY_STRING'],'radio_list') !== false ? 'on-this-page' : ' '; ?>">
						<a href="/?m=radio_list*<?php echo rand(31,34) ?>*1">
							<img src="<?php echo $this->value['StylePath']; ?>/images/diantaizhibo.png" alt="" width="24px">
							<p>电台</p>
						</a>
					</li>
					<li class="<?php echo strpos($_SERVER['QUERY_STRING'],'pic_list') !== false ? 'on-this-page' : ' '; ?>">
						<a href="/?m=pic_list*<?php echo rand(25,30) ?>*1">
							<img src="<?php echo $this->value['StylePath']; ?>/images/tupian.png" alt="" width="24px">
							<p>图片</p>
						</a>
					</li>
					<li class="<?php echo strpos($_SERVER['QUERY_STRING'],'book_list') !== false ? 'on-this-page' : ' '; ?>">
						<a href="/?m=book_list*<?php echo rand(19,24) ?>*1">
							<img src="<?php echo $this->value['StylePath']; ?>/images/tubiao1shuxiaoshuo.png" alt="" width="24px">
							<p>小说</p>
						</a>
					</li>
				</ul>
			</div>
<div class="footer-container">
				<div class="panel-recommend">
					<div class="container">
					</div>
				</div>
				<div class="footer-links hidden-xs">
					<div class="container">
						<div class="row">
							<div class="col-sm-3 text-wt">
								<a href="#">
									<img src="<?php echo $this->value['WebLogo']; ?>" alt="" width="40%">
								</a>
								<p><?php echo $this->value['WebDescription']; ?></p>
							</div>
							<div class="col-sm-3">
								<h4>友情链接</h4>
								<ul class="list-unstyled">
									<?php  $IeUrl=(array)$this->value['IeUrl']; $Count=Count($IeUrl); for ($x=0; $x<=$Count-1; $x++) {  $IeUrls=$IeUrl[$x];  ?>
									<li><a href="<?php 	echo  $IeUrls['IeUrlWebUrl'] ?>" rel="nofollow"><?php 	echo  $IeUrls['IeUrlName'] ?></a></li>
									<?php  } ?>
								</ul>
							</div>
							<!-- <div class="col-sm-3">
								<h4>合作提案</h4>
								<ul class="list-unstyled">
									<li><a href="static/advertise.html" rel="nofollow">广告</a></li>
									<li><a href="invite.html" rel="nofollow">邀请朋友</a></li>
								</ul>
							</div>
							<div class="col-sm-3">
								<h4>支援</h4>
								<ul class="list-unstyled">
									<li><a href="notices.html">通告</a></li>
									<li><a href="static/faq.html" rel="nofollow">常见问题</a></li>
									<li><a href="feedback.html" rel="nofollow">帮助 / 意见</a></li>
								</ul>
							</div> -->
						</div>
					</div>
				</div>
				<div class="mobile-footer-links  visible-xs">
					<div class="container">
						<div class="mobile-footer-item">
							<div>
								<a data-toggle="collapse" data-target="#link_us" style="width: 100%">
									<div>
										<p style="display: inline-block;">友情链接</p>
										<p class="pull-right"><i class="fas fa-sort-down"></i></p>
									</div>
								</a>
							</div>
							<ul class="list-unstyled collapse" id="link_us">
								<?php  $IeUrl=(array)$this->value['IeUrl']; $Count=Count($IeUrl); for ($x=0; $x<=$Count-1; $x++) {  $IeUrls=$IeUrl[$x];  ?>
								<li><a href="<?php 	echo  $IeUrls['IeUrlWebUrl'] ?>" rel="nofollow"><?php 	echo  $IeUrls['IeUrlName'] ?></a></li>
								<?php  } ?>
							</ul>
						</div>
						<!-- <div class="mobile-footer-item">
							<div>
								<a data-toggle="collapse" data-target="#comm_us" style="width: 100%">
									<div>
										<p style="display: inline-block;">合作提案</p>
										<p class="pull-right"><i class="fas fa-sort-down"></i></p>
									</div>
								</a>
							</div>
							<ul class="list-unstyled collapse" id="comm_us">
								<li><a href="static/advertise.html" rel="nofollow">广告</a></li>
								<li><a href="invite.html" rel="nofollow">邀请朋友</a></li>
							</ul>
						</div>
						<div class="mobile-footer-item">
							<div>
								<a data-toggle="collapse" data-target="#support" style="width: 100%">
									<div>
										<p style="display: inline-block;">支援</p>
										<p class="pull-right"><i class="fas fa-sort-down"></i></p>
									</div>
								</a>
							</div>
							<ul class="list-unstyled collapse" id="support">
								<li><a href="notices.html">通告</a></li>
								<li><a href="feedback.html" rel="nofollow">帮助 / 意见</a></li>
								<li><a href="static/faq.html" rel="nofollow">常见问题</a></li>
							</ul>
						</div> -->
					</div>
				</div>
				<div class="footer">
					<div class="container">
						<div class="hidden-xs">
							<div style="text-align: center;">
								<span>版权所有 &#169; 2008-2019</span> 性&情色 SexPorn
							</div>
							<div class="clearfix"></div>
						</div>
						<style type="text/css">
							.propa_bottom{
								z-index: 999999;
							}
						</style>
						<div class="visible-xs text-center"><span>版权所有 &#169; 2008-2019</span> 性&情色 SexPorn</div>
					</div>
				</div>
			</div>
			<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/all-201909012.js"></script>
			<?php echo $this->value['WebAdS']; ?>