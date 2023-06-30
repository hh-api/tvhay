<?php
session_start();
ob_start('minify_output');
  if(isset($_POST['pid']) && isset($_POST['comment'])) {
    $post_id = $_POST['pid'];
    $name = $_POST['name'];
    $comment = $_POST['comment'];

if ( (strlen($comment) > 2) and ((time() - $_SESSION['chat'] ) > 30) )	{
$data_comment = './comment/'.$post_id.'.txt';

file_put_contents($data_comment, $name."|".$comment."|".time()."\r\n".file_get_contents($data_comment));
$_SESSION['chat'] = time();
$_SESSION['name'] = $name;
}  
?>

<div class="user-comment" style="background: #e1f4ff;border: 1px solid #bce7ff;">
  <div class="flex bg-comment">
    <div class="left center">
      <div class="avatar">
    <img src="https://cdn.jsdelivr.net/gh/hh-api/img@main/<?php echo $name;?>.jpg" class="avatar-main">
    <img src="https://dataqq.net/store/avatar/s14.gif" class="avatar-level">
      </div>
    </div>
    <div class="right">
      <div class="flex flex-column">
        <div class="flex flex-space-auto">
          <div class="flex flex-hozi-center">
          <span class="nickname_flex">
          <span class="vip_icon vip_icon_3"></span>
          <span class="nickname0"><?php echo $name; ?></span>
          </div>
        </div>
        <div class="content"><?php echo $comment; ?></div>
        <div class="flex fs-12 toolbarr">
          <label>
            <a class="reply_cmt">Trả lời</a>
          </label>
          <span class="cmt-time color-gray">1 phút trước</span>
        </div>
      </div>
    </div>
  </div> 
</div>

<?php } ?>
