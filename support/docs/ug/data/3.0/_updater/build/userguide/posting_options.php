<?php
		// The page title
		$page_title = '5.4.4. Post Options';

$navigation = array(
	'home' => array('../index.php','phpBB 3.0 Olympus Documentation'),
	'this' => array('../userguide/posting_options.php','Post Options'),
	'prev' => array('../',''),
	'next' => array('../',''),
	'up'   => array('../userguide/user_posting.php','Mastering the Posting Screen'),
	'toc'  => array('../index.php','phpBB 3.0 Olympus Documentation',array(array('../quickstart/index.php','Quick Start Guide',array(array('../quickstart/quick_requirements.php','Requirements',array()),
			array('../quickstart/quick_installation.php','Installation',array(array('../quickstart/quick_installation_intro.php','Introduction',array()),
			array('../quickstart/quick_installation_requirements.php','Requirements',array()),
			array('../quickstart/quick_installation_database.php','Database settings',array()),
			array('../quickstart/quick_installation_admin.php','Administrator details',array()),
			array('../quickstart/quick_installation_config.php','Configuration file',array()),
			array('../quickstart/quick_installation_advanced.php','Advanced settings',array()),
			)),
			array('../quickstart/quick_settings.php','General settings',array(array('../quickstart/quick_settings_boardsettings.php','Board Settings',array()),
			array('../quickstart/quick_settings_boardfeatures.php','Board Features',array()),
			)),
			array('../quickstart/quick_forums.php','Creating and setting up forums',array()),
			array('../quickstart/quick_permissions.php','Setting permissions',array(array('../quickstart/quick_permissions_types.php','Permission types',array()),
			array('../quickstart/quick_permissions_forum.php','Setting forum permissions',array()),
			array('../quickstart/quick_permissions_manual.php','Manual permissions',array()),
			array('../quickstart/quick_permissions_roles.php','Permissions roles',array()),
			array('../quickstart/quick_permissions_moderators.php','Assign moderators to forums',array()),
			array('../quickstart/quick_permissions_global.php','Setting global permissions',array()),
			)),
			array('../quickstart/quick_support.php','Obtaining support',array()),
			)),
			array('../upgradeguide/index.php','Upgrade Guide',array(array('../upgradeguide/upgrade.php','Upgrading from 2.0 to 3.0',array()),
			array('../upgradeguide/upgrade_general.php','Upgrading from any board software to phpBB3',array(array('../upgradeguide/upgrade_general_requirements.php','Requirements',array()),
			array('../upgradeguide/upgrade_general_preliminary.php','Preliminary steps',array()),
			array('../upgradeguide/upgrade_general_conversion.php','Conversion steps',array()),
			)),
			)),
			array('../adminguide/index.php','Administration Guide',array(array('../adminguide/admin_control_panel.php','The Administration Control Panel',array()),
			array('../adminguide/acp_general.php','General Configuration and Front Page',array(array('../adminguide/acp_general_config.php','Board Configuration',array()),
			array('../adminguide/acp_general_client.php','Client communication',array()),
			array('../adminguide/acp_general_server.php','Server configuration',array()),
			)),
			array('../adminguide/acp_forums.php','Forum Admin',array(array('../adminguide/acp_forums_types.php','Explanation of forum types',array()),
			array('../adminguide/acp_forums_subforums.php','Subforums',array()),
			array('../adminguide/acp_forums_manage.php','Manage forums',array()),
			)),
			array('../adminguide/acp_posting.php','Posting Settings',array(array('../adminguide/acp_posting_bbcodes.php','BBCodes',array()),
			array('../adminguide/acp_posting_pm_settings.php','Private message settings',array()),
			array('../adminguide/acp_posting_topic_icons.php','Topic icons',array()),
			array('../adminguide/acp_posting_smilies.php','Smilies',array()),
			array('../adminguide/acp_posting_censors.php','Word censoring',array()),
			array('../adminguide/acp_attach_settings.php','Attachment Settings',array()),
			array('../adminguide/acp_attach_extensions.php','Manage extensions',array()),
			array('../adminguide/acp_attach_extension_groups.php','Manage extension groups',array()),
			array('../adminguide/acp_attach_orphaned.php','Orphaned attachments',array()),
			)),
			array('../adminguide/acp_users.php','Users Management',array(array('../adminguide/acp_users_manage.php','Manage Users',array()),
			array('../adminguide/acp_users_inactive.php','Inactive Users',array()),
			array('../adminguide/acp_users_permissions.php','Users\' permissions',array()),
			array('../adminguide/acp_users_forum_permissions.php','Users\' forum permissions',array()),
			array('../adminguide/acp_users_custom_profile_fields.php','Custom profile fields',array()),
			array('../adminguide/acp_user_ranks.php','Managing ranks',array()),
			array('../adminguide/acp_user_security.php','User Security',array()),
			)),
			array('../adminguide/acp_groups.php','Group Management',array(array('../adminguide/acp_groups_types.php','Group types',array()),
			array('../adminguide/acp_groups_edit.php','Group attributes',array()),
			array('../adminguide/acp_groups_default.php','Default groups',array()),
			)),
			array('../adminguide/acp_permissions.php','Permission Overload',array(array('../adminguide/acp_permissions_global.php','Global Permissions',array()),
			array('../adminguide/acp_permissions_forumbased.php','Forum Based Permissions',array()),
			array('../adminguide/acp_permissions_roles.php','Permission Roles',array()),
			array('../adminguide/acp_permissions_masks.php','Permission Masks',array()),
			)),
			array('../adminguide/acp_styles.php','Styles',array(array('../adminguide/acp_styles_manage.php','Installing and managing styles',array()),
			array('../adminguide/acp_styles_templates.php','Templates',array()),
			array('../adminguide/acp_styles_themes.php','Themes',array()),
			array('../adminguide/acp_styles_imagesets.php','Imagesets',array()),
			)),
			array('../adminguide/acp_maintenance.php','Board Maintenance',array(array('../adminguide/acp_maintenance_logs.php','Forum Logs',array()),
			array('../adminguide/acp_maintenance_database.php','Database backup and restore',array()),
			array('../adminguide/acp_maintenance_search.php','Search Indexing',array()),
			)),
			array('../adminguide/acp_system.php','System Configuration',array(array('../adminguide/acp_system_updates.php','Checking for updates',array()),
			array('../adminguide/acp_system_spiders.php','Managing Search Robots',array()),
			array('../adminguide/acp_system_mail.php','Mass email',array()),
			array('../adminguide/acp_system_language.php','Language Packs',array()),
			array('../adminguide/acp_system_phpinfo.php','PHP Information',array()),
			array('../adminguide/acp_system_reasons.php','Manage reasons for reporting and denying posts',array()),
			array('../adminguide/acp_system_modules.php','Module Management',array()),
			)),
			)),
			array('../moderatorguide/index.php','Moderator Guide',array(array('../moderatorguide/moderator_edit.php','Editing posts',array()),
			array('../moderatorguide/moderator_modtools.php','Moderation tools',array(array('../moderatorguide/modtools_lock.php','Locking a topic or post',array()),
			array('../moderatorguide/modtools_delete.php','Deleting a topic or post',array()),
			array('../moderatorguide/modtools_move.php','Moving a topic into another forum',array()),
			array('../moderatorguide/modtools_copy.php','Duplicating a topic',array()),
			array('../moderatorguide/modtools_type.php','Announcements and stickies',array()),
			array('../moderatorguide/modtools_split.php','Splitting posts off a topic',array()),
			array('../moderatorguide/modtools_mergetopics.php','Merge topics',array()),
			array('../moderatorguide/modtools_mergeposts.php','Merge posts into another topic',array()),
			)),
			array('../moderatorguide/moderator_queue.php','What is the “Moderation queue”?',array()),
			array('../moderatorguide/moderator_reported.php','What are “Reported posts”?',array()),
			array('../moderatorguide/moderator_mcp.php','The Moderator Control Panel (MCP)',array(array('../moderatorguide/mcp_queue.php','Moderation queue',array()),
			array('../moderatorguide/mcp_reported.php','Reported posts',array()),
			array('../moderatorguide/mcp_forum.php','Forum moderation',array()),
			)),
			)),
			array('../userguide/index.php','User Guide',array(array('../userguide/user_permissions.php','How user permissions affect forum experience',array()),
			array('../userguide/user_registering.php','Registering on a phpBB3 board',array()),
			array('../userguide/user_control_panel.php','Orienting Yourself in the User Control Panel',array(array('../userguide/ucp_overview.php','Overview',array()),
			array('../userguide/ucp_profile.php','Profile',array()),
			array('../userguide/ucp_preferences.php','Preferences',array()),
			array('../userguide/ucp_friends_foes.php','Friends and Foes',array()),
			array('../userguide/ucp_attachments.php','Attachments',array()),
			array('../userguide/ucp_usergroups.php','Usergroups',array()),
			)),
			array('../userguide/user_posting.php','Mastering the Posting Screen',array(array('../userguide/posting_form.php','Posting Form',array()),
			array('../userguide/posting_smilies.php','Smilies',array()),
			array('../userguide/posting_bbcodes.php','BBCodes',array()),
			array('../userguide/posting_options.php','Post Options',array()),
			array('../userguide/posting_attachments.php','Attachments',array()),
			array('../userguide/posting_polls.php','Polls',array()),
			array('../userguide/posting_drafts.php','Drafts',array()),
			)),
			array('../userguide/user_pm.php','Communicate with Private Messages',array(array('../userguide/pm_display.php','Message display',array()),
			array('../userguide/pm_new.php','Composing a new message',array()),
			array('../userguide/pm_folders.php','Message Folders',array()),
			array('../userguide/pm_filters.php','Message filters',array()),
			)),
			array('../userguide/user_search.php','Search - How to Find What You are Looking For',array()),
			array('../userguide/user_memberlist.php','The Memberlist - More Than Meets the Eye',array()),
			)),
			array('../glossary/index.php','Glossary',array(array('../glossary/terms.php','Terms',array()),
			)),
			)),
			
);

ob_start();
?>
<div xmlns="http://www.w3.org/1999/xhtml" class="section" lang="en"><div class="titlepage"><div><div><h3 class="title"><span xmlns="" id="posting_options"/>5.4.4. Post Options</h3></div></div></div><p>TODO: Gather various screenshots of the basic post options box. When posting a topic/reply and/or moderation functions, etc.</p><p>When posting either a new topic or reply, there are several post options that are available to you. You can view these options by selecting the <span class="guilabel">Options</span> tab from the section below the posting form. Depending on the permissions the board administrator has assigned to you or whether you are posting a topic or reply, these options will be different.</p><div class="itemizedlist"><ul type="disc"><li><p><span class="guilabel">Disable BBCode</span>: If BBCode is enabled on the board and you are allowed to use it, this option will be available. Checking this box will not convert any BBCode in your post content into its respected output. For example, [b]Bolded text[/b] will be seen in your post as exactly [b]Bolded text[/b].</p></li><li><p><span class="guilabel">Disable Smilies</span>: If Smilies are enabled on the board and you are allowed to use them, this option will be available. Checking this box will not convert any of the smilie's characters to their respected image. For example, ;) will be seen in your post as exactly ;).</p></li><li><p><span class="guilabel">Do not automatically parse URLs</span>: When entering a URL directly into your post content (in the format of http://....com or www.etc.com), by default it will be converted to a clickable string of text. However, if this box is checked when posting, these URLs will stay as a standard string of text.</p></li><li><p><span class="guilabel">Attach a signature (signatures can be altered via the UCP)</span>: If this box is checked, the signature you have set in your profile will be attached to the post provided signatures have been enabled by the administrator and you have the proper permissions. For more information about signatures, please see <a href="ucp_profile.php#ucp_signature" title="5.3.2.2. Signature">UCP Signatures</a>.</p></li><li><p><span class="guilabel">Send me an email when a reply is posted</span>: If this box is checked, you will receive a notification (either by email, Jabber, etc) every time another user replies to the topic. This is called subscribing to the topic. For more information, please see <a href="ucp_overview.php#ucp_subscriptions" title="5.3.1.1. Subscriptions">UCP Subscriptions</a>.</p></li><li><p><span class="guilabel">Lock topic</span>: Provided you have moderation permissions in this forum, checking this box will result in the topic being locked after your reply has been posted. At this point, no one but moderators or administrators may reply to the topic. For more information, please see <a href="../moderatorguide/modtools_lock.php" title="4.2.1. Locking a topic or post">Locking a topic or post</a>.</p></li></ul></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title"><span xmlns="" id="posting_special"/>5.4.4.1. Topic Types</h4></div></div></div><p>Provided you have the right permissions, you have the option of selecting various topic types when posting a new topic by using <span class="guilabel">Post topic as</span>. The four possible types are: <span class="guilabel">Normal</span>, <span class="guilabel">Sticky</span>, <span class="guilabel">Announcement</span>, and <span class="guilabel">Global</span>. By default, all new posts are <span class="guilabel">Normal</span>.</p><div class="itemizedlist"><ul type="disc"><li><p><span class="guilabel">Normal</span>: By selecting normal, your new topic will be a standard topic in the forum.</p></li><li><p><span class="guilabel">Sticky</span>: Stickies are special topics in the forum. They are "stuck" to the top of the first page of the forum in which they are posted, above every Normal topic.</p></li><li><p><span class="guilabel">Announcement</span>: Announcements are much like Stickies in that they are "stuck" to the top of the forum. However, they are different from stickies in two ways: 1) they are above Stickies, and 2) they appear at the top of <span class="emphasis"><em>every</em></span> page of the forum instead of only the first page of topics.</p></li><li><p><span class="guilabel">Global</span>: Global, or Global Announcements, are special types of Announcements which appear at the top of every page of every forum on the board. They appear above every other type of special topic.</p></li></ul></div><p>You also have the ability to specify how long the special (stickies, announcements, and global announcements) keep their type. For example, an announcement is created and specified to stay "stuck" for 4 days. After the 4 days are over, the announcement will automatically be switched to a Normal topic.</p></div></div><div class="copyright">© 2006, 2008 phpBB Group — Licensed under the Creative Commons <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/">Attribution-NonCommercial-ShareAlike 3.0</a> license</div>
<?php

$content = str_replace(' xmlns="http://www.w3.org/1999/xhtml"', '', ob_get_clean());

?>
