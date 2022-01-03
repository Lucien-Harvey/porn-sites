<?php
if (!function_exists('clean_xss')){
    /**
     * 防止xxs攻击
     * @param $string
     * @param $low 安全别级低
     */
    function clean_xss(&$string, $low = true)
    {
        if (! is_array ( $string ))
        {
            $string = trim ( $string );
            $string = strip_tags ( $string );
            $string = htmlspecialchars ( $string );
            if ($low)
            {
                return $string;
            }
            $string = str_replace ( array ('"', "\\", "'", "/", "..", "../", "./", "//" ), '', $string );
            $no = '/%0[0-8bcef]/';
            $string = preg_replace ( $no, '', $string );
            $no = '/%1[0-9a-f]/';
            $string = preg_replace ( $no, '', $string );
            $no = '/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]+/S';
            $string = preg_replace ( $no, '', $string );
            return $string;
        }
        $keys = array_keys ( $string );
        foreach ( $keys as $key )
        {
            clean_xss ( $string [$key] );
        }
    }
}

function curPageURL() 
{
  $pageURL = 'http';
if(isset($_SERVER["HTTPS"])){		$HTTPS =$_SERVER["HTTPS"];}else{		$HTTPS = NULL;}
  if ($HTTPS == "on") 
  {
    $pageURL .= "s";
  }
  $pageURL .= "://";
 
  if ($_SERVER["SERVER_PORT"] != "80") 
  {
    $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] ;
  } 
  else
  {
    $pageURL .= $_SERVER["SERVER_NAME"];
  }
  return $pageURL;
}
$WEBUrl=curPageURL();



//127.0.0.18/?m=book_conter*5*1
//http://127.0.0.18/?m=book_conter#v=id#c=page
if(isset($_GET['m'])){		$GetMb = $_GET['m'];}else{		$GetMb = NULL;}
if(isset($_GET['search'])){		$search = $_GET['search'];}else{		$search = NULL;}
if($search !==Null){ header("Location: ?m=video_search*".$search."*1");     }

$GetMb =explode("*",$GetMb);
//模板
if(isset($GetMb['0'])){		$GetMb_tmp =clean_xss($GetMb['0']);}else{		$GetMb_tmp = NULL;}
//id
if(isset($GetMb['1'])){		$GetMb_id =clean_xss($GetMb['1']);}else{		$GetMb_id = NULL;}
//分页
if(isset($GetMb['2'])){		$GetMb_page =clean_xss($GetMb['2']);}else{		$GetMb_page = NULL;}
switch($GetMb_tmp){
	case 'index':$GetMb_tmp = 'index';break;
	case 'video_list':$GetMb_tmp = 'video_list';break;
	case 'video_detail':$GetMb_tmp = 'video_detail';break;
	case 'video_conter':$GetMb_tmp = 'video_conter';break;
	case 'video_search':$GetMb_tmp = 'video_search';break;	
	case 'book_list':$GetMb_tmp = 'book_list';break;
	case 'book_detail':$GetMb_tmp = 'book_detail';break;
	case 'book_conter':$GetMb_tmp = 'book_conter';break;
	case 'pic_list':$GetMb_tmp = 'pic_list';break;
	case 'pic_detail':$GetMb_tmp = 'pic_detail';break;
	case 'pic_conter':$GetMb_tmp = 'pic_conter';break;
	case 'radio_list':$GetMb_tmp = 'radio_list';break;
	case 'radio_detail':$GetMb_tmp = 'radio_detail';break;
	case 'radio_conter':$GetMb_tmp = 'radio_conter';break;
	case 'bt_list':$GetMb_tmp = 'bt_list';break;
	case 'bt_detail':$GetMb_tmp = 'bt_detail';break;
	case 'bt_conter':$GetMb_tmp = 'bt_conter';break;
	default:$GetMb_tmp = 'index';break;
}




?>