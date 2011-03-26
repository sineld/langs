<?php

// Language definitions used in install.php, localized by adaur

$lang_install = array(

'Install message'				=>	'文件 \'config.php\' 已损坏或不存在。这表明FluxBB尚未架设。',
'Choose install language'		=>	'选择安装脚本的语言',
'Choose install language info'	=>	'本安装脚本所使用的语言。论坛所使用的默认语言将在接下来的安装过程中设置。',
'Install language'				=>	'安装使用语言',
'Change language'				=>	'变更语言',
'Next'							=>	'下一步',
'Already installed'				=>	'FluxBB 似乎已安装。请点击<a href="index.php">此链接</a>前往。',
'You are running error'			=>	'您的 %1$s 版本为 %2$s。 FluxBB %3$s 至少需要 %1$s %4$s 方可正确运行。您在继续之前，必须升级您的 %1$s 设置。',
'My FluxBB Forum'				=>	'My FluxBB Forum',
'Description'					=>	'Unfortunately no one can be told what FluxBB is - you have to see it for yourself.',
'Username 1'					=>	'用户名长度不可少于2个字符。',
'Username 2'					=>	'用户名长度不可超过25个字符。',
'Username 3'					=>	'guest 是保留的用户名。',
'Username 4'					=>	'用户名的格式不允许是 IP 地址式。',
'Username 5'					=>	'用户名不可一次包含字符 \'、 " 与 [ 或 ] 。请重新选择用户名。',
'Username 6'					=>	'用户名不可包含本论坛所使用的文本样式标签(BBCode)。',
'Short password'				=>	'密码长度不可少于4个字符。',
'Passwords not match'			=>	'密码不匹配。',
'Wrong email'					=>	'您填写的管理员电子信箱地址无效。',
'No board title'				=>	'您必须填写论坛标题。',
'Error default language'		=>	'所选的默认语言似乎不存在。',
'Error default style'			=>	'所选的默认风格似乎不存在。',
'No DB extensions'				=>	'现有 PHP 环境不具备 FluxBB 所需的任何格式的数据库。为使 FluxBB 能被安装，PHP 必须已包含 MySQL、PostgreSQL或SQLite。',
'Administrator username'		=>	'管理员用户名',
'Administrator password 1'		=>	'管理员密码1',
'Administrator password 2'		=>	'管理员密码2',
'Administrator email'			=>	'管理员电子信箱',
'Board title'					=>	'论坛标题',
'Base URL'						=>	'根目录网址',
'Required field'				=>	'在该表格中是必填项。',
'FluxBB Installation'			=>	'FluxBB 安装向导',
'Welcome'						=>	'您将要安装 FluxBB。继续安装前您必须完成填写以下表格。遇到任何安装问题，请参考帮助文档。',
'Install'						=>	'安装 FluxBB 1.4',
'Errors'						=>	'下列错误须要修正：',
'Database setup'				=>	'数据库设置',
'Info 1'						=>	'请填写必须信息以安装 FluxBB 所需的数据库。在开始安装前，您必须了解所要求内容的全部信息。',
'Select database'				=>	'选择数据库类型',
'Info 2'						=>	'FluxBB 目前支持 MySQL， PostgreSQL 以及 SQLite。如果选择数据库的下拉菜单不可用，便表示该 PHP 环境不支持所需的数据库。各数据库特定版本的更多相关资料可查看常见问题。',
'Dual MySQL'					=>	'FluxBB 检测到您的 PHP 环境支持 MySQl 的两种不同通讯方式。两个选项分别为标准(standard)与改进(improved)。如果您不确定该如何选择，建议您选择改进(improved)，如不能完成再改试标准(standard)。',
'InnoDB'						=>	'FluxBB 检测到您的 MySQL 也许支持 <a href="http://dev.mysql.com/doc/refman/5.0/en/innodb.html">InnoDB</a>。它对运行大型论坛有益处。如果您不很确定是否该使用 InnoDB，建议您不要使用。',
'Database type'					=>	'数据库类型',
'Required'						=>	'(必需)',
'Database hostname'				=>	'填写数据库服务器的主机名',
'Info 3'						=>	'数据库服务器的地址(例如：localhost, db.myhost.com 或 192.168.0.15)。如果您的数据库未使用指定端口，您可指定自定义端口(例如：localhost:3580)。如使用 SQLite 数据库，此处可填写任意字符或直接用\'localhost\'。',
'Database server hostname'		=>'数据库服务器主机名',
'Database enter name'			=>	'填写数据库名',
'Info 4'						=>	'安装 FluxBB 即将使用的数据库的名称。该数据库必须存在。如使用 SQLite 数据库，这里便是数据库文件的相对路径。出于安全考虑，强烈建议将SQLite尽最大可能放置在私有（非web可直接访问者）目录下。如 SQLite 数据库文件不存在，FluxBB 将尝试创建它。',
'Database name'					=>	'数据库名',
'Database enter informations'	=>	'填写您数据库的用户名及密码',
'Database username'				=>	'数据库用户名',
'Info 5'						=>	'填写您所要连接的数据库的用户名及密码。如使用 SQLite 此处忽略。',
'Database password'				=>	'数据库密码',
'Database enter prefix'			=>	'填写数据库表前缀',
'Info 6'						=>	'如果您喜欢，您可指定数据表的前缀。这个方式可让您在同一数据库中使用多个 FluxBB 副本(例如：foo_)。',
'Table prefix'					=>	'数据表前缀',
'Administration setup'			=>	'管理员设置',
'Info 7'						=>	'请填写所需信息以给您的 FluxBB 安装设置一个管理员。',
'Admin enter username'			=>	'填写管理员用户名',
'Info 8'						=>	'论坛管理员的用户名。稍后您还可以设置更多管理员以及版主。用户名长度须在2至25字符之间。',
'Admin enter password'			=>	'填写并确认管理员密码',
'Info 9'						=>	'密码长度至少须4字符。密码区分大小写。',
'Password'						=>	'密码',
'Confirm password'				=>	'确认密码',
'Admin enter email'				=>	'填写管理员电子信箱',
'Info 10'						=>	'论坛管理员的电子信箱地址。',
'Board setup'					=>	'论坛设置',
'Info 11'						=>	'请填写所需信息设置您的 FluxBB 论坛。',
'Enter board title'				=>	'填写您论坛的标题',
'Info 12'						=>	'该论坛的标题(将在每页顶部显示)。',
'Enter board description'		=>	'填写您论坛的描述',
'Info 13'						=>	'关于本论坛的简短描述(将在每页顶部显示)。该字段可包含 HTML。',
'Board description'				=>	'论坛描述',
'Enter base URL'				=>	'填写您安装的 FluxBB 论坛的根目录网址',
'Info 14'						=>	'您的 FluxBB 论坛的 URL (无需结尾的斜杠)地址(示例： http://forum.myhost.com 或 http://myhost.com/~myuser)。此处<strong>必须</strong>填写正确，否则，管理员和版主都将无法提交任何更改。请注意此处的预设值只是 FluxBB 的一个猜测结果。',
'Choose the default language'		=>	'选择默认语言',
'Info 15'						=>	'访客以及未在个人资料中修改设置的用户使用的默认语言。',
'Default language'				=>	'默认语言',
'Choose the default style'		=>	'选择默认风格',
'Info 16'						=>	'访客以及未在个人资料中修改设置的用户使用的默认风格。',
'Default style'					=>	'默认风格',
'Start install'					=>	'开始安装',
'DB type not valid'				=>	'\'%s\' 不是一个有效的数据库类型',
'Table prefix error'			=>	'数据表前缀 \'%s\' 包含非法字符或过长。表前缀可包含字母 a 至 z，任何数字以及下划线。并且不能以数字开头。长度不超过40个字符。请另选表前缀',
'Prefix reserved'				=>	'数据表前缀 \'sqlite_\' 是专为 SQLite 引擎保留的名称。请另选表前缀',
'Existing table error'			=>	'数据库 \'%s\'中已经存在数据表 \'%susers\'。这可能表示 FluxBB 已曾安装或另一个已安装的软件占用了 FluxBB 所需的一个或多个数据表名称。如您准备在同一数据库中安装多个 FluxBB 副本，您必须选择一个不同的表前缀。',
'InnoDB off'					=>	'InnoDB 似乎不可用。请另选一个无 InnoDB 支持的数据库层，或在您的 MySQL服务器上启用 InnoDB',
'Administrators'				=>	'管理员',
'Administrator'					=>	'管理员',
'Moderators'					=>	'版主',
'Moderator'						=>	'版主',
'Guests'						=>	'访客',
'Guest'							=>	'访客',
'New member'					=>	'新用户',
'Members'						=>	'用户',
'Member'						=>	'用户',
'Announcement'					=>	'在此填写您要发布的公告。',
'Rules'							=>	'在此填写论坛服务条款',
'Maintenance message'			=>	'论坛维护中。请稍后访问。',
'Test post'						=>	'示例帖子',
'Message'						=>	'如果您在阅读这个帖子(我猜正是如此)，安装的 FluxBB 已经开始工作！现在您可以登录，并进入顶部的管理设置面板来配置您的论坛。',
'Test category'					=>	'测试分类',
'Test forum'					=>	'测试版块',
'This is just a test forum'		=>	'这只是一个测试版块',
'Alert cache'					=>	'<strong>缓存所在目录不可写！</strong>为使 FluxBB 功能正常，必须为目录 <em>%s</em> 开启 PHP 写入权限。使用 chmod 命令设置恰当的目录权限。如有疑问，用 chmod 设为0777。',
'Alert avatar'					=>	'<strong>头像所在目录不可写！</strong>如果您准备允许用户上传自定义头像，您必须确认已为目录 <em>%s</em> 开启了 PHP 写入权限。稍后您可为用户上传的头像文件选择指定的目录(见 管理设置/配置选项)。使用 chmod 命令设置恰当的目录权限。如有疑问，用 chmod 设为0777。',
'Alert upload'					=>	'<strong>该服务器似乎不允许上传文件！</strong>如果您准备允许用户上传自定义头像，您必须开启 PHP 中的 file_uploads 配置设置。上传功能一旦可用，可在 管理设置/配置选项/头像 中开启。',
'FluxBB has been installed'		=>	'FluxBB 已安装结束。请遵循以下指示完成安装向导。',
'Final instructions'			=>	'最后一步',
'Info 17'						=>	'为完成安装，您需要点击下示按钮以下载名为 config.php 的文件。然后上传它至您已安装的 FluxBB 程序的根目录下。',
'Info 18'						=>	'一旦您上传完 config.php，FluxBB 就安装成功了！随后您便可 <a href="index.php">进入论坛首页</a>。',
'Download config.php file'		=>	'下载 config.php 文件',
'FluxBB fully installed'		=>	'FluxBB 已经安装成功！您现在可 <a href="index.php">点此访问论坛首页</a>。',

);
