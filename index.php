<?php
include 'includes/header.php';
header('Cache-Control: max-age=600');
$page = $_GET['page'];
$type = $_GET['type'];
$type = str_replace(' ', '%20', $type);
?>
<title><?php echo $slogan;?></title>
<meta name="description" content="<?php echo $description;?>" />
<link rel="canonical" href="###" />
<meta property="og:title" content="<?php echo $slogan;?>" />
<meta property="og:description" content="<?php echo $description;?>" />
<meta property="og:url" content="###" />
<meta property="og:image" content="https://media.discordapp.net/attachments/924155580124385280/1072038465899859999/zuighe4.png" />

<div id="body-wrap" class="container">
<div id="content">

<div class="block" id="movie-update">
<div class="blocktitle">
<h2 class="title">Phim mới cập nhật</h2>
<div class="types">

<a class="btn" <?php if (!$type) { echo 'style="color: #fff; background:#26a7ed"'; } ?> href="/index.php" title="Toàn Bộ">Toàn Bộ</a>
<a class="btn" <?php if ($type=='TQ') { echo 'style="color: #fff; background:#26a7ed"'; } ?> href="/index.php?type=TQ" title="Hoạt Hình Trung Quốc">Trung Quốc</a>
<a class="btn" <?php if ($type=='NB') { echo 'style="color: #fff; background:#26a7ed"'; } ?> href="/index.php?type=NB" title="Hoạt Hình Nhật Bản">Nhật Bản</a>
<a class="btn" <?php if ($type=='AM') { echo 'style="color: #fff; background:#26a7ed"'; } ?> href="/index.php?type=AM" title="Hoạt Hình Âu Mỹ">Âu Mỹ</a></div>

</div>
<div class="blockbody list" id="list-movie-update">
<div class="tab all">
<ul class="list-film">
<?php 
if ($page > 1) {
$html = curl('https://www.blogger.com/feeds/5770045855602829491/posts/default?max-results='.(20*($page - 1)).'&start-index='.(20*($page - 1) + 1));
} elseif ($type) {
$html = file_get_contents('https://www.blogger.com/feeds/5770045855602829491/posts/default/-/'.$type);    
} else {
$html = curl('https://www.blogger.com/feeds/5770045855602829491/posts/default?max-results=20');    
}
$all_links = explode('div class="home"', $html);
foreach ($all_links as $all_links) {
if (strpos($all_links, 'div class="list"') == true) {  
$url = explode("'", explode("window.location='/", $all_links)['1'])['0'];
$slug = explode('.html', explode('/', $url)['2'])['0'];
$thumb = explode('"', explode('src="', $all_links)['1'])['0'];
$phim = explode("&lt;td&gt;", $all_links);
$tenphim = explode("&lt;/td&gt;", $phim['2'])['0'];
$tengoc = explode("&lt;/td&gt;", $phim['3'])['0'];
$stt = explode("&lt;/td&gt;", $phim['4'])['0'];
$nam = explode("&lt;/td&gt;", $phim['5'])['0'];
$hd = explode("&lt;/td&gt;", $phim['6'])['0'];
$quocgia = explode("&lt;/td&gt;", $phim['7'])['0'];
?>

    <li>
                                    <div class="inner">
<a href="/<?php echo $slug; ?>.html" title="<?php echo $tenphim; ?>"><img class="lazy" src="<?php echo $thumb; ?>" data-original="<?php echo $thumb; ?>" alt="<?php echo $tenphim; ?>" />
                                    </a>
<div class="info">
<div class="name"><a href="/<?php echo $slug; ?>.html" title="<?php echo $tenphim; ?>"><span class="hide">Xem phim </span><?php echo $tenphim; ?></a>
                                        </div>
<div class="name2"><?php echo $tengoc; ?></div>
                                    </div>
                                    <div class="status"><?php if (preg_match('~[0-9]+~', $stt)) {
echo 'Tập '.$stt; } else { echo 'Full '.$stt; } ?></div>
                                    <div class="stats">
<div class="year"><?php echo $nam; ?></div><span class="liked"><?php $view = './view/'.$slug.'.php'; echo number_format(file_get_contents($view), 0, '', '.'); ?></span>
                                    </div>
                                </div>
    </li>
<?php } } ?>     
</ul>

<div class="more"><a href="#" title="Phim mới"><strong>Phim Mới</strong></a> »</div>
</div>
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

<script type="text/javascript">
HHAPI.Home.init();
</script>
</div>
<div id="footer">
<div class="block2">
<div class="container">
<div class="colweb">
<a href="https://TVHAY.ORG" title="TVHAY.ORG Xem Phim Hoạt Hình Thuyết Minh, Lồng Tiếng" target="_blank"><font color="red">TVHAY.ORG</font></a> Với mong muốn mang đến dịch vụ phim hoạt hình thuyết minh, lồng tiếng nhanh nhất, tốt nhất. </div>
<div class="colright">
<div class="copyright">
</div>
</div>
</div>
</div>
</div>
</body>
</html>
