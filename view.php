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
header('Cache-Control: max-age=500');
$slug = $_GET['phim'];
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


<title><?php echo $tenphim;?> - <?php echo $tengoc;?> | <?php echo $slogan;?></title>
<meta name="description" content="<?php echo $noidung;?>" />
    <meta name="keywords" content="<?php echo $slogan;?>" />
    <meta name="author" content="hhtm.xyz" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="<?php echo $tenphim;?> - <?php echo $tengoc;?> | <?php echo $slogan;?>" />
    <meta name="twitter:description" content="<?php echo $noidung;?>" />
    <meta name="twitter:image" content="<?php echo $thumb;?>" />
    <meta property="og:site_name" content="<?php echo $slogan;?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="/<?php echo $idphim;?>.html" />
    <meta property="og:title" content="<?php echo $tenphim;?> - <?php echo $tengoc;?> | <?php echo $slogan;?>" />
    <meta property="og:image" content="<?php echo $thumb;?>" />
    <meta property="og:description" content="Xem <?php echo $tenphim;?> - <?php echo $tengoc;?> Thuyết Minh, Lồng Tiếng, Vietsub Nhanh Nhất" />
    <meta property="og:locale" content="vi_VN" />
    <meta http-equiv="content-language" content="vi" />
    <meta itemprop="name" content="<?php echo $tenphim;?> - <?php echo $tengoc;?> | <?php echo $slogan;?>" />
    <meta itemprop="description" content="<?php echo $noidung;?>" />
    <meta itemprop="image" content="<?php echo $thumb;?>" />
    <link rel="canonical" href="/<?php echo $slug;?>.html" />
</head>   
   
    <div id="body-wrap" class="container">

        <div id="content">
            <div class="block">
                <div class="blocktitle breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <div class="item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="/" itemprop="item"><span itemprop="name">Trang Chủ</span></a>
                            <meta itemprop="position" content="1">
                        </div>
                        <div class="item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="/<?php echo $slug;?>.html" title="<?php echo $tenphim;?>" itemprop="item"><span itemprop="name"> / <font color="red"><?php echo $tenphim;?></font></span></a>
                            <meta itemprop="position" content="2">
                        </div>
                </div>
                <div class="blockbody" id="page-info">
                    <div class="info">
                        <div class="poster">
                            <a href="/<?php echo $slug;?>.html" title="<?php echo $tenphim;?>"><img src="<?php echo $thumb;?>" alt="<?php echo $tenphim;?> - <?php echo $tengoc;?>">
                            </a>
                        </div>
                        <div class="title fr"><?php echo $tenphim;?></div>
                        <div class="name2 fr">
                            <h2><?php echo $tengoc;?></h2> <span class="year"> (<?php echo $nam;?>)</span>
                        </div>
                        <div class="dinfo fr">
                            <dl class="col1"> <dt>Status:</dt>
                                <dd class="status">Tập <?php echo $stt;?></dd>
                                <dt>Quốc Gia:</dt>
                                <dd><a href="/index.php?type=<?php echo $quocgia;?>" title="Phim <?php echo $quocgia;?>"><?php if ($quocgia =='NB') { echo 'Nhật Bản'; } elseif ($quocgia =='TQ') { echo 'Trung Quốc'; }?></a>
                                </dd>
                                <dt>Thể Loại:</dt>
                                <dd>N/A</dd>
                            </dl>
                            <dl class="col2"><dt>Định Dạng:</dt>
                                <dd><?php echo $hd; ?></dd><dt>Thời Lượng:</dt>
                                <dd>N/A</dd>
                                <dt>Lượt Xem:</dt>
                                <dd><?php $view = './view/'.$slug.'.php'; echo $view1 = file_get_contents($view) + mt_rand(1, 9); $myfile2 = fopen($view, "w"); fwrite($myfile2, $view1); fclose($myfile2); ?> 💕</dd>
                            </dl>
                        </div>
                        <div class="btn-groups fr">
<?php
$list0 = file_get_contents($list);
$first = explode('|', $list0)['0'];
?>                            
                            <a href="/<?php echo $first; ?>/<?php echo $slug; ?>.html" class="btn-watch" title="Xem phim"></a>
                        </div>
                    </div>
                    
                    
                    
                    <div class="detail">
                        <div class="blocktitle">
                            <div class="tabs" data-target="#info-film">
                                <div class="tab active" data-name="text">
                                    <h3>Danh Sách Tập</h3>
                                </div>
                            </div>
                        </div>
                        <div class="tabs-content" id="info-film" style="text-align: justify;">
                            <div class="tab text">
<ul class="episodelist" style="margin-left:0px; border-bottom: 1px solid #e7e7e7;">
<?php
$list1 = preg_replace('~\\R~u', "\n", $list0);
$list1 = explode("\n", $list1);
foreach ($list1 as $list1) {
if (strpos($list1, '|') == true) {    
$get_tap = explode("|", $list1)['0'];    
?>                                    
<li><a href="/<?php echo $get_tap;?>/<?php echo $slug;?>.html" title="<?php echo $tenphim;?> - Tập <?php echo $listtap;?>"><?php echo $get_tap;?></a>
                                    </li>
<?php } } ?>                                    
                                </ul>
                            </div>
                        </div>
                    </div>                    

                    <div class="detail">
                        <div class="blocktitle">
                            <div class="tabs" data-target="#info-film">
                                <div class="tab active" data-name="text">
                                    <h3>Thông Tin Phim</h3>
                                </div>
                            </div>
                        </div>
                        <div class="tabs-content" id="info-film" style="text-align: justify;">
                            <div class="tab text">
                                <?php echo $noidung;?>
                            </div>
                        </div>
                    </div>
                </div>
                
<?php
include 'includes/comment.php';
?>
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
</div>
      
<?php
include 'includes/footer.php';
?>
