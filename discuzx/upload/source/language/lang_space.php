<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_space.php 17060 2010-09-20 02:41:46Z cnteacher $
 */

$lang = array(
	'hour' => '小時',
	'before' => '前',
	'minute' => '分鐘',
	'second' => '秒',
	'now' => '現在',
	'dot' => '、',
	'poll' => '投票',
	'blog' => '日誌',
	'friend_group_default' => '其他',
	'friend_group_1' => '通過本站認識',
	'friend_group_2' => '通過活動認識',
	'friend_group_3' => '通過朋友認識',
	'friend_group_4' => '親人',
	'friend_group_5' => '同事',
	'friend_group_6' => '同學',
	'friend_group_7' => '不認識',
	'friend_group' => '自定義',
	'wall' => '留言',
	'pic_comment' => '圖片評論',
	'blog_comment' => '日誌評論',
	'clickblog' => '日誌表態',
	'clickpic' => '圖片表態',
	'clickthread' => '話題表態',
	'share_comment' => '分享評論',
	'share_notice' => '分享',
	'doing_comment' => '記錄回復',
	'friend_notice' => '好友',
	'poll_comment' => '投票評論',
	'poll_invite' => '投票邀請',
	'default_albumname' => '默認相冊',
	'credit' => '積分',
	'credit_unit' => '個',
	'man' => '男',
	'woman' => '女',
	'gender_0' => '保密',
	'gender_1' => '男',
	'gender_2' => '女',
	'year' => '年',
	'month' => '月',
	'day' => '日',
	'unmarried' => '單身',
	'married' => '非單身',
	'hidden_username' => '匿名',
	'gender' => '性別',
	'age' => '歲',
	'comment' => '評論',
	'reply' => '回復',
	'from' => '來自',
	'anonymity' => '匿名',
	'viewmore' => '查看更多',
	'constellation_1' => '水瓶座',
	'constellation_2' => '雙魚座',
	'constellation_3' => '白羊座',
	'constellation_4' => '金牛座',
	'constellation_5' => '雙子座',
	'constellation_6' => '巨蟹座',
	'constellation_7' => '獅子座',
	'constellation_8' => '處女座',
	'constellation_9' => '天秤座',
	'constellation_10' => '天蠍座',
	'constellation_11' => '射手座',
	'constellation_12' => '摩羯座',
	'zodiac_1' => '鼠',
	'zodiac_2' => '牛',
	'zodiac_3' => '虎',
	'zodiac_4' => '兔',
	'zodiac_5' => '龍',
	'zodiac_6' => '蛇',
	'zodiac_7' => '馬',
	'zodiac_8' => '羊',
	'zodiac_9' => '猴',
	'zodiac_10' => '雞',
	'zodiac_11' => '狗',
	'zodiac_12' => '豬',

	'credits' => '積分',
	'usergroup' => '用戶組',
	'friends' => '好友',
	'blogs' => '日誌',
	'threads' => '主題',
	'albums' => '相冊',
	'sharings' => '分享',
	'space_views' => '已有 <strong class="xi1">{views}</strong> 人來訪過',
	'views' => '空間查看數',
	'block1' => '自定義模塊1',
	'block2' => '自定義模塊2',
	'block3' => '自定義模塊3',
	'block4' => '自定義模塊4',
	'block5' => '自定義模塊5',
	'blockdata' => array('profile' => '個人資料', 'doing' => '記錄', 'feed' => '動態',
				'blog' => '日誌', 'album' => '相冊', 'friend' => '好友',
				'visitor' => '最近訪客', 'wall' => '留言板', 'group' => '我的'.$_G[setting][navs][3][navname],
				'share' => '分享', 'thread' => '主題', 'group'=>$_G[setting][navs][3][navname],'music'=>'音樂盒',
				'statistic' => '統計信息',
				'block1'=>'自由模塊1', 'block2'=>'自由模塊2', 'block3'=>'自由模塊3',
				'block4'=>'自由模塊4','block5'=>'自由模塊5'),

	'block_title' => '<div class="blocktitle title"><span>{bname}</span>{more}</div>',
	'blog_li' => '<dl class="bbda cl"><dt><a href="home.php?mod=space&do=blog&uid={uid}&id={blogid}" target="_blank">{subject}</a><span class="xg2 xw0"> {date}</span></dt>',
	'blog_li_img' => '<dd class="atc"><a href="home.php?mod=space&do=blog&uid={uid}&id={blogid}" target="_blank"><img src="{src}" class="summaryimg" /></a></dd>',
	'blog_li_ext' => '<dd class="xg1"><a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank">({viewnum})次閱讀</a><span class="pipe">|</span><a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}#comment" target="_blank">({replynum})個評論</a></dd>',
	'album_li' => '<li><div class="c"><a href="home.php?mod=space&uid={uid}&do=album&id={albumid}" target="_blank"><img src="{src}" alt="{albumname}" width="120" /></a></div><p><a href="home.php?mod=space&uid={uid}&do=album&id={albumid}" target="_blank" title="{albumname]}">{albumname}</a></p><span>圖片數:({picnum})</span><span>更新 {date}</span></li>',
	'doing_li' => '<li>{message}</li><br />{date} {from} 回復({replynum})',
	'visitor_anonymity' => '<div class="avatar48"><img src="image/magic/hidden.gif" alt="匿名"></div><p>匿名</p>',
	'visitor_list' => '<a href="home.php?mod=space&uid={uid}" target="_blank"><em class="{class}"></em>{avatar}</a><p><a href="home.php?mod=space&uid={uid}" title="{username}">{username}</a></p>',
	'wall_form' => '<div class="space_wall_post">
						<form action="home.php?mod=spacecp&ac=comment" id="quickcommentform_{uid}" name="quickcommentform_{uid}" method="post" autocomplete="off" onsubmit="ajaxpost(\'quickcommentform_{uid}\', \'return_commentwall_{uid}\');doane(event);">
							'.($_G['uid'] ? '<span id="message_face" onclick="showFace(this.id, \'comment_message\');return false;" style="cursor: pointer;"><img src="static/image/common/facelist.gif" alt="facelist" class="mbn vm" /></span>
							<br /><textarea name="message" id="comment_message" class="pt" rows="3" cols="60" onkeydown="ctrlEnter(event, \'commentsubmit_btn\');" style="width: 90%;"></textarea>
							<input type="hidden" name="refer" value="home.php?mod=space&uid={uid}" />
							<input type="hidden" name="id" value="{uid}" />
							<input type="hidden" name="idtype" value="uid" />
							<input type="hidden" name="commentsubmit" value="true" />' :
							'<div class="pt hm">你需要登錄後才可以留言 <a href="member.php?mod=logging&action=login" onclick="showWindow(\'login\', this.href)" class="xi2">登錄</a> | <a href="member.php?mod='.$_G['setting']['regname'].'" onclick="showWindow(\'register\', this.href)" class="xi2">'.$_G['setting']['reglinkname'].'</a></div>').'
							<p class="ptn"><button '.($_G['uid'] ? 'type="submit"' : 'type="button" onclick="showWindow(\'login\', \'member.php?mod=logging&action=login&guestmessage=yes\')"').' name="commentsubmit_btn" value="true" id="commentsubmit_btn" class="pn"><strong>留言</strong></button></p>
							<input type="hidden" name="handlekey" value="commentwall_{uid}" />
							<span id="return_commentwall_{uid}"></span>
							<input type="hidden" name="formhash" value="{FORMHASH}" />
						</form>'.
						($_G['uid'] ? '<script type="text/javascript">
							function succeedhandle_commentwall_{uid}(url, msg, values) {
								wall_add(values[\'cid\']);
							}
						</script>' : '').'
					</div>',
	'wall_li' => '<dl class="bbda cl" id="comment_{cid}_li">
				<dd class="m avt">
				{author_avatar}
				</dd>
				<dt>
				{author}
				<span class="y xw0">{op}</span>
				<span class="xg1 xw0">{date}</span>
				<span class="xgl">{moderated}</span>
				</dt>
				<dd id="comment_{cid}">{message}</dd>
				</dl>',
	'wall_more' => '<dl><dt><span class="y xw0"><a href="home.php?mod=space&uid={uid}&do=wall">&raquo; 查看全部</a></span><dt></dl>',
	'wall_edit' => '<a href="home.php?mod=spacecp&ac=comment&op=edit&cid={cid}&handlekey=editcommenthk_{cid}" id="c_{cid}_edit" onclick="showWindow(this.id, this.href, \'get\', 0);">編輯</a> ',
	'wall_del' => '<a href="home.php?mod=spacecp&ac=comment&op=delete&cid={cid}&handlekey=delcommenthk_{cid}" id="c_{cid}_delete" onclick="showWindow(this.id, this.href, \'get\', 0);">刪除</a> ',
	'wall_reply' => '<a href="home.php?mod=spacecp&ac=comment&op=reply&cid={cid}&handlekey=replycommenthk_{cid}" id="c_{cid}_reply" onclick="showWindow(this.id, this.href, \'get\', 0);">回復</a>',
	'group_li' => '<li><a href="forum.php?mod=group&fid={groupid}" target="_blank"><img src="{icon}" alt="{name}" /></a><p><a href="forum.php?mod=group&fid={groupid}" target="_blank">{name}</a></p></li>',
	'poll_li' => '<div class="c z"><img alt="poll" src="static/image/feed/poll.gif" alt="poll" class="t" /><h4 class="h"><a target="_blank" href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a></h4><div class="mtn xg1">發佈時間：{dateline}</div></div>',
	'music_no_content' => '還沒有設置音樂盒的內容',
	'block_profile_diy' => '裝扮空間',
	'block_profile_wall' => '查看留言',
	'block_profile_avatar' => '編輯頭像',
	'block_profile_update' => '更新資料',
	'block_profile_wall_to_me' => '給我留言',
	'block_profile_friend_add' => '加為好友',
	'block_profile_friend_ignore' => '解除好友',
	'block_profile_poke' => '打個招呼',
	'block_profile_sendmessage' => '發送消息',
	'block_doing_reply' => '回復',
	'block_doing_no_content' => '現在還沒有記錄。',
	'block_view_noperm' => '無權查看',
	'click_play' => '點擊播放',
	'click_view' => '點擊查看',
	'feed_view_only' => '只看此類動態',

	'export_pm' => '導出短消息',
	'pm_export_header' => 'Discuz! X 短消息記錄(此消息記錄為文本格式，不支持重新導入)',
	'pm_export_touser' => '消息對像: {touser}',
	'all' => '全部',
	'manage_post' => '管理帖子',
	'manage_album' => '管理相冊',
	'manage_blog' => '管理日誌',
	'manage_comment' => '管理評論',
	'manage_doing' => '管理記錄',
	'manage_feed' => '管理動態',
	'manage_group_prune' => '群組帖子',
	'manage_group_threads' => '群組主題',
	'manage_share' => '管理分享',
	'manage_pic' => '管理圖片',

	'sb_blog' => '{who}的日誌',
	'sb_album' => '{who}的相冊',
	'sb_space' => '{who}的空間',
	'sb_feed' => '{who}的動態',
	'sb_doing' => '{who}的記錄',
	'sb_sharing' => '{who}的分享',
	'sb_friend' => '{who}的好友',
	'sb_wall' => '{who}的留言板',
	'sb_profile' => '{who}的個人資料',
	'sb_thread' => '{who}的帖子',
);

?>