<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi" lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="index">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="robots" content="index,follow" />
    <meta http-equiv="content-language" content="vi" />
    <link rel="icon" href="https://lh3.googleusercontent.com/-xeRnVgDumg8/Y055PJzejfI/AAAAAAAABTM/6-1SNib0ebMjeUeYELErFPQRPBw5DFVtwCNcBGAsYHQ/s0/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="https://lh3.googleusercontent.com/-xeRnVgDumg8/Y055PJzejfI/AAAAAAAABTM/6-1SNib0ebMjeUeYELErFPQRPBw5DFVtwCNcBGAsYHQ/s0/favicon.ico" type="image/x-icon" />

<?php
include 'includes/header.php';
header('Cache-Control: max-age=600');
$slug = $_GET['phim'];
$tap = $_GET['tap'];
$movie = './movie/'.$slug.'.php';
$list = './list/'.$slug.'.php';
$list_tm = './list-tm/'.$slug.'.php';
if (file_exists($movie)) {
include $movie;
if (time() > ($time + 600)) {
$html = curl('https://api-hh.blogspot.com/2023/04/'.$slug.'.html');
$info = explode('</div>', explode('<div class="home">', $html)['1'])['0'];
$thumb = explode('"', explode('src="', $info)['1'])['0'];
$noidung = explode('</td>', explode('max-width:1px;">', $info)['1'])['0'];
$phim = explode("<td>", $info);
$tenphim = explode("</td>", $phim['2'])['0'];
$tengoc = explode("</td>", $phim['3'])['0'];
$stt = explode("</td>", $phim['4'])['0'];
$nam = explode("</td>", $phim['5'])['0'];
$hd = explode("</td>", $phim['6'])['0'];
$quocgia = explode("</td>", $phim['7'])['0'];

$nd = '<?php $time="'.time().'"; $tenphim="'.$tenphim.'"; $tengoc="'.$tengoc.'"; $noidung="'.$noidung.'"; $quocgia="'.$quocgia.'"; $stt="'.$stt.'"; $nam="'.$nam.'"; $hd="'.$hd.'"; $thumb="'.$thumb.'"; ?>';
$myfile = fopen($movie, "w");
fwrite($myfile, $nd);
fclose($myfile);
include $movie;

$list0 = explode('</div>', explode('<div class="list">', $html)['1'])['0'];
$list0 = preg_replace('/\R+/', "\n", trim($list0));
$myfile1 = fopen($list, "w");
fwrite($myfile1, $list0);
fclose($myfile1);  

if (strpos($html, 'div class="list-tm"') == true) {
$list0 = explode('</div>', explode('<div class="list-tm">', $html)['1'])['0'];
$list0 = preg_replace('/\R+/', "\n", trim($list0));
$myfile1 = fopen($list_tm, "w");
fwrite($myfile1, $list0);
fclose($myfile1);    
}    

}

} else {
$html = curl('https://api-hh.blogspot.com/2023/04/'.$slug.'.html');
$info = explode('</div>', explode('<div class="home">', $html)['1'])['0'];
$thumb = explode('"', explode('src="', $info)['1'])['0'];
$noidung = explode('</td>', explode('max-width:1px;">', $info)['1'])['0'];
$phim = explode("<td>", $info);
$tenphim = explode("</td>", $phim['2'])['0'];
$tengoc = explode("</td>", $phim['3'])['0'];
$stt = explode("</td>", $phim['4'])['0'];
$nam = explode("</td>", $phim['5'])['0'];
$hd = explode("</td>", $phim['6'])['0'];
$quocgia = explode("</td>", $phim['7'])['0'];

$nd = '<?php $time="'.time().'"; $tenphim="'.$tenphim.'"; $tengoc="'.$tengoc.'"; $noidung="'.$noidung.'"; $quocgia="'.$quocgia.'"; $stt="'.$stt.'"; $nam="'.$nam.'"; $hd="'.$hd.'"; $thumb="'.$thumb.'"; ?>';
$myfile = fopen($movie, "w");
fwrite($myfile, $nd);
fclose($myfile);
include $movie;

$list0 = explode('</div>', explode('<div class="list">', $html)['1'])['0'];
$list0 = preg_replace('/\R+/', "\n", trim($list0));
$myfile1 = fopen($list, "w");
fwrite($myfile1, $list0);
fclose($myfile1);

if (strpos($html, 'div class="list-tm"') == true) {
$list0 = explode('</div>', explode('<div class="list-tm">', $html)['1'])['0'];
$list0 = preg_replace('/\R+/', "\n", trim($list0));
$myfile1 = fopen($list_tm, "w");
fwrite($myfile1, $list0);
fclose($myfile1);    
}

}
?>

<title><?php echo $tenphim;?> - <?php echo $tengoc;?> - Tập <?php echo $tap;?>  | oTVHAY.ORG</title>

    <meta name="description" content="Xem <?php echo $tenphim;?> - <?php echo $tengoc;?>  Thuyết minh, Lồng tiếng hay nhất tại oTVHAY.ORG" />
    <link rel="canonical" href="https://otvhay.org/<?php echo $idphim;?>.html" />
    <meta name="keywords" content="oTVHAY.ORG Thuyết Minh" />
    <meta name="author" content="oTVHAY.ORG" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="<?php echo $tenphim;?> - <?php echo $tengoc;?> (<?php echo $nc;?>) | oTVHAY.ORG" />
    <meta name="twitter:description" content="Xem <?php echo $tenphim;?> - <?php echo $tengoc;?> (<?php echo $nc;?>) Thuyết minh, Lồng tiếng hay nhất tại oTVHAY.ORG" />
    <meta name="twitter:image" content="<?php echo $thumb;?>" />
    <meta property="og:site_name" content="oTVHAY.ORG" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://otvhay.org/<?php echo $idphim;?>.html" />
    <meta property="og:title" content="<?php echo $tenphim;?> - <?php echo $tengoc;?> (<?php echo $nc;?>) | oTVHAY.ORG" />
    <meta property="og:image" content="<?php echo $thumb;?>" />
    <meta property="og:description" content="Xem <?php echo $tenphim;?> - <?php echo $tengoc;?> (<?php echo $nc;?>) Thuyết minh, Lồng tiếng hay nhất tại oTVHAY.ORG" />
    <meta property="og:locale" content="vi_VN" />
    <meta http-equiv="content-language" content="vi" />
    <meta itemprop="name" content="<?php echo $tenphim;?> - <?php echo $tengoc;?> (<?php echo $nc;?>) | oTVHAY.ORG" />
    <meta itemprop="description" content="Xem <?php echo $tenphim;?> - <?php echo $tengoc;?> (<?php echo $nc;?>) Thuyết minh, Lồng tiếng hay nhất tại oTVHAY.ORG" />
    <meta itemprop="image" content="<?php echo $thumb;?>" />

</head>    
    
    <div id="body-wrap" class="container">

        <div id="content">
            <div id="page-watch">
                <div class="block" id="movie">
                    <div class="blocktitle breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <div class="item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="/" title="oTVHAY.ORG" itemprop="item"><span itemprop="name">Trang Chủ</span></a>
                            <meta itemprop="position" content="1">
                        </div>
                        <div class="item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="/<?php echo $slug;?>.html" title="<?php echo $tenphim;?>" itemprop="item"><span itemprop="name"> / <?php echo $tenphim;?></span></a>
                            <meta itemprop="position" content="2">
                        </div>
                        <div class="item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="#" title="<?php echo $tenphim;?> - Tập" itemprop="item"><span itemprop="name">/ <font color="red">Tập <?php echo $tap;?></font></span></a>
                            <meta itemprop="position" content="3">
                        </div>

                    </div>
<?php
if (file_exists($list_tm)) {
$list0 = '
'.file_get_contents($list_tm);
$get_auto = explode('<br/>', explode("\n".$tap.'|', $list0)['1'])['0'];
$tm1 = explode('+++', $get_auto)['0'];
$tm2 = explode('+++', $get_auto)['1'];
$tm3 = explode('+++', $get_auto)['2'];
} 
if (file_exists($list)) { 
$list0 = '
'.file_get_contents($list);
$get_auto = explode('<br/>', explode("\n".$tap.'|', $list0)['1'])['0'];
$vs1 = explode('+++', $get_auto)['0'];
$vs2 = explode('+++', $get_auto)['1'];
$vs3 = explode('+++', $get_auto)['2'];
}   
?>
                    
                    <div class="blockbody">
                        <div id="media" style="position:relative">
                            <div class="player">
                                <div class="box-player" id="box-player">
                                    <div id="media-player"><iframe id="otvhay" width="100%" height="380px" src="<?php if ($tm1) { echo $tm1; } else { echo $vs1; } ?>" frameborder="0" scrolling="0" allowfullscreen></iframe></div>
                                </div>
                            </div>
                        </div>
<div class="action"><div class="like">
<span><?php $view = './view/'.$slug.'.php'; echo $view1 = file_get_contents($view) + mt_rand(1, 9); $myfile2 = fopen($view, "w"); fwrite($myfile2, $view1); fclose($myfile2); ?> Like</span></div>
<div class="remove-ad">Ghi Nhớ</div>
<a href="<?php if (($tap > 1) and ($tap != 'Full'))  { echo '/'.($tap-1).'/'.$slug.'.html'; } else { echo '#'; } ?>"><div title="Chuyển Tập Trước" class="auto-next">Sau</div></a>
<div style="background:green; color:white;" title="Đang Xem Tập <?php echo $tap; ?>" class="auto-next">Đang Xem Tập <?php echo $tap; ?></div>
<a href="<?php if (($tap > 0 ) and ($tap != 'Full')) { echo '/'.($tap+1).'/'.$slug.'.html'; } else { echo '#'; } ?>"><div title="Chuyển Tập Tiếp Theo" class="auto-next">Tiếp</div></a>
</div>                        
                        
                        <div class="player-bar">
                            <div class="list-server" id="list-server">
                                <div class="server-item">
<style>
.grayy{
    border: 1px solid#aaa;
    padding: 5px;
    border-radius: 3px;
    border: none;
    font-size: 15px;
    margin-left: 5px;
}
.redd {
    border: 1px solid#aaa;
    color: white;
    background-color: #d9534f;
    padding: 5px;
    border-radius: 3px;
    border: none;
    font-size: 15px;
    margin-left: 5px;
}
</style>
                                  
<div style="margin-left:10px;display: inline-block;">
<?php if ($tm1) { ?><button class="btn btn-sm btn-gray redd" onclick="document.getElementById('otvhay').src = '<?php echo $tm1; ?>'">G.PRO</button> <?php } ?>
<?php if ($tm2) { ?><button class="btn btn-sm btn-gray grayy" onclick="document.getElementById('otvhay').src = '<?php echo $tm2; ?>'">S.PRO</button> <?php } ?>
<?php if ($tm3) { ?><button class="btn btn-sm btn-gray grayy" onclick="document.getElementById('otvhay').src = '<?php echo $tm3; ?>'">Z.PRO</button> <?php } ?>
<?php if ($vs1) { ?><button class="btn btn-sm btn-gray <?php if(!$tm1) echo 'redd'; ?>" onclick="document.getElementById('otvhay').src = '<?php echo $vs1; ?>'">G.VS</button> <?php } ?>
<?php if ($vs2) { ?><button class="btn btn-sm btn-gray grayy" onclick="document.getElementById('otvhay').src = '<?php echo $vs2; ?>'">S.VS</button> <?php } ?>
<?php if ($vs3) { ?><button class="btn btn-sm btn-gray grayy" onclick="document.getElementById('otvhay').src = '<?php echo $vs3; ?>'">Z.VS</button> <?php } ?>
</div>
<br/><br/>                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
              
                <div class="block" id="detail">
                   
                    <div class="blockbody">

                        <div id="servers" class="serverlist">
                            <div class="player-cc">
                                <div></div>
                            </div>
                            <div class="server">
<script type="text/javascript">
function go(loc) {
    document.getElementById('otvhay').src = loc;
     }
var buttons = $('button').click(function(){
  buttons.not(this).addClass('grayy');
  buttons.not(this).removeClass('redd');
  $(this).addClass('redd');
});
</script>
<ul class="episodelist">
<?php
$list1 = preg_replace('~\\R~u', "\n", $list0);
$list1 = explode("\n", $list1);
foreach ($list1 as $list1) {
if (strpos($list1, '|') == true) {    
$get_tap = explode("|", $list1)['0'];    
?>                                    
<li><a href="/<?php echo $get_tap;?>/<?php echo $slug;?>.html" <?php if ($get_tap == $tap) { echo 'class="active"'; } ?> title="<?php echo $tenphim;?> - Tập <?php echo $get_tap;?>"><?php echo $get_tap;?></a>
                                    </li>
<?php } } ?>                                    
</ul>

                            </div>
                     
                        </div>
                    </div>
                </div>
            </div>



            
            
            <div class="block" id="comment">
                <div class="blocktitle">
                    <div class="title">Bình Luận</div>
                    <div class="tabs" data-target="#comment .tabs-content">
                        <div class="tab active" data-name="fb-comment">Facebook</div>
                        <?php if (file_exists($option)) { ?>
                                <div class="tab" data-name="edit">
                                    <h3>Edit</h3>
                                </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="blockbody tabs-content">
                    <div class="tab fb-comments" data-href="https://api-hh.blogspot.com/" data-numposts="5" data-width="100%" data-order-by="reverse_time" data-colorscheme=""></div>
                </div>
            </div>

        </div>
        

<div id="sidebar">
<?php
include 'includes/BXH.php';
?>            
<?php
include 'includes/MENU.php';
?>             
</div>



        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0&appId=3305755353076809&autoLogAppEvents=1" nonce="7PAzeko0"></script>
    </div>
<?php
include 'includes/footer.php';
?>
