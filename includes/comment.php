<?php $data_comment = './comment/'.$slug.'.txt';?>
<div class="block" id="comment">
<div class="blocktitle tab-wrapper">
<div class="title">Bình Luận : <font color="red"><?php echo $tenphim;?></font></div>
</div>                
<link href="/includes/comment.css" type='text/css' rel='stylesheet'/>




<div class="blockbody tabs-content">
<div class="comment">

        <div id="local_cmt" class="tab-item-cmt" style="display: block;"><div style="padding:15px 0;border-bottom:1px solid#ddd;margin-bottom:15px;font-weight:700"><?php if (file_exists($data_comment)) { echo $lines = count(file($data_comment)); } else { echo '0'; };?> bình luận</div>

<form id="comment-form">
<div class="comment-editor relative flex flex-column margin-t-10">
<?php
session_start();
?>
<div style="background: #fffddb;color: #a94442;padding: 15px;margin:0px">
<select name="name" class="form-control" style="height: 35px;width: 100%;">
<?php echo $_SESSION['name']; 

if ($_SESSION['name']) {?>
<option value="<?php echo $_SESSION['name']; ?>"><?php echo $_SESSION['name']; ?></option>
<?php } else {?>
<option value="Khách Ẩn Danh">Bạn Thích Nhân Vật Nào</option>
<?php }?>
<option value="Mỹ Đỗ Toa">Mỹ Đỗ Toa</option>
<option value="Nam Cung Uyển">Nam Cung Uyển</option>
<option value="Nguyệt Thiền">Nguyệt Thiền</option>
<option value="Liễu Thần">Liễu Thần</option>
<option value="Thạch Hạo">Thạch Hạo</option>
<option value="Hàn Lập">Hàn Lập</option>
<option value="Tiêu Viêm">Tiêu Viêm</option>
<option value="Đường Tam">Đường Tam</option>
<option value="SonGoKu">SonGoKu</option>
<option value="Vegeta">Vegeta</option>
<option value="Piccolo">Piccolo</option>
<option value="Monkey D Luffy">Monkey D Luffy</option>
</select>    
</div>
<input type="hidden" name="pid" value="<?php echo $slug;?>">
<br/>
<textarea class="content-of-comment" name="comment" placeholder="Viết bình luận tại đây nhé !" rows="1" maxlength="1000" style="width:none;border: 1px solid#ffc03e;"></textarea>
<br/>
<?php if ((time() - $_SESSION['chat'] ) < 31) { echo '<div align="center"><button class="add-comment button-cmt bg-violet color-black" disabled>Bình Luận Sau 30 Giây</button></div>'; } else { echo '<div align="center"><button type="submit" class="add-comment button-cmt bg-violet color-black">Gửi Bình Luận</button></div>'; } ?>
</form>

<br/>
<div id="new_comments">
<script>
  document.getElementById('comment-form').addEventListener('submit', function(e) {
    e.preventDefault();

    var form = new FormData(this);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/comment.php', true);
    xhr.onreadystatechange = function() {
      if(xhr.readyState == 4 && xhr.status == 200) {
        // comment added successfully
        document.getElementById('new_comments').innerHTML += xhr.responseText + '<br>';
      }
    };
    $('#comment-form')[0].reset();
    xhr.send(form);
  });
</script>
</div> 

<div id="cmt-load-content">
<div id="cmt_45698" class="comment-main user-comment cmt-45698 pindiv">
  <div class="flex bg-comment">
    <div class="left">
      <div class="avatar">
        <img src="https://cdn.jsdelivr.net/gh/hh-api/img@main/Khách Ẩn Danh.jpg" class="avatar-main">
        <img src="https://dataqq.net/store/avatar/s14.gif?3" class="avatar-level">
        <span class="member level-19">
          <span data-level="19">Cấp <?php echo mt_rand(00, 99); ?></span>
          <span class="progress-bar" style="width:<?php echo mt_rand(00, 99); ?>%"></span>
        </span>
      </div>
    </div>
    <div class="right">
      <div class="flex flex-column">
        <div class="flex flex-space-auto">
          <div class="flex flex-hozi-center"><i style="font-size:7px;color:#3bd63b;margin-right: 3px;" class="fa fa-circle" aria-hidden="true"></i> <span class="nickname_flex"><span class="vip_icon vip_icon_1"></span><span onclick="user_fastinfo(this)" data-userid="1" class="nickname2">Admin Xinh Gái <i class="fa fa-check-circle" aria-hidden="true"></i></span></span> <i class="fa fa-thumb-tack" aria-hidden="true" style="color:red;padding:0 10px"></i> </div>
          <div class="user_manage" onclick="sideuser(this)" data-id="45698">
            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
			<div class="user_manage_dropdown user_manage_dropdown45698" style="display: none;">
			          					  
			</div>
          </div>
        </div>
        <div class="content" style="padding: 5px 5px;">Hãy bình luận văn minh lịch sự nhé các bạn !</div>
        <div class="flex fs-12 toolbarr">
          <label>
          Trả lời
          </label>
          <span class="cmt-time color-gray">1 phút trước</span>
        </div>
      </div>
    </div>
  </div>
</div>

<?php 
$get_comment = file_get_contents($data_comment);
$get_comment = preg_replace('~\\R~u', "\n", $get_comment);
$get_comment = explode("\n", $get_comment);
foreach ($get_comment as $get_comment) {
if(strlen($get_comment) >1) {
$ten_comment = explode("|", $get_comment)['0']; 
$nd_comment = explode("|", $get_comment)['1'];
$time_comment = explode("|", $get_comment)['2'];
?>

<div id="cmt_291450" class="comment-main user-comment cmt-291450">
  <div class="flex bg-comment">
    <div class="left">
      <div class="avatar">
        <img src="https://cdn.jsdelivr.net/gh/hh-api/img@main/<?php echo $ten_comment;?>.jpg" class="avatar-main">
        <img src="https://cdn.jsdelivr.net/gh/hh-api/img@main/s<?php echo $level = mt_rand(1, 9); ?>.gif" class="avatar-level">
        <span class="member level-<?php echo $level = mt_rand(00, 20); ?>">
          <span data-level="<?php echo $level; ?>">Cấp <?php echo $level; ?></span>
          <span class="progress-bar" style="width:<?php echo mt_rand(00, 99); ?>%"></span>
        </span>
      </div>
    </div>
    <div class="right">
      <div class="flex flex-column">
        <div class="flex flex-space-auto">
          <div class="flex flex-hozi-center"><i style="font-size:7px;color:#3bd63b;margin-right: 3px;" class="fa fa-circle" aria-hidden="true"></i> <span class="nickname_flex"><span class="vip_icon vip_icon_<?php echo $level = mt_rand(1, 9); ?>"></span><span onclick="user_fastinfo(this)" data-userid="90464" class="nickname0"><?php echo $ten_comment;?></span></span>  </div>
          <div class="user_manage" onclick="sideuser(this)" data-id="291450">
            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
			<div class="user_manage_dropdown user_manage_dropdown291450" style="display: none;">
			          					  
			</div>
          </div>
        </div>
        <div class="content" style="padding: 5px 5px;"><?php echo $nd_comment;?></div>
        <div class="flex fs-12 toolbarr">
          <label>Trả lời</label>
          <span class="cmt-time color-gray"><?php echo date('Y-m-d H:i:s', $time_comment);?></span>
        </div>
      </div>
    </div>
  </div>

</div>

<?php }} ?>


</div>
</div>
</div>
</div>
</div>               
</div>
