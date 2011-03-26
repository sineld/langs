<?php

// Language definitions used in db_update.php

$lang_update = array(

'Update'						=>	'更新FluxBB',
'Update message'				=>	'您的FluxBB資料庫已經過時，繼續之前必須升級。如果您是論壇管理員，請按下列說明完成升級。',
'Note'							=>	'注意：',
'Members message'				=>	'這個流程僅供論壇管理員操作。如您不是管理員，請勿擔心 - 論壇馬上就會上線！',
'Administrator only'			=>	'這個步驟僅供論壇管理員操作！',
'Database password info'		=>	'要執行資料庫升級請輸入FluxBB所使用的資料庫密碼。如果您不慎忘記了密碼，請查看 \'config.php\' 檔中儲存的密碼。',
'Database password note'		=>	'如果您使用的是SQLite資料庫(無須密碼)請使用資料庫名稱代替密碼。它必須與設定檔中您所給的資料庫名稱完全符合。',
'Database password'				=>	'資料庫密碼',
'Next'							=>	'下一步',

'You are running error'			=>	'您所執行的 %1$s 版本號為 %2$s。FluxBB %3$s 至少必須 %1$s %4$s 才能正確執行。繼續之前您必須先將您的 %1$s 升級。',
'Version mismatch error'		=>	'版本不符合。資料庫 \'%s\' 似乎不包含本升級指令碼所支援的FluxBB資料庫架構。',
'Invalid file error'			=>	'無效的資料庫名稱。當使用SQLite資料庫時，輸入的資料庫名稱必須要與您的 \'%s\' 檔案中相同',
'Invalid password error'		=>	'無效的資料庫密碼。升級 FluxBB 時您輸入的資料庫密碼必須要與您的 \'%s\' 檔案中相同',
'No password error'				=>	'未提供資料庫密碼',
'Script runs error'				=>	'已有其他人 執行了更新指令碼。如果不是這個情況，請手動刪除檔案 \'%s\' 後再試',
'No update error'				=>	'您的論壇已經是這個指令碼所能更新到的最新版本',

'Intro 1'						=>	'指令碼將會更新您的資料庫，更新過程取決於伺服器的速度以及論壇資料庫的大小，可能持續1秒至幾小時不等。繼續之前，請不要忘記備份資料庫。',
'Intro 2'						=>	'您是否已經閱讀了文件中的更新說明？如果沒有，請從那裡開始。',
'No charset conversion'			=>	'<strong>重要！</strong> FluxBB 已經檢測到這個PHP環境尚不支援將ISO-8859-1以外的編碼轉換為UTF-8的編碼轉換機制。這意味著如果目前編碼不是ISO-8859-1，FluxBB 將不能自動將您的論壇資料庫換為UTF-8格式，您必須手動完成這個操作。關於手動轉換字元集的指示可在更新說明中找到。',
'Enable conversion'				=>	'<strong>啟用轉換：</strong> 如果啟用這個功能，在更新指令碼完成資料庫結構的更新後，還會將資料庫中的所有文字由目前編碼轉換為UTF-8。如是從FluxBB 1.2版更新，這個轉換過程是必須的。',
'Current character set'			=>	'<strong>目前字元集：</strong> 如果您的論壇的主要語言是英語，您可以保留此處的預設值。否則，如果非英語，您需要輸入論壇所使用的主要語言包的字元集名稱。<em>錯誤的輸入可能會損壞您的資料庫，因此請勿依靠猜測！</em> 注意：即使原資料庫使用UTF-8編碼，此處也需要輸入。',
'Charset conversion'			=>	'字元集轉換',
'Enable conversion label'		=>	'<strong>啟用轉換</strong> (執行資料庫字元集轉換)。',
'Current character set label'	=>	'目前字元集',
'Current character set info'	=>	'英語論壇保留預設值，否則，提供主要語言包的字元集。',
'Start update'					=>	'開始更新',
'Error converting users'		=>	'使用者轉換錯誤',
'Error info 1'					=>	'轉換某些使用者時出現錯誤。當從FluxBB 1.2轉換時，如果多個使用者的名稱過於相似，如 "bob" 和 "böb"，可能會出現這個錯誤。',
'Error info 2'					=>	'以下是未完成轉換的會員列表。請為每個會員重新命名，這些會員將會自動接收被重新命名的郵件通知。',
'New username'					=>	'新會員名稱',
'Required'						=>	'(必須)',
'Correct errors'				=>	'以下錯誤需要修正：',
'Rename users'					=>	'重新命名的會員',
'Successfully updated'			=>	'您的論壇資料庫已經成功更新。現在您可以 %s。',
'go to index'					=>	'前往論壇首頁',

'Unable to lock error'			=>	'更新無法寫入。請確認設定了目錄 \'%s\' 的PHP 寫入權限並確保目前沒有其他人正在 執行升級指令碼。',

'Converting'					=>	'正在轉換 %s …',
'Converting item'				=>	'正在轉換 %1$s %2$s …',
'Preparsing item'				=>	'正在預分析 %1$s %2$s …',
'Rebuilding index item'			=>	'正在為 %1$s %2$s 重建索引',

'ban'							=>	'封鎖',
'categories'					=>	'分區',
'censor words'					=>	'過濾詞彙',
'configuration'					=>	'設定',
'forums'						=>	'版面',
'groups'						=>	'會員群組',
'post'							=>	'文章',
'ranks'							=>	'等級',
'report'						=>	'舉報',
'topic'							=>	'主題',
'user'							=>	'一般會員',
'signature'						=>	'簽名',

'Username too short error'		=>	'會員名稱長度至少需要2個字元。請重新選擇(更長的)會員名稱。',
'Username too long error'		=>	'會員名稱長度不可超過25個字元。請重新選擇(更短的)會員名稱。',
'Username Guest reserved error'	=>	'這個會員名稱已被訪客佔用。請重新選擇會員名稱。',
'Username IP format error'		=>	'會員名稱不得設為 IP 位址格式。請重新選擇會員名稱。',
'Username bad characters error'	=>	'會員名稱不可一次包含字元 \'、 " 與 [ 或 ] 。請重新選擇會員名稱。',
'Username BBCode error'			=>	'會員名稱不得包含論壇所使用的樣式標籤格式 (BBCode) 。請重新選擇會員名稱。',
'Username duplicate error'		=>	'已有會員註冊了會員名稱 %s 。您輸入的會員名稱與之太相似。會員名稱必須與之不同，至少擁有一個字母、數字的差異 (a-z or 0-9)。請重新選擇會員名稱。',

'JavaScript disabled'			=>	'JavaScript 可能已被停用。%s。',
'Click here to continue'		=>	'點選這裡繼續',
'Required field'				=>	'在此表單是必填項目。'

);
