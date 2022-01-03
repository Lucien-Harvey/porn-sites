<?php

class Compile
{
    private $template;   // 待编译的文件
    private $content;   // 需要替换的文件
    private $comfile;   // 编译后的文件
    private $left = '{';   // 左定界符
    private $right = '}';   // 右定界符
    private $value = array();   // 值栈
    private $phpTurn;
    private $T_P = array();   // 匹配正则数组
    private $T_R = array();   // 替换数组
    public function __construct($template, $compileFile, $config) {
        $this->template = $template;
        $this->comfile = $compileFile;
        $this->content = file_get_contents($template);
        if ($config['php_turn'] === true) {
            $this->T_P[] = "#<\?(=|php|)(.+?)\?#is";
            $this->T_R[] = "&lt;?\1\2?&gt;";
        }
        // 系统设置变量匹配
        // \x7f-\xff表示ASCII字符从127到255，其中\为转义，作用是匹配汉字
        $this->T_P[] = "#\{9CCMS:\\$([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)\}#";
		// 系统设置变量解析
        $this->T_R[] = "<?php echo \$this->value['\\1']; ?>";
		//数据分类标签匹配
		$this->T_P[] = "#\{9CCMS:Type=(.*?)\}#i";
        $this->T_P[] = "#\{\/9CCMS:Type\}#";	
        $this->T_P[] = "#\{9CCMS:Name\}#";
		$this->T_P[] = "#\{9CCMS:Url\}#";		
		//数据分类标签解析
        $this->T_R[] = "<?php \$vodtypes=(array)\$this->value['数据分类'];\$shuzu='\\1';\$explode=explode(',',\$shuzu);\$count=count(\$explode);\$data=array();for (\$x=0; \$x<=\$count-1; \$x++) {\$aass=\$explode[\$x];\$data[\$x]=\$explode[\$x];}\$countt=count(\$data);for (\$x=0; \$x<=\$countt-1; \$x++) {\$fenleivod=\$vodtypes[\$data[\$x]];\$name=\$fenleivod['name'];\$id=\$fenleivod['id'];\$type=\$fenleivod['type'];?> ";
        $this->T_R[] = "<?php } ?>";
        $this->T_R[] = "<?php echo \$name?>";
		$this->T_R[] = "<?php     echo \$Host1.\$type.'_list'.\$Host2.\$id.\$Host3.'1'.\$Host4;?>";
		//头部横幅广告标签匹配
		$this->T_P[] = "#\{9CCMS-TAd\}#i";
        $this->T_P[] = "#\{\/9CCMS-TAd\}#";	
        $this->T_P[] = "#\{9CCMS-TAd:Pic\}#";
		$this->T_P[] = "#\{9CCMS-TAd:Url\}#";
		$this->T_P[] = "#\{9CCMS-TAd:Width\}#";
		$this->T_P[] = "#\{9CCMS-TAd:Height\}#";		
		//头部横幅广告标签解析
        $this->T_R[] = "<?php \$AdminTop=(array)\$this->value['TopWebAd'];\$AdminTop_count=count(\$AdminTop);for (\$x=0; \$x<=\$AdminTop_count-1; \$x++) {\$TopWeb=\$AdminTop[\$x];\$TopWebUrl=\$TopWeb['TopWebUrl'];\$TopRemarks=\$TopWeb['TopRemarks'];\$TopPicUrl=\$TopWeb['TopPicUrl'];\$TopState=\$TopWeb['TopState'];\$TopPicUrlWidth=\$TopWeb['TopPicUrlWidth'];\$TopPicUrlHeight=\$TopWeb['TopPicUrlHeight'];;?> ";
        $this->T_R[] = "<?php } ?>";
        $this->T_R[] = "<?php echo \$TopPicUrl?>";
		$this->T_R[] = "<?php echo \$TopWebUrl?>";	
        $this->T_R[] = "<?php echo \$TopPicUrlWidth?>";
		$this->T_R[] = "<?php echo \$TopPicUrlHeight?>";
		//详情内容横幅广告标签匹配
		$this->T_P[] = "#\{9CCMS-DCAd\}#i";
        $this->T_P[] = "#\{\/9CCMS-DCAd\}#";	
        $this->T_P[] = "#\{9CCMS-DCAd:Pic\}#";
		$this->T_P[] = "#\{9CCMS-DCAd:Url\}#";
		$this->T_P[] = "#\{9CCMS-DCAd:Width\}#";
		$this->T_P[] = "#\{9CCMS-DCAd:Height\}#";		
		//详情内容横幅广告标签解析
        $this->T_R[] = "<?php \$Video=(array)\$this->value['VideoWebAd'];\$Video_count=count(\$Video);for (\$x=0; \$x<=\$Video_count-1; \$x++) {\$VideoWeb=\$Video[\$x];\$VideoWebUrl=\$VideoWeb['VideoWebUrl'];\$VideoRemarks=\$VideoWeb['VideoRemarks'];\$VideoPicUrl=\$VideoWeb['VideoPicUrl'];\$VideoState=\$VideoWeb['VideoState'];\$VideoPicUrlWidth=\$VideoWeb['VideoPicUrlWidth'];\$VideoPicUrlHeight=\$VideoWeb['VideoPicUrlHeight'];;?> ";
        $this->T_R[] = "<?php } ?>";
        $this->T_R[] = "<?php echo \$VideoPicUrl?>";
		$this->T_R[] = "<?php echo \$VideoWebUrl?>";	
        $this->T_R[] = "<?php echo \$VideoPicUrlWidth?>";
		$this->T_R[] = "<?php echo \$VideoPicUrlHeight?>";		
		//公共引入模板标签匹配
		$this->T_P[] = "#\{9CCMS-include:(.*?)\}#i";
		//公共引入模板标签解析
        $this->T_R[] = "<?php \$mubantou=\$this->value['\\1'];\$this->show(\$mubantou); ?>";
		//首页推荐分类名称标签匹配
		$this->T_P[] = "#\{9CCMS-Index-Type:(.*?)\}#i";
		//首页推荐分类名称标签解析
        $this->T_R[] = "<?php  \$vodtypes=(array)\$this->value['数据分类'];  \$shuzua=\$vodtypes['\\1'];echo \$shuzua['name']; ?>";
		//首页推荐视频数组标签匹配{9CCMS-首页推荐:分类=2,数量=10}
		$this->T_P[] = "#\{9CCMS-Index:Type=(.*?),Count=(.*?)\}#i";
		$this->T_P[] = "#\{\/9CCMS-Index\}#i";
		$this->T_P[] = "#\{9CCMS-Index:Name\}#";
		$this->T_P[] = "#\{9CCMS-Index:Pic\}#";
		$this->T_P[] = "#\{9CCMS-Index:DUrl\}#";
		$this->T_P[] = "#\{9CCMS-Index:Rand\}#";
		//首页推荐视频数组标签解析
        $this->T_R[] = "<?php  \$VideoType=\\1;  \$Count=\\2;\$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.\$VideoType.'.txt'),true); for (\$x=0; \$x<=\$Count-1; \$x++) {  \$MYSQLVOD=\$MYSQLVODS[\$x];  ?>";
		$this->T_R[] = "<?php  } ?>";
		$this->T_R[] = "<?php 	echo  \$MYSQLVOD['d_name'] ?>";
		$this->T_R[] = "<?php 	echo  \$MYSQLVOD['d_pic'] ?>";
		$this->T_R[] = "<?php 	echo  \$Host1.'video_detail'.\$Host2.\$MYSQLVOD['d_id'].\$Host3.\$VideoType.\$Host4; ?>";
		$this->T_R[] = "<?php 	echo   rand(5, 10000); ?>";
		//友情链接数组标签匹配
		$this->T_P[] = "#\{9CCMS-IeUrl\}#i";
		$this->T_P[] = "#\{\/9CCMS-IeUrl\}#i";
		$this->T_P[] = "#\{9CCMS-IeUrl:Url\}#";
		$this->T_P[] = "#\{9CCMS-IeUrl:Name\}#";
		//友情链接数组标签解析
        $this->T_R[] = "<?php  \$IeUrl=(array)\$this->value['IeUrl']; \$Count=Count(\$IeUrl); for (\$x=0; \$x<=\$Count-1; \$x++) {  \$IeUrls=\$IeUrl[\$x];  ?>";
		$this->T_R[] = "<?php  } ?>";
		$this->T_R[] = "<?php 	echo  \$IeUrls['IeUrlWebUrl'] ?>";
		$this->T_R[] = "<?php 	echo  \$IeUrls['IeUrlName'] ?>";
		//视频分类数组标签匹配
		$this->T_P[] = "#\{9CCMS-Video-List:Title\}#i";
		$this->T_P[] = "#\{9CCMS-Video-List:Count=(.*?)\}#i";
		$this->T_P[] = "#\{\/9CCMS-Video-List\}#i";
		$this->T_P[] = "#\{9CCMS-Video-List:Name\}#";
		$this->T_P[] = "#\{9CCMS-Video-List:Pic\}#";
		$this->T_P[] = "#\{9CCMS-Video-List:DUrl\}#";
		$this->T_P[] = "#\{9CCMS-Video-List:Rand\}#";	
		$this->T_P[] = "#\{9CCMS-Video-List:PageUrl\}#";
		$this->T_P[] = "#\{9CCMS-Video-List:prevUrl\}#";
		$this->T_P[] = "#\{9CCMS-Video-List:nextUrl\}#";
		$this->T_P[] = "#\{9CCMS-Video-List:totalUrl\}#";
		$this->T_P[] = "#\{9CCMS-Video-List:baseUrl\}#";
		$this->T_P[] = "#\{9CCMS-Video-List:totalPage\}#";
		$this->T_P[] = "#\{9CCMS-Video-List:currentPage\}#";
		//视频分类数组标签解析
		$this->T_R[] = "<?php  echo \$this->value['VideoTypeName']; ?>";
        $this->T_R[] = "<?php  \$MYSQLVODS=(array)\$this->value['VideoTypeJCSQL'];\$VideoTypeId=\$this->value['VideoTypeId'];\$GetMb_page=\$this->value['VideoTypePage']; \$Count=\\1;\$MYSQLVODS=PAGE(\$MYSQLVODS,\$GetMb_page,\$Count);  foreach(\$MYSQLVODS['source'] as \$s){  ?>";
		$this->T_R[] = "<?php  } ?>";
		$this->T_R[] = "<?php 	echo  \$s['d_name'] ?>";
		$this->T_R[] = "<?php 	echo  \$s['d_pic'] ?>";
		$this->T_R[] = "<?php 	echo  \$Host1.'video_detail'.\$Host2.\$s['d_id'].\$Host3.\$VideoTypeId.\$Host4; ?>";
		$this->T_R[] = "<?php 	echo   rand(5, 10000); ?>";
		$this->T_R[] = "<?php 	echo \$Host1.'video_list'.\$Host2.\$VideoTypeId.\$Host3.\$MYSQLVODS['page'].\$Host4; ?>";
		$this->T_R[] = "<?php 	echo \$Host1.'video_list'.\$Host2.\$VideoTypeId.\$Host3.\$MYSQLVODS['prev'].\$Host4; ?>";
		$this->T_R[] = "<?php 	echo \$Host1.'video_list'.\$Host2.\$VideoTypeId.\$Host3.\$MYSQLVODS['next'].\$Host4; ?>";
		$this->T_R[] = "<?php 	echo \$Host1.'video_list'.\$Host2.\$VideoTypeId.\$Host3.\$MYSQLVODS['total'].\$Host4; ?>";
        $this->T_R[] = "<?php 	echo \$Host1.'video_list'.\$Host2.\$VideoTypeId.\$Host3.'currentPage'.\$Host4; ?>";
		$this->T_R[] = "<?php 	echo \$MYSQLVODS['total']; ?>";
		$this->T_R[] = "<?php 	echo \$GetMb_page; ?>";
		//视频随机推荐数组标签匹配
		$this->T_P[] = "#\{9CCMS-Video-Popular:Count=(.*?)\}#i";
		$this->T_P[] = "#\{\/9CCMS-Video-Popular\}#i";
		$this->T_P[] = "#\{9CCMS-Video-Popular:Name\}#";
		$this->T_P[] = "#\{9CCMS-Video-Popular:Pic\}#";
		$this->T_P[] = "#\{9CCMS-Video-Popular:DUrl\}#";
		$this->T_P[] = "#\{9CCMS-Video-Popular:Rand\}#";
		//视频随机推荐数组标签解析
        $this->T_R[] = "<?php  \$VideoType=\$this->value['VideoType']; \$MYSQLVOD=(array)\$this->value['VideoTypeJCSQL'];shuffle(\$MYSQLVOD);  \$Count=\\1;for (\$x=0; \$x<=\$Count-1; \$x++) {  \$MYSQLVODs=\$MYSQLVOD[\$x];  ?>";
		$this->T_R[] = "<?php  } ?>";
		$this->T_R[] = "<?php 	echo  \$MYSQLVODs['d_name'] ?>";
		$this->T_R[] = "<?php 	echo  \$MYSQLVODs['d_pic'] ?>";
		$this->T_R[] = "<?php 	echo  \$Host1.'video_detail'.\$Host2.\$MYSQLVODs['d_id'].\$Host3.\$VideoType.\$Host4; ?>";
		$this->T_R[] = "<?php 	echo   rand(5, 10000); ?>";
		//小说分类数组标签匹配
		$this->T_P[] = "#\{9CCMS-Book-List:Title\}#i";
		$this->T_P[] = "#\{9CCMS-Book-List:Count=(.*?)\}#i";
		$this->T_P[] = "#\{\/9CCMS-Book-List\}#i";
		$this->T_P[] = "#\{9CCMS-Book-List:Name\}#";
		$this->T_P[] = "#\{9CCMS-Book-List:Pic\}#";
		$this->T_P[] = "#\{9CCMS-Book-List:DUrl\}#";
		$this->T_P[] = "#\{9CCMS-Book-List:Rand\}#";	
		$this->T_P[] = "#\{9CCMS-Book-List:PageUrl\}#";
		$this->T_P[] = "#\{9CCMS-Book-List:prevUrl\}#";
		$this->T_P[] = "#\{9CCMS-Book-List:nextUrl\}#";
		$this->T_P[] = "#\{9CCMS-Book-List:totalUrl\}#";
        $this->T_P[] = "#\{9CCMS-Book-List:baseUrl\}#";
        $this->T_P[] = "#\{9CCMS-Book-List:totalPage\}#";
        $this->T_P[] = "#\{9CCMS-Book-List:currentPage\}#";
		//小说分类数组标签解析
		$this->T_R[] = "<?php  echo \$this->value['BookTypeName']; ?>";
        $this->T_R[] = "<?php  \$MYSQLVODS=(array)\$this->value['BookTypeJCSQL'];\$BookTypeId=\$this->value['BookTypeId'];\$GetMb_page=\$this->value['BookTypePage']; \$Count=\\1;\$MYSQLVODS=PAGE(\$MYSQLVODS,\$GetMb_page,\$Count);  foreach(\$MYSQLVODS['source'] as \$s){  ?>";
		$this->T_R[] = "<?php  } ?>";
		$this->T_R[] = "<?php 	echo  \$s['a_name'] ?>";
		$this->T_R[] = "<?php 	echo  \$s['a_pic'] ?>";
		$this->T_R[] = "<?php 	echo  \$Host1.'book_detail'.\$Host2.\$s['a_id'].\$Host3.\$BookTypeId.\$Host4; ?>";
		$this->T_R[] = "<?php 	echo   rand(5, 10000); ?>";
		$this->T_R[] = "<?php 	echo \$Host1.'book_list'.\$Host2.\$BookTypeId.\$Host3.\$MYSQLVODS['page'].\$Host4; ?>";
		$this->T_R[] = "<?php 	echo \$Host1.'book_list'.\$Host2.\$BookTypeId.\$Host3.\$MYSQLVODS['prev'].\$Host4; ?>";
		$this->T_R[] = "<?php 	echo \$Host1.'book_list'.\$Host2.\$BookTypeId.\$Host3.\$MYSQLVODS['next'].\$Host4; ?>";
		$this->T_R[] = "<?php 	echo \$Host1.'book_list'.\$Host2.\$BookTypeId.\$Host3.\$MYSQLVODS['total'].\$Host4; ?>";
        $this->T_R[] = "<?php 	echo \$Host1.'book_list'.\$Host2.\$BookTypeId.\$Host3.'currentPage'.\$Host4; ?>";
        $this->T_R[] = "<?php 	echo \$MYSQLVODS['total']; ?>";
        $this->T_R[] = "<?php 	echo \$GetMb_page; ?>";
		//小说随机推荐数组标签匹配
		$this->T_P[] = "#\{9CCMS-Book-Popular:Count=(.*?)\}#i";
		$this->T_P[] = "#\{\/9CCMS-Book-Popular\}#i";
		$this->T_P[] = "#\{9CCMS-Book-Popular:Name\}#";
		$this->T_P[] = "#\{9CCMS-Book-Popular:Pic\}#";
		$this->T_P[] = "#\{9CCMS-Book-Popular:DUrl\}#";
		$this->T_P[] = "#\{9CCMS-Book-Popular:Rand\}#";
		//小说随机推荐数组标签解析
        $this->T_R[] = "<?php  \$BookType=\$this->value['BookType']; \$MYSQLVOD=(array)\$this->value['BookTypeJCSQL'];shuffle(\$MYSQLVOD);  \$Count=\\1;for (\$x=0; \$x<=\$Count-1; \$x++) {  \$MYSQLVODs=\$MYSQLVOD[\$x];  ?>";
		$this->T_R[] = "<?php  } ?>";
		$this->T_R[] = "<?php 	echo  \$MYSQLVODs['a_name'] ?>";
		$this->T_R[] = "<?php 	echo  \$MYSQLVODs['a_pic'] ?>";
		$this->T_R[] = "<?php 	echo  \$Host1.'book_detail'.\$Host2.\$MYSQLVODs['a_id'].\$Host3.\$BookType.\$Host4; ?>";
		$this->T_R[] = "<?php 	echo   rand(5, 10000); ?>";	
		//套图分类数组标签匹配
		$this->T_P[] = "#\{9CCMS-Pic-List:Title\}#i";
		$this->T_P[] = "#\{9CCMS-Pic-List:Count=(.*?)\}#i";
		$this->T_P[] = "#\{\/9CCMS-Pic-List\}#i";
		$this->T_P[] = "#\{9CCMS-Pic-List:Name\}#";
		$this->T_P[] = "#\{9CCMS-Pic-List:Pic\}#";
		$this->T_P[] = "#\{9CCMS-Pic-List:DUrl\}#";
		$this->T_P[] = "#\{9CCMS-Pic-List:Rand\}#";	
		$this->T_P[] = "#\{9CCMS-Pic-List:PageUrl\}#";
		$this->T_P[] = "#\{9CCMS-Pic-List:prevUrl\}#";
		$this->T_P[] = "#\{9CCMS-Pic-List:nextUrl\}#";
		$this->T_P[] = "#\{9CCMS-Pic-List:totalUrl\}#";
        $this->T_P[] = "#\{9CCMS-Pic-List:baseUrl\}#";
        $this->T_P[] = "#\{9CCMS-Pic-List:totalPage\}#";
        $this->T_P[] = "#\{9CCMS-Pic-List:currentPage\}#";
		//套图分类数组标签解析
		$this->T_R[] = "<?php  echo \$this->value['PicTypeName']; ?>";
        $this->T_R[] = "<?php  \$MYSQLVODS=(array)\$this->value['PicTypeJCSQL'];\$PicTypeId=\$this->value['PicTypeId'];\$GetMb_page=\$this->value['PicTypePage']; \$Count=\\1;\$MYSQLVODS=PAGE(\$MYSQLVODS,\$GetMb_page,\$Count);  foreach(\$MYSQLVODS['source'] as \$s){  ?>";
		$this->T_R[] = "<?php  } ?>";
		$this->T_R[] = "<?php 	echo  \$s['a_name'] ?>";
		$this->T_R[] = "<?php 	echo  \$s['a_remarks'] ?>";
		$this->T_R[] = "<?php 	echo  \$Host1.'pic_detail'.\$Host2.\$s['a_id'].\$Host3.\$PicTypeId.\$Host4; ?>";
		$this->T_R[] = "<?php 	echo   rand(5, 10000); ?>";
		$this->T_R[] = "<?php 	echo \$Host1.'pic_list'.\$Host2.\$PicTypeId.\$Host3.\$MYSQLVODS['page'].\$Host4; ?>";
		$this->T_R[] = "<?php 	echo \$Host1.'pic_list'.\$Host2.\$PicTypeId.\$Host3.\$MYSQLVODS['prev'].\$Host4; ?>";
		$this->T_R[] = "<?php 	echo \$Host1.'pic_list'.\$Host2.\$PicTypeId.\$Host3.\$MYSQLVODS['next'].\$Host4; ?>";
		$this->T_R[] = "<?php 	echo \$Host1.'pic_list'.\$Host2.\$PicTypeId.\$Host3.\$MYSQLVODS['total'].\$Host4; ?>";
        $this->T_R[] = "<?php 	echo \$Host1.'pic_list'.\$Host2.\$PicTypeId.\$Host3.'currentPage'.\$Host4; ?>";
        $this->T_R[] = "<?php 	echo \$MYSQLVODS['total']; ?>";
        $this->T_R[] = "<?php 	echo \$GetMb_page; ?>";
        //小说随机推荐数组标签匹配
		//套图随机推荐数组标签匹配
		$this->T_P[] = "#\{9CCMS-Pic-Popular:Count=(.*?)\}#i";
		$this->T_P[] = "#\{\/9CCMS-Pic-Popular\}#i";
		$this->T_P[] = "#\{9CCMS-Pic-Popular:Name\}#";
		$this->T_P[] = "#\{9CCMS-Pic-Popular:Pic\}#";
		$this->T_P[] = "#\{9CCMS-Pic-Popular:DUrl\}#";
		$this->T_P[] = "#\{9CCMS-Pic-Popular:Rand\}#";
		//套图随机推荐数组标签解析
        $this->T_R[] = "<?php  \$PicType=\$this->value['PicType']; \$MYSQLVOD=(array)\$this->value['PicTypeJCSQL'];shuffle(\$MYSQLVOD);  \$Count=\\1;for (\$x=0; \$x<=\$Count-1; \$x++) {  \$MYSQLVODs=\$MYSQLVOD[\$x];  ?>";
		$this->T_R[] = "<?php  } ?>";
		$this->T_R[] = "<?php 	echo  \$MYSQLVODs['a_name'] ?>";
		$this->T_R[] = "<?php 	echo  \$MYSQLVODs['a_remarks'] ?>";
		$this->T_R[] = "<?php 	echo  \$Host1.'pic_detail'.\$Host2.\$MYSQLVODs['a_id'].\$Host3.\$PicType.\$Host4; ?>";
		$this->T_R[] = "<?php 	echo   rand(5, 10000); ?>";	
		//直播分类数组标签匹配
		$this->T_P[] = "#\{9CCMS-Live-List:Title\}#i";
		$this->T_P[] = "#\{9CCMS-Live-List:Count=(.*?)\}#i";
		$this->T_P[] = "#\{\/9CCMS-Live-List\}#i";
		$this->T_P[] = "#\{9CCMS-Live-List:Pic\}#";
		$this->T_P[] = "#\{9CCMS-Live-List:DUrl\}#";
		$this->T_P[] = "#\{9CCMS-Live-List:Rand\}#";
		$this->T_P[] = "#\{9CCMS-Live-List:PageUrl\}#";
		$this->T_P[] = "#\{9CCMS-Live-List:prevUrl\}#";
		$this->T_P[] = "#\{9CCMS-Live-List:nextUrl\}#";
		$this->T_P[] = "#\{9CCMS-Live-List:totalUrl\}#";
        $this->T_P[] = "#\{9CCMS-Live-List:baseUrl\}#";
        $this->T_P[] = "#\{9CCMS-Live-List:totalPage\}#";
        $this->T_P[] = "#\{9CCMS-Live-List:currentPage\}#";
		//直播分类数组标签解析
		$this->T_R[] = "<?php  echo \$this->value['LiveTypeName']; ?>";
        $this->T_R[] = "<?php  \$MYSQLVODS=(array)\$this->value['LiveTypeJCSQL'];\$LiveTypeId=\$this->value['LiveTypeId'];\$GetMb_page=\$this->value['LiveTypePage']; \$Count=\\1;\$MYSQLVODS=PAGE(\$MYSQLVODS,\$GetMb_page,\$Count);  foreach(\$MYSQLVODS['source'] as \$s){  ?>";
		$this->T_R[] = "<?php  } ?>";
		$this->T_R[] = "<?php 	echo  \$s['live_pic'] ?>";
		$this->T_R[] = "<?php 	echo  \$Host1.'live_detail'.\$Host2.\$s['live_id'].\$Host3.\$LiveTypeId.\$Host4; ?>";
		$this->T_R[] = "<?php 	echo   rand(5, 10000); ?>";			
		$this->T_R[] = "<?php 	echo \$Host1.'live_list'.\$Host2.\$LiveTypeId.\$Host3.\$MYSQLVODS['page'].\$Host4; ?>";
		$this->T_R[] = "<?php 	echo \$Host1.'live_list'.\$Host2.\$LiveTypeId.\$Host3.\$MYSQLVODS['prev'].\$Host4; ?>";
		$this->T_R[] = "<?php 	echo \$Host1.'live_list'.\$Host2.\$LiveTypeId.\$Host3.\$MYSQLVODS['next'].\$Host4; ?>";
		$this->T_R[] = "<?php 	echo \$Host1.'live_list'.\$Host2.\$LiveTypeId.\$Host3.\$MYSQLVODS['total'].\$Host4; ?>";
        $this->T_R[] = "<?php 	echo \$Host1.'live_list'.\$Host2.\$LiveTypeId.\$Host3.'currentPage'.\$Host4; ?>";
        $this->T_R[] = "<?php 	echo \$MYSQLVODS['total']; ?>";
        $this->T_R[] = "<?php 	echo \$GetMb_page; ?>";
        //小说随机推荐数组标签匹配
		//直播随机推荐数组标签匹配
		$this->T_P[] = "#\{9CCMS-Live-Popular:Count=(.*?)\}#i";
		$this->T_P[] = "#\{\/9CCMS-Live-Popular\}#i";
		$this->T_P[] = "#\{9CCMS-Live-Popular:Pic\}#";
		$this->T_P[] = "#\{9CCMS-Live-Popular:DUrl\}#";
		$this->T_P[] = "#\{9CCMS-Live-Popular:Rand\}#";
		//直播随机推荐数组标签解析
        $this->T_R[] = "<?php  \$LiveTypess=\$this->value['LiveType']; \$MYSQLVOD=(array)\$this->value['LiveTypeJCSQL'];shuffle(\$MYSQLVOD);  \$Count=\\1;for (\$x=0; \$x<=\$Count-1; \$x++) {  \$MYSQLVODs=\$MYSQLVOD[\$x];  ?>";
		$this->T_R[] = "<?php  } ?>";
		$this->T_R[] = "<?php 	echo  \$MYSQLVODs['live_pic'] ?>";
		$this->T_R[] = "<?php 	echo  \$Host1.'live_detail'.\$Host2.\$MYSQLVODs['live_id'].\$Host3.\$LiveTypess.\$Host4; ?>";
		$this->T_R[] = "<?php 	echo   rand(5, 10000); ?>";	
		//BT分类数组标签匹配
		$this->T_P[] = "#\{9CCMS-Bt-List:Title\}#i";
		$this->T_P[] = "#\{9CCMS-Bt-List:Count=(.*?)\}#i";
		$this->T_P[] = "#\{\/9CCMS-Bt-List\}#i";
		$this->T_P[] = "#\{9CCMS-Bt-List:Name\}#";
		$this->T_P[] = "#\{9CCMS-Bt-List:Pic\}#";
		$this->T_P[] = "#\{9CCMS-Bt-List:DUrl\}#";
		$this->T_P[] = "#\{9CCMS-Bt-List:Rand\}#";	
		$this->T_P[] = "#\{9CCMS-Bt-List:PageUrl\}#";
		$this->T_P[] = "#\{9CCMS-Bt-List:prevUrl\}#";
		$this->T_P[] = "#\{9CCMS-Bt-List:nextUrl\}#";
		$this->T_P[] = "#\{9CCMS-Bt-List:totalUrl\}#";
        $this->T_P[] = "#\{9CCMS-Bt-List:baseUrl\}#";
        $this->T_P[] = "#\{9CCMS-Bt-List:totalPage\}#";
        $this->T_P[] = "#\{9CCMS-Bt-List:currentPage\}#";
		//BT分类数组标签解析
		$this->T_R[] = "<?php  echo \$this->value['BtTypeName']; ?>";
        $this->T_R[] = "<?php  \$MYSQLVODS=(array)\$this->value['BtTypeJCSQL'];\$BtTypeId=\$this->value['BtTypeId'];\$GetMb_page=\$this->value['BtTypePage']; \$Count=\\1;\$MYSQLVODS=PAGE(\$MYSQLVODS,\$GetMb_page,\$Count);  foreach(\$MYSQLVODS['source'] as \$s){  ?>";
		$this->T_R[] = "<?php  } ?>";
		$this->T_R[] = "<?php 	echo  \$s['d_name'] ?>";
		$this->T_R[] = "<?php 	echo  \$s['d_pic'] ?>";
		$this->T_R[] = "<?php 	echo  \$Host1.'bt_detail'.\$Host2.\$s['d_id'].\$Host3.\$BtTypeId.\$Host4; ?>";
		$this->T_R[] = "<?php 	echo   rand(5, 10000); ?>";
		$this->T_R[] = "<?php 	echo \$Host1.'bt_list'.\$Host2.\$BtTypeId.\$Host3.\$MYSQLVODS['page'].\$Host4; ?>";
		$this->T_R[] = "<?php 	echo \$Host1.'bt_list'.\$Host2.\$BtTypeId.\$Host3.\$MYSQLVODS['prev'].\$Host4; ?>";
		$this->T_R[] = "<?php 	echo \$Host1.'bt_list'.\$Host2.\$BtTypeId.\$Host3.\$MYSQLVODS['next'].\$Host4; ?>";
		$this->T_R[] = "<?php 	echo \$Host1.'bt_list'.\$Host2.\$BtTypeId.\$Host3.\$MYSQLVODS['total'].\$Host4; ?>";
        $this->T_R[] = "<?php 	echo \$Host1.'bt_list'.\$Host2.\$BtTypeId.\$Host3.'currentPage'.\$Host4; ?>";
        $this->T_R[] = "<?php 	echo \$MYSQLVODS['total']; ?>";
        $this->T_R[] = "<?php 	echo \$GetMb_page; ?>";
		//BT随机推荐数组标签匹配
		$this->T_P[] = "#\{9CCMS-Bt-Popular:Count=(.*?)\}#i";
		$this->T_P[] = "#\{\/9CCMS-Bt-Popular\}#i";
		$this->T_P[] = "#\{9CCMS-Bt-Popular:Name\}#";
		$this->T_P[] = "#\{9CCMS-Bt-Popular:Pic\}#";
		$this->T_P[] = "#\{9CCMS-Bt-Popular:DUrl\}#";
		$this->T_P[] = "#\{9CCMS-Bt-Popular:Rand\}#";
		//BT随机推荐数组标签解析
        $this->T_R[] = "<?php  \$BtType=\$this->value['BtType']; \$MYSQLVOD=(array)\$this->value['BtTypeJCSQL'];shuffle(\$MYSQLVOD);  \$Count=\\1;for (\$x=0; \$x<=\$Count-1; \$x++) {  \$MYSQLVODs=\$MYSQLVOD[\$x];  ?>";
		$this->T_R[] = "<?php  } ?>";
		$this->T_R[] = "<?php 	echo  \$MYSQLVODs['d_name'] ?>";
		$this->T_R[] = "<?php 	echo  \$MYSQLVODs['d_pic'] ?>";
		$this->T_R[] = "<?php 	echo  \$Host1.'bt_detail'.\$Host2.\$MYSQLVODs['d_id'].\$Host3.\$BtType.\$Host4; ?>";
		$this->T_R[] = "<?php 	echo   rand(5, 10000); ?>";
		//电台分类数组标签匹配
		$this->T_P[] = "#\{9CCMS-Radio-List:Title\}#i";
		$this->T_P[] = "#\{9CCMS-Radio-List:Count=(.*?)\}#i";
		$this->T_P[] = "#\{\/9CCMS-Radio-List\}#i";
		$this->T_P[] = "#\{9CCMS-Radio-List:Name\}#";
		$this->T_P[] = "#\{9CCMS-Radio-List:Pic\}#";
		$this->T_P[] = "#\{9CCMS-Radio-List:DUrl\}#";
		$this->T_P[] = "#\{9CCMS-Radio-List:Rand\}#";	
		$this->T_P[] = "#\{9CCMS-Radio-List:PageUrl\}#";
		$this->T_P[] = "#\{9CCMS-Radio-List:prevUrl\}#";
		$this->T_P[] = "#\{9CCMS-Radio-List:nextUrl\}#";
		$this->T_P[] = "#\{9CCMS-Radio-List:totalUrl\}#";
        $this->T_P[] = "#\{9CCMS-Radio-List:baseUrl\}#";
        $this->T_P[] = "#\{9CCMS-Radio-List:totalPage\}#";
        $this->T_P[] = "#\{9CCMS-Radio-List:currentPage\}#";
		//电台分类数组标签解析
		$this->T_R[] = "<?php  echo \$this->value['RadioTypeName']; ?>";
        $this->T_R[] = "<?php  \$MYSQLVODS=(array)\$this->value['RadioTypeJCSQL'];\$RadioTypeId=\$this->value['RadioTypeId'];\$GetMb_page=\$this->value['RadioTypePage']; \$Count=\\1;\$MYSQLVODS=PAGE(\$MYSQLVODS,\$GetMb_page,\$Count);  foreach(\$MYSQLVODS['source'] as \$s){  ?>";
		$this->T_R[] = "<?php  } ?>";
		$this->T_R[] = "<?php 	echo  \$s['d_name'] ?>";
		$this->T_R[] = "<?php 	echo  \$s['d_pic'] ?>";
		$this->T_R[] = "<?php 	echo  \$Host1.'radio_detail'.\$Host2.\$s['d_id'].\$Host3.\$RadioTypeId.\$Host4; ?>";
		$this->T_R[] = "<?php 	echo   rand(5, 10000); ?>";
		$this->T_R[] = "<?php 	echo \$Host1.'radio_list'.\$Host2.\$RadioTypeId.\$Host3.\$MYSQLVODS['page'].\$Host4; ?>";
		$this->T_R[] = "<?php 	echo \$Host1.'radio_list'.\$Host2.\$RadioTypeId.\$Host3.\$MYSQLVODS['prev'].\$Host4; ?>";
		$this->T_R[] = "<?php 	echo \$Host1.'radio_list'.\$Host2.\$RadioTypeId.\$Host3.\$MYSQLVODS['next'].\$Host4; ?>";
		$this->T_R[] = "<?php 	echo \$Host1.'radio_list'.\$Host2.\$RadioTypeId.\$Host3.\$MYSQLVODS['total'].\$Host4; ?>";
        $this->T_R[] = "<?php 	echo \$Host1.'radio_list'.\$Host2.\$RadioTypeId.\$Host3.'currentPage'.\$Host4; ?>";
        $this->T_R[] = "<?php 	echo \$MYSQLVODS['total']; ?>";
        $this->T_R[] = "<?php 	echo \$GetMb_page; ?>";
		//电台随机推荐数组标签匹配
		$this->T_P[] = "#\{9CCMS-Radio-Popular:Count=(.*?)\}#i";
		$this->T_P[] = "#\{\/9CCMS-Radio-Popular\}#i";
		$this->T_P[] = "#\{9CCMS-Radio-Popular:Name\}#";
		$this->T_P[] = "#\{9CCMS-Radio-Popular:Pic\}#";
		$this->T_P[] = "#\{9CCMS-Radio-Popular:DUrl\}#";
		$this->T_P[] = "#\{9CCMS-Radio-Popular:Rand\}#";
		//视频随机推荐数组标签解析
        $this->T_R[] = "<?php  \$RadioType=\$this->value['RadioType']; \$MYSQLVOD=(array)\$this->value['RadioTypeJCSQL'];shuffle(\$MYSQLVOD);  \$Count=\\1;for (\$x=0; \$x<=\$Count-1; \$x++) {  \$MYSQLVODs=\$MYSQLVOD[\$x];  ?>";
		$this->T_R[] = "<?php  } ?>";
		$this->T_R[] = "<?php 	echo  \$MYSQLVODs['d_name'] ?>";
		$this->T_R[] = "<?php 	echo  \$MYSQLVODs['d_pic'] ?>";
		$this->T_R[] = "<?php 	echo  \$Host1.'radio_detail'.\$Host2.\$MYSQLVODs['d_id'].\$Host3.\$RadioType.\$Host4; ?>";
		$this->T_R[] = "<?php 	echo   rand(5, 10000); ?>";
        //视频搜索数组标签匹配
        $this->T_P[] = "#\{9CCMS-Search-List:Title\}#i";
        $this->T_P[] = "#\{9CCMS-Search-List:Count=(.*?)\}#i";
        $this->T_P[] = "#\{\/9CCMS-Search-List\}#i";
        $this->T_P[] = "#\{9CCMS-Search-List:Name\}#";
        $this->T_P[] = "#\{9CCMS-Search-List:Pic\}#";
        $this->T_P[] = "#\{9CCMS-Search-List:DUrl\}#";
        $this->T_P[] = "#\{9CCMS-Search-List:Rand\}#";
        $this->T_P[] = "#\{9CCMS-Search-List:PageUrl\}#";
        $this->T_P[] = "#\{9CCMS-Search-List:prevUrl\}#";
        $this->T_P[] = "#\{9CCMS-Search-List:nextUrl\}#";
        $this->T_P[] = "#\{9CCMS-Search-List:totalUrl\}#";

        $this->T_P[] = "#\{9CCMS-Search-List:baseUrl\}#";
        $this->T_P[] = "#\{9CCMS-Search-List:totalPage\}#";
        $this->T_P[] = "#\{9CCMS-Search-List:currentPage\}#";

        //视频搜索数组标签解析
        $this->T_R[] = "<?php  echo \$this->value['SearchTypeName']; ?>";
        $this->T_R[] = "<?php  \$MYSQLVODS=(array)\$this->value['SearchTypeJCSQL'];\$SearchTypeId=\$this->value['SearchTypeId'];\$GetMb_page=\$this->value['SearchTypePage']; \$Count=\\1;\$MYSQLVODS=PAGE(\$MYSQLVODS,\$GetMb_page,\$Count);  foreach(\$MYSQLVODS['source'] as \$s){  ?>";
        $this->T_R[] = "<?php  } ?>";
        $this->T_R[] = "<?php 	echo  \$s['d_name'] ?>";
        $this->T_R[] = "<?php 	echo  \$s['d_pic'] ?>";
        $this->T_R[] = "<?php 	echo  \$Host1.'video_detail'.\$Host2.\$s['d_id'].\$Host3.\$s['d_type'].\$Host4; ?>";
        $this->T_R[] = "<?php 	echo   rand(5, 10000); ?>";
        $this->T_R[] = "<?php 	echo \$Host1.'video_search'.\$Host2.\$SearchTypeId.\$Host3.\$MYSQLVODS['page'].\$Host4; ?>";
        $this->T_R[] = "<?php 	echo \$Host1.'video_search'.\$Host2.\$SearchTypeId.\$Host3.\$MYSQLVODS['prev'].\$Host4; ?>";
        $this->T_R[] = "<?php 	echo \$Host1.'video_search'.\$Host2.\$SearchTypeId.\$Host3.\$MYSQLVODS['next'].\$Host4; ?>";
        $this->T_R[] = "<?php 	echo \$Host1.'video_search'.\$Host2.\$SearchTypeId.\$Host3.\$MYSQLVODS['total'].\$Host4; ?>";
        $this->T_R[] = "<?php 	echo \$Host1.'video_search'.\$Host2.\$SearchTypeId.\$Host3.'currentPage'.\$Host4; ?>";
        $this->T_R[] = "<?php 	echo \$MYSQLVODS['total']; ?>";
        $this->T_R[] = "<?php 	echo \$GetMb_page; ?>";





    }
    public function compile() {
        $this->c_var();
        //$this->c_staticFile();
        file_put_contents($this->comfile, $this->content);
    }
    public function c_var() {
        $this->content = preg_replace($this->T_P, $this->T_R, $this->content);
    }
    /* 对引入的静态文件进行解析，应对浏览器缓存 */
    public function c_staticFile() {
        $this->content = preg_replace('#\{\!(.*?)\!\}#', '<script src=\1'.'?t='.time().'></script>', $this->content);
    }
    public function __set($name, $value) {
        $this->$name = $value;
    }
    public function __get($name) {
        return $this->$name;
    }
}

?>