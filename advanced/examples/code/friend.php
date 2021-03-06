<?php
/**
 * UCenter 應用程序開發 Example
 *
 * 列出好友的 Example 代碼
 * 使用到的接口函數：
 * uc_friend_totalnum()	必須，返回好友總數
 * uc_friend_ls()	必須，返回好友列表
 * uc_friend_delete()	必須，刪除好友
 * uc_friend_add()	必須，添加好友
 */

if(empty($_POST['submit'])) {
	$num = uc_friend_totalnum($Example_uid);
	echo '您有 '.$num.' 個好友';
	echo '<form method="post" action="'.$_SERVER['PHP_SELF'].'?example=friend">';
	$friendlist = uc_friend_ls($Example_uid, 1, 999, $num);
	if($friendlist) {
		foreach($friendlist as $friend) {
			echo '<input type="checkbox" name="delete[]" value="'.$friend['friendid'].'">';
			switch($friend['direction']) {
				case 1: echo '[關注]';break;
				case 3: echo '[好友]';break;
			}
			echo $friend['username'].':'.$friend['comment'].'<br>';
		}
	}
	echo '添加好友:<input name="newfriend"> 說明:<input name="newcomment"><br>';
	echo '<input name="submit" type="submit"> ';
	echo '</form>';
} else {
	if(!empty($_POST['delete']) && is_array($_POST['delete'])) {
		uc_friend_delete($Example_uid, $_POST['delete']);
	}
	if($_POST['newfriend'] && $friendid = uc_get_user($_POST['newfriend'])) {
		uc_friend_add($Example_uid, $friendid[0], $_POST['newcomment']);
	}
	echo '好友資料已更新<br><a href="'.$_SERVER['PHP_SELF'].'?example=friend">繼續</a>';
	exit;
}


?>