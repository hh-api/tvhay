<?php
error_reporting(E_ERROR | E_PARSE);
function curl($url){
		$ch = @curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		$head[] = "Connection: keep-alive";
		$head[] = "Keep-Alive: 300";
		$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
		$head[] = "Accept-Language: en-us,en;q=0.5";
		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36');
		curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
		$page = curl_exec($ch);
		curl_close($ch);
		return $page;
}
$slogan = 'Xem Hoạt Hình 3D, Anime Nhanh Nhất';
$description = 'Web xem phim anime online tiếng việt, phim anime vietsub, tổng hợp phim hoạt hình nhật bản mới nhất & hay, hoạt hình trung quốc việt hoá, hoạt hình 3D';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi" lang="vi">
<head>
<meta charset="utf-8">
<meta name="robots" content="index">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="robots" content="index,follow" />
<meta http-equiv="content-language" content="vi" />
</head>
<link href="/includes/main.css" type='text/css' rel='stylesheet' media='all' />
<script src="/includes/tvhay.js" type="text/javascript"></script>
<body>
<div id="wrapper">
<div id="header" class="container">
<div id="logo">
<a href="/" title="Trang Chủ"></a>
</div>
<div id="sign"></div>
<form id="search" action="/search.php?s=">
<input type="text" name="s" class="keyword" autocomplete="off" placeholder="Gõ Tên Phim Cần Tìm...">
<input type="submit" value="" class="submit">
</form>
<div id="nav">
<ul class="menu">
<li class="menu-item menu-item-type-custom menu-item-object-custom web">
<h3><a href="/">💒 Trang Chủ</a></h3>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children navhide">
<h3><a>Thể loại</a></h3>
<ul class="sub-menu" style="display: none;">
<li class="menu-item menu-item-type-taxonomy menu-item-object-category">
<h3><a href="/index.php?type=Cổ Trang">Cổ Trang</a></h3>
</li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category">
 <h3><a href="/index.php?type=Viễn Tưởng">Viễn Tưởng</a></h3>
</li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category">
<h3><a href="/index.php?type=Trùng Sinh">Trùng Sinh</a></h3>
</li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category">
<h3><a href="/index.php?type=Luyện Cấp">Luyện Cấp</a></h3>
</li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category">
<h3><a href="/index.php?type=Xuyên Không">Xuyên Không</a></h3>
</li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category">
<h3><a href="/index.php?type=Tình Yêu">Tình Yêu</a></h3>
</li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category">
<h3><a href="/index.php?type=Kinh Dị">Kinh Dị</a></h3>
</li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category">
<h3><a href="/index.php?type=Hiện Đại">Hiện Đại</a></h3>
</li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category">
<h3><a href="/index.php?type=Hệ Thống">Hệ Thống</a></h3>
</li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category">
<h3><a href="/index.php?type=Tương Lai">Tương Lai</a></h3>
</li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category">
<h3><a href="/index.php?type=Phiêu Lưu">Phiêu Lưu</a></h3>
</li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category">
<h3><a href="/index.php?type=Chiến Tranh">Chiến Tranh</a></h3>
</li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category">
<h3><a href="/index.php?type=Thần Thoại">Thần Thoại</a></h3>
</li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category">
<h3><a href="/index.php?type=Âm Nhạc">Âm Nhạc</a></h3>
</li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category">
<h3><a href="/index.php?type=Khoa Học">Khoa Học</a></h3>
</li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category">
<h3><a href="/index.php?type=Con Gái">Con Gái</a></h3>
</li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children navhide">
<h3><a>Quốc gia</a></h3>
<ul class="sub-menu" style="display: none;">
<li class="menu-item menu-item-type-taxonomy menu-item-object-quoc-gia">
<h3><a href="/index.php?type=TQ">Trung Quốc</a></h3>
</li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-quoc-gia">
<h3><a href="/index.php?type=NB">Nhật Bản</a></h3>
 </li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-quoc-gia">
<h3><a href="/index.php?type=AM">Âu Mỹ</a></h3>
</li>
</li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page">
<h3><a title="Phim bộ mới" href="/index.php?type=Series">Phim Bộ</a></h3>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page">
<h3><a title="Phim lẻ mới" href="/index.php?type=Movie">Phim Lẻ</a></h3>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page">
<h3><a title="Đã Lưu" href="#">Đã Lưu</a></h3>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page">
<h3><a title="Lịch Sử Xem" href="#">Lịch Sử Xem</a></h3>
</li>
</ul>
</div>
</div>
</div>
