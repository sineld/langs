<?php

// Language definitions used in install.php, localized by adaur

$lang_install = array(

'Install message'				=>	'\'config.php\' 파일이 없거나 잘못되었다. 이것은 FluxBB가 아직 설치되지 않았다는 것을 나타낸다.',
'Choose install language'		=>	'설치 글말을 골라라',
'Choose install language info'	=>	'이 설치에 쓰이는 글말. 게시판에 쓰이는 기본 글말은 아래에서 정할 수 있다.',
'Install language'				=>	'설치 글말',
'Change language'				=>	'글말 바꾸기',
'Next'							=>	'다음',
'Already installed'				=>	'FluxBB가 이미 설치되어있다. 대신에 <a href="index.php">여기</a>로 갈 수 있다.',
'You are running error'			=>	'너는 %1$s 판번호 %2$s을 쓰고 있다. FluxBB %3$s는 제대로 쓰기위해 적어도 %1$s %4$s이 있어야 한다. 계속하기에 앞서서 %1$s를 판올림해야 한다.',
'My FluxBB Forum'				=>	'My FluxBB Forum',
'Description'					=>	'불행히도 FluxBB가 무엇인지 말할 수 있는 사람이 없다 - 너는 스스로 겪어봐야 한다.',
'Username 1'					=>	'사용자명은 적어도 2 characters를 가져야 한다.',
'Username 2'					=>	'사용자명은 25 characters를 넘어서는 안된다.',
'Username 3'					=>	'사용자명 guest는 미리 정해져 있다.',
'Username 4'					=>	'Usernames may not be in the form of an IP address.',
'Username 5'					=>	'사용자명에는 \', " , [ , ]이 없어야 한다.',
'Username 6'					=>	'사용자명에는 포럼에서 쓰는 모든 문자형 태그(BBCode)가 없어야 한다.',
'Short password'				=>	'비밀번호는 적어도 4 characters를 가져야 한다.',
'Passwords not match'			=>	'비밀번호가 짝이 맞지 않다.',
'Wrong email'					=>	'써넣은 다룸이 email은 바르지 않다.',
'No board title'				=>	'게시판 제목을 넣어야 한다.',
'Error default language'		=>	'고른 기본 글말이 없는 것 같다.',
'Error default style'			=>	'고른 기본 모양새가 없는 것 같다.',
'No DB extensions'				=>	'FluxBB가 지원하는 모든 데이터베이스를 PHP가 지원하지 않는다. FluxBB를 설치하려면 PHP가 MySQL, PostgreSQL , SQLite 어떤 것이든 지원해야 한다.',
'Administrator username'		=>	'다룸이의 사용자명',
'Administrator password 1'		=>	'다룸이의 비밀번호 1',
'Administrator password 2'		=>	'다룸이의 비밀번호 2',
'Administrator email'			=>	'다룸이의 email',
'Board title'					=>	'게시판 제목',
'Base URL'						=>	'기본 URL',
'Required field'				=>	'은 이 포럼에서 필요한 항목이다.',
'FluxBB Installation'			=>	'FluxBB 설치',
'Welcome'						=>	'FluxBB를 설치하려고 한다. FluxBB를 설치하려면, 아래의 칸들을 채워 넣어야 한다. 설치하는데 어려움을 겪는다면 문서를 참조해라.',
'Install'						=>	'FluxBB %s 설치하기',
'Errors'						=>	'다음 오류를 바로잡아야 한다:',
'Database setup'				=>	'데이터베이스 설정',
'Info 1'						=>	'FluxBB를 위한 데이터베이스를 설정하려면 요구하는 정보를 채워넣어라. 설치를 진행하기에 앞서서 요청하는 모든 정보를 알고 있어야 한다.',
'Select database'				=>	'데이터베이스 유형을 골라라',
'Info 2'						=>	'FluxBB는 MySQL, PostgreSQL, SQLite를 지원하고 있다. 네가 뽑아놓은 데이터베이스가 아래의 목록에 없다면 PHP가 그 데이터베이스를 지원하지 않는 것이다. 각 데이터베이스의 특정 판번호에 대한 지원에 관련된 자세한 정보는 FAQ에서 찾을 수 있다.',
'Dual MySQL'					=>	'FluxBB는 너의 PHP가 MySQL와의 두가지 다른 소통 방식을 지원한다는 것을 알아내었다. 두 선택항은 standard와 improved로 불린다. 네가 사용할 방식을 지정하지 않으면 improved를 먼저 해보고 이것이 실패하면 standard를 해본다.',
'InnoDB'						=>	'FluxBB는 너의 MySQL 서버가 <a href="http://dev.mysql.com/doc/refman/5.0/en/innodb.html">InnoDB</a>를 지원한다는 것을 알아내었다. 네가 커다란 포럼을 다룰 계획을 하고 있다면 이것은 좋은 선택일 것이다. 알지 못한다면 InnoDB를 쓰지 않는 것이 좋다.',
'Database type'					=>	'데이터베이스 유형',
'Required'						=>	'(필요)',
'Database hostname'				=>	'너의 데이터베이스 서버 호스트이름을 넣어라',
'Info 3'						=>	'데이터베이스 서버의 주소 (예: localhost, db.myhost.com, 192.168.0.15). 너의 데이터베이스가 기본 포트를 쓰지 않는다면 맞춤 포트 번호를 지정할 수 있다 (예: localhost:3580). SQLite 지원을 위해서는 그냥 아무거나 입력하거나 \'localhost\'로 남겨두어라.',
'Database server hostname'		=>'데이터베이스 서버 호스트이름',
'Database enter name'			=>	'사용할 데이터베이스의 이름을 넣어라',
'Info 4'						=>	'FluxBB가 설치될 데이터베이스의 이름. 데이터베이스가 있어야 한다. SQLite 일 때, 이것은 데이터베이스 파일의 상대경로이다. 보안을 위해서, 되도록 (웹에서 접근하지 못하는) 개인용 디렉토리에 SQLite 데이터베이스를 놓아두어라. SQLite 데이터베이스 파일이 없으면, FluxBB가 만들어 보려고 할 것이다.',
'Database name'					=>	'데이터베이스 이름',
'Database enter informations'	=>	'데이터베이스의 사용자명과 비밀번호를 넣어라',
'Database username'				=>	'데이터베이스 사용자명',
'Info 5'						=>	'데이터베이스에 연결할 사용자명과 비밀번호를 넣어라. SQLite은 이것을 무시한다.',
'Database password'				=>	'데이터베이스 비밀번호',
'Database enter prefix'			=>	'데이터베이스 테이블 prefix를 넣어라',
'Info 6'						=>	'좋다면 테이블 prefix를 지정할 수 있다. 이것은 같은 데이터베이스에 여러 개의 FluxBB를 쓸 수 있는 방법이다 (예: foo_).',
'Table prefix'					=>	'Table prefix',
'Administration setup'			=>	'다룸이 설정',
'Info 7'						=>	'FluxBB 설치를 위한 다룸이를 설정하려면 필요한 정보를 넣어라.',
'Admin enter username'			=>	'다룸이의 사용자명을 넣어라',
'Info 8'						=>	'포럼 다룸이의 사용자명. 나중에도 다룸이와 지킴이를 더 만들 수 있다. 사용자명의 길이는 2 에서 25 characters 사이여야 한다.',
'Admin enter password'			=>	'다룸이의 비밀번호를 넣고 확인해라',
'Info 9'						=>	'비밀번호는 적어도 4 characters를 가져야 한다. 비밀번호는 대/소문자를 구분한다.',
'Password'						=>	'비밀번호',
'Confirm password'				=>	'비밀번호 확인',
'Admin enter email'				=>	'다룸이의 email을 넣어라',
'Info 10'						=>	'포럼 다룸이의 email.',
'Board setup'					=>	'게시판 설정',
'Info 11'						=>	'FluxBB 게시판을 설정하려면 필요한 정보를 넣어라.',
'Enter board title'				=>	'게시판 제목을 넣어라',
'Info 12'						=>	'이 게시판의 제목 (모든 페이지의 꼭데기에 보여진다).',
'Enter board description'		=>	'게시판의 설명을 넣어라',
'Info 13'						=>	'이 게시판에 대한 짧은 설명 (모든 페이지의 꼭데기에 보여진다). 이 칸은 HTML.를 넣어도 된다',
'Board description'				=>	'게시판 설명',
'Enter base URL'				=>	'FluxBB 설치의 기본 URL를 넣어라',
'Info 14'						=>	'(끝에 /가 없는) FluxBB 포럼의 URL (예: http://forum.myhost.com, http://myhost.com/~myuser). 이것은 <strong>바르게</strong> 되어야 한다, 그렇지 않으면 다룸이와 지킴이는 어떠한 양식도 제출하지 못할 것이다. 아래에 미리 설정된 값은 그저 FluxBB의 예상일 뿐이다.',
'Choose the default language'	=>	'기본 글말을 골라라',
'Info 15'						=>	'프로필에서 기본값을 바꾸지 않은 손님과 사용자가 쓸 기본 글말이다.',
'Default language'				=>	'기본 글말',
'Choose the default style'		=>	'기본 모양새를 골라라',
'Info 16'						=>	'프로필에서 기본값을 바꾸지 않은 손님과 사용자가 쓸 기본 모양새다.',
'Default style'					=>	'기본 모양새',
'Start install'					=>	'설치 시작하기',
'DB type not valid'				=>	'\'%s\'는 올바른 데이터베이스 유형이 아니다',
'Table prefix error'			=>	'Table prefix \'%s\'이 금지 문자를 가지고 있거나 너무 길다. Prefix는 a에서 z까지의 문자, 모든 숫자, 밑줄만 가질 수 있다. 또한 숫자로 시작해서는 안된다. 최대 길이는 40 characters다. 다른 Prefix를 골라라',
'Prefix reserved'				=>	'Table prefix \'sqlite_\'은 SQLite engine이 쓰도록 되어있다. 다른 Prefix를 골라라',
'Existing table error'			=>	'Table \'%susers\'는 데이터베이스 \'%s\'에 이미 있다. 이것은 FluxBB가 이미 설치되어 있거나 다른 소프트웨어가 설치되어 FluxBB가 요구하는 테이블 이름을 하나 이상 차지하고 있다는 것을 뜻한다. 같은 데이터베이스에 여러 개의 FluxBB를 설치하려면 다른 Table prefix를 골라라',
'InnoDB off'					=>	'InnoDB는 쓸 수 있게 되어있지 않다. InnoDB 지원을 가지지 않은 데이터베이스 layer를 고르거나 너의 MySQL서버에서 InnoDB를 쓸 수 있게 해라',
'Administrators'				=>	'다룸이',
'Administrator'					=>	'다룸이',
'Moderators'					=>	'지킴이',
'Moderator'						=>	'지킴이',
'Guests'						=>	'손님',
'Guest'							=>	'손님',
'New member'					=>	'새회원',
'Members'						=>	'회원',
'Member'						=>	'회원',
'Announcement'					=>	'여기에 알림을 써넣어라.',
'Rules'							=>	'여기에 규칙을 써넣어라',
'Maintenance message'			=>	'포럼이 점검으로 잠시 문을 닫았다. 잠시 뒤에 다시 해보아라.',
'Test post'						=>	'테스트 글타래',
'Message'						=>	'(혹시라도) 이것을 찾아냈다면 FluxBB의 설치는 제대로 된 것이다! 이제 포럼을 구성하기위해 로그인을 하고 다룸이 다룸판으로 가라',
'Test category'					=>	'테스트 범주',
'Test forum'					=>	'테스트 포럼',
'This is just a test forum'		=>	'이것은 그저 테스트 포럼이다',
'Alert cache'					=>	'<strong>cache 디렉토리에 지금 쓸 수가 없다!</strong> FluxBB가 제대로 돌아가게 하려면 디렉토리 <em>%s</em>는 PHP가 쓸 수 있게되어야 한다. 알맞은 디렉토리 권한을 주기위해 \'chmod\'를 써라. 잘 모르면 \'chmod\'에 0777를 주어라.',
'Alert avatar'					=>	'<strong>아바타 디렉토리에 지금 쓸 수가 없다!</strong> 사용자가 자신의 아바타 이미지를 올릴 수 있게 하려면 디릭토리 <em>%s</em>에 PHP가 쓸 수 있게 해야 한다. 나중에 다른 디렉토리에 아바타 이미지를 저장하도록 할 수 있다 (다룸판/옵션을 보아라). 알맞은 디렉토리 권한을 주기위해 \'chmod\'를 써라. 잘 모르면 \'chmod\'에 0777를 주어라.',
'Alert upload'					=>	'<strong>이 서버는 파일 올려싣기가 되도록 되어있지 않다!</strong> 사용자가 자신의 아바타 이미지를 올릴 수 있게 하려면 PHP에서 file_uploads 설정을 켜야 한다. 파일 올려싣기가 켜졌다면 다룸판/선택/기능에서 아바타 올려싣가를 켤 수 있다.',
'FluxBB has been installed'		=>	'FluxBB가 설치되었다. 설치를 끝내려면 다음 지시를 따라가라',
'Final instructions'			=>	'마지막 지시',
'Info 17'						=>	'설치를 끝내려면 config.php 파일을 내려받기위해 아래 단추를 눌러야한다. 그 다음 이 파일을 FluxBB를 설치한 \'root\' 디렉토리로 올려실어야 한다.',
'Info 18'						=>	'config.php를 올려실었으면, FluxBB는 제대로 설치가 되었다! 이제 <a href="index.php">포럼의 처음</a>으로 갈 수 있다.',
'Download config.php file'		=>	'config.php file 내려받기',
'FluxBB fully installed'		=>	'FluxBB가 제대로 설치되었다! 이제 <a href="index.php">포럼 처음</a>으로 갈 수 있다.',

);
