<?php

/**
 * html 页面国际化
 */
return array(
    //添加好友
    'user_userAdmin_title' => '加为好友',
    'user_userAdmin_note_title' => '添加<strong>{username}</strong>为好友，附言：',
    'user_userAdmin_note_desc' => '(附言为可选，{username} 会看到这条附言，最多 10 个字 )',
    'user_userAdmin_group_title' => '分组:',
    'user_userAdmin_ok' => '确定',
    'user_userAdmin_approve_request' => '批准请求',
    'user_userAdmin_approve_group_title' => '批准 <strong>({username})</strong> 的好友请求，并分组:',
    'user_userAdmin_friend_ignore' => '忽略好友',
    'user_userAdmin_friend_ignore_ask' => '确定忽略好友关系吗？',
    'user_userAdmin_friend_mask' => '屏蔽通知',
    'user_userAdmin_friend_next_non_display' => '在下次浏览时不再显示此类通知',
    'user_userAdmin_friend_ignore_noe' => '仅屏蔽该好友的',
    'user_userAdmin_friend_ignore_all' => '屏蔽所有好友的',
    //找回密码action
    'user_getpwd_info_app_use' => '限制在app内使用!',
    'user_getpwd_info_input' => '请输入手机号/邮箱/用户名!',
    'user_getpwd_info_auth_code_error' => '验证码不正确，请重新输入!',
    'user_getpwd_info_unreg' => '此号码未注册过本站账号!',
    'user_getpwd_info_no_open_phone' => '站长没有开启手机号码注册，不能通过手机号找回',
    'user_getpwd_info_app_goback' => 'APP密码找回',
    'user_getpwd_info_code_message' => '您好，您的验证码是{code}，请不要泄露给其他人，如非本人操作，无需理会,{bbname}',
    'user_getpwd_info_user_not_found' => '用户名不存在!',
    'user_getpwd_info_confirm_pwd_error' => '两次输入的密码不相同!',
    'user_getpwd_info_session_timeout' => '会话过期，请重新操作!',
    'user_getpwd_info_change_success' => '密码修改成功!',
    'user_getpwd_info_change_failure' => '密码修改失败!',
    'user_getpwd_info_phone_code_not_null' => '手机号码不能为空!',
    'user_getpwd_info_phone_format_error' => '手机号码格式不正确!',
    'user_getpwd_info_send_failure' => '发送失败!',
    //找回密码界面
    'user_getpwd_input_account' => '请输入您要找回的账号或手机号：',
    'user_getpwd_input_form_account' => '手机号/用户名',
    'user_getpwd_input_form_code' => '请输入验证码',
    'user_getpwd_info_form_account' => '请输入手机号/邮箱/用户名!',
    'user_getpwd_info_form_code' => '请输入验证码!',
	//----
	'user_getpwd_info_next' => '下一步!',
	'user_getpwd_code_sended_phone' => '验证码已经发送到您的手机，请输入',
	'user_getpwd_code_sended_email' => '验证码已经发送到{email}的邮箱，请输入',
	'user_getpwd1_code_input' => '请输入验证码!',
	'user_getpwd1_code_error' => '验证码不正确!',
	'user_getpwd2_change_passowrd' => '修改密码',
	'user_getpwd2_change_name' => '用户名',
	'user_getpwd2_change_new_password' => '新密码',
	'user_getpwd2_change_new_please_re_password' => '请输入新密码!',
	'user_getpwd2_change_new_tow_password_error' => '两次输入的密码不相同!',
		
		
	
    //打赏
    'forum_topicRate_title' => '评分',
    'forum_topicRate_grade_area' => '评分区间',
    'forum_topicRate_now_surplus' => '今日剩余',
    'forum_topicRate_reason' => '可选评分理由:',
    'forum_topicRate_reason_custom' => '自定义',
    'forum_topicRate_notification_author' => '通知作者',
    'forum_topicRate_ok' => '确定',
    'forum_topicRate_rate_all' => '全部打赏',
    'forum_topicRate_rate_member' => '全部成员',
    'forum_topicRate_rate_title' => '打赏',
    //默认相册
    'forum_photo_default_name' => '默认相册',
    //个人资料
    'user_userInfoAdmin_baseInfo'=> '基本资料',
    'user_userInfoAdmin_contact'=> '联系方式',
    'user_userInfoAdmin_education'=> '教育情况',
    'user_userInfoAdmin_work'=> '工作情况',
    'user_userInfoAdmin_personal'=> '个人信息',
    //帖子管理面板权限信息
    'post_manager_panel_delete_theme'=>'删除主题',
    'post_manager_panel_stick'=>'置顶',
    'post_manager_panel_elite'=>'精华',
    'post_manager_panel_close'=>'关闭',
    'post_manager_panel_open'=>'打开',
    'post_manager_panel_move'=>'移动',
    'post_manager_panel_edit'=>'编辑',
    'post_manager_panel_delete'=>'删除',
    'post_manager_panel_shield'=>'屏蔽',
    'post_manager_panel_add_bar_introduce'=>'添加柜台介绍',
    'post_extra_panel_grade' => '评分',
    'post_extra_panel_support' => '支持',
    'mobile_sign_android' => '来自安卓手机客户端',
    'mobile_sign_ios' => '来自苹果手机客户端',
    'topic_rate_list_join_num' => '参与人数',
	//帖子管理
	'topic_topicAdmin_title'=>'选择了 1 篇帖子',
	'topic_topicAdmin_delete_ask'=>'您确认要 <strong>删除</strong> 选择的帖子么?',
	'topic_topicAdmin_top_title' => '置顶',
	'topic_topicAdmin_top_none' => '无',
	'topic_topicAdmin_top_yes' => '是',
	'topic_topicAdmin_top_no' => '否',
	'topic_topicAdmin_top_period' => '有效期',
	'topic_topicAdmin_elite_title' => '精华',
	'topic_topicAdmin_elite_remove' => '解除',
	'topic_topicAdmin_elite_1' => '精华 1',
	'topic_topicAdmin_elite_2' => '精华 2',
	'topic_topicAdmin_elite_3' => '精华 3',
	'topic_topicAdmin_elite_period' => '有效期',
	'topic_topicAdmin_target_board' => '目标版块',
	'topic_topicAdmin_target_category' => '目标分类',
	'topic_topicAdmin_move_theme' => '移动主题',
	'topic_topicAdmin_retain_turn' => '保留转向',
	'topic_topicAdmin_open_theme' => '打开主题',
	'topic_topicAdmin_close_theme' => '关闭主题',
	'topic_topicAdmin_shield' => '屏蔽',
	'topic_topicAdmin_relieve' => '解除',
	'topic_topicAdmin_user' => '用户',
	'topic_topicAdmin_shield_num' => '用户 {crimeauthor} 帖子已被屏蔽 {crimenum} 次',
	'topic_topicAdmin_reason' => '操作原因',   
	'topic_topicAdmin_select' => '请选择',
	'topic_topicAdmin_select_1' => '广告/SPAM',
	'topic_topicAdmin_select_2' => '恶意灌水',
	'topic_topicAdmin_select_3' => '违规内容',
	'topic_topicAdmin_select_4' => '文不对题',
	'topic_topicAdmin_select_5' => '重复发帖',
	'topic_topicAdmin_select_6' => '--------',
	'topic_topicAdmin_select_7' => '我很赞同',
	'topic_topicAdmin_select_8' => '精品文章',
	'topic_topicAdmin_select_9' => '原创内容',
	'topic_topicAdmin_select_10' => '自定义',
	'topic_topicAdmin_get_out_register' => '违规登记',
	'topic_topicAdmin_notification_author' => '通知作者',
	'topic_topicAdmin_ok' => '确定',
);
