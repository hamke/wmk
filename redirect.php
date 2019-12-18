<?php
if (isset($_GET['account'])) {
      $key = $_GET['query'];
      header("Location:http://weixin.sogou.com/weixin?type=1&query=$key");
  } else if (isset($_GET['post'])) {
        $key = $_GET['query'];
        header("Location:http://weixin.sogou.com/weixin?type=2&query=$key");
      }
?>
