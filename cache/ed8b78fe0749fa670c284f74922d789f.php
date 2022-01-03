<div class="head"><div class="deanmaintops" id="deandingbu">
<div class="deanheader">
<div class="w1180">
<div class="deanhdtopl">
<div class="deangz">
<div class="deangztop">
<a class="deanzhuzhan" style="color:#fff;" href="<?php echo $this->value['WEBUrl']; ?>" target="_blank">手机APP</a>
<!--<div class="deangzpic"></div>--></div></div><ul>
<li><a class="deanyxzx" href="<?php echo $this->value['WEBUrl']; ?>" target="_blank">永久地址发布页</a></li>
<div class="clear"></div></ul></div>
<div class="deanhdtopr">
<div class="deandl"><style type="text/css">
.deanlogin .pipe{ display:none;} 
.deanlogin dl a{ padding:0;}
</style>
<div class="deanlogin">                 
<style tpye="text/css">
</style>
<div class="deandenglu" style=" margin-right:15px;">
<div class="ceanundl">
<ul>
<li class="deandlfde"><a class="deandldl" href="<?php echo $this->value['WEBUrl']; ?>" target="_blank">登陆</a></li>
<li><a class="deandlzc" href="<?php echo $this->value['WEBUrl']; ?>" target="_blank">注册</a></li>
<div class="clear"></div>
</ul>
</div>
</div>     
</div></div>
</div>
<div class="clear"></div>
</div>
</div>        
<div class="deanheaderbg">
<div class="w1180">
<div class="deanlogo"><h2><a href="./"><img src="http://www.91king.xyz/Template/xiaofan_001/images/logo.png" width="230px" height="70px" border="0"></a></h2></div>
<div class="deansearch">
<div id="scbar" class="cl">

<form class="topnav_menu_search" action="/index.php?m=search&c=index&a=init&typeid=53&siteid=1&q="  name="search" type="get">
<input type="hidden" name="m" value="search">
<input type="hidden" name="c" value="index">
<input type="hidden" name="a" value="init">
<input type="hidden" name="typeid" value="53" id="typeid">
<input type="hidden" name="siteid" value="1" id="siteid">
<table cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td>
<input  name="search"  type="text" id="scbar_txt" class=" xg1" placeholder="基地搜索." value=""></td>
<td><button type="submit" name="searchsubmit" id="scbar_btn" sc="1" class="pn pnc" value="true">搜&nbsp;索&nbsp;</button></td>
</tr>
</tbody>
</table>
</form>
</div>

</div>
<div class="clear"></div>
</div>
</div>
</div>
<div class="nav-pinupbox">
<div class="nav-pinup">
<div class="menu">
<ul class="f16 menu-list">
<li id="menu-item-0"><a href="/">网站首页</a></li>
  <li class="testactive"><a href="#">视频一区</a>
        <div class="dropdownlist">
         <ul>
          <?php $vodtypes=(array)$this->value['数据分类'];$shuzu='1,2,3,4,5,6';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> <li><a href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li><?php } ?>
          
         </ul>
	    </div>
  </li>
    <li class="testactive"><a href="#">视频二区</a>
        <div class="dropdownlist">
         <ul>
          <?php $vodtypes=(array)$this->value['数据分类'];$shuzu='7,8,9,10,11,12';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> <li><a href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li><?php } ?>
          
         </ul>
	    </div>
  </li>
  <li class="testactive"><a href="#">视频三区</a>
        <div class="dropdownlist">
         <ul>
          <?php $vodtypes=(array)$this->value['数据分类'];$shuzu='13,14,15,16,17,18';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> <li><a href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li><?php } ?>
          
         </ul>
	    </div>
  </li>
  <li class="testactive"><a href="#">小说资源</a>
        <div class="dropdownlist">
         <ul>
          <?php $vodtypes=(array)$this->value['数据分类'];$shuzu='19,20,21,22,23,24';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> <li><a href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li><?php } ?>
          
         </ul>
	    </div>
  </li>
   <li class="testactive"><a href="#">美图专区</a>
        <div class="dropdownlist">
         <ul>
          <?php $vodtypes=(array)$this->value['数据分类'];$shuzu='25,26,27,28,29,30';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> <li><a href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li><?php } ?>
          
         </ul>
	    </div>
  </li>
   <li class="testactive"><a href="#">电台种子</a>
        <div class="dropdownlist">
         <ul>
          <?php $vodtypes=(array)$this->value['数据分类'];$shuzu='31,32,33,34,35,36';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> <li><a href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li><?php } ?>
          
         </ul>
	    </div>
  </li>



</ul>
</div>
<div class="gonggao">
<div class="main">
  <span>公告：</span>永久网址 www.91king.xyz 我们致力于提供最全面的AV视频免费服务。为你的所爱而来，为你的发现停留！
</div>
</div>
</div>
</div>
</div>
<div class="topad">
<ul class="topad-list ad-col1">

<?php $AdminTop=(array)$this->value['TopWebAd'];$AdminTop_count=count($AdminTop);for ($x=0; $x<=$AdminTop_count-1; $x++) {$TopWeb=$AdminTop[$x];$TopWebUrl=$TopWeb['TopWebUrl'];$TopRemarks=$TopWeb['TopRemarks'];$TopPicUrl=$TopWeb['TopPicUrl'];$TopState=$TopWeb['TopState'];$TopPicUrlWidth=$TopWeb['TopPicUrlWidth'];$TopPicUrlHeight=$TopWeb['TopPicUrlHeight'];;?> <li><a href="<?php echo $TopWebUrl?>" target="_blank"><img src="<?php echo $TopPicUrl?>" width="<?php echo $TopPicUrlWidth?>" height="<?php echo $TopPicUrlHeight?>"></a></li><?php } ?>

</ul>
</div>