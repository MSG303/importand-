<?php

$pertama = "<?php \n";
$terakhir = "?>";


$put = fopen("../chatId.php","w") or die("Cannot write to path");
		 fwrite($put,$pertama);
		 fwrite($put,'$botToken = "'.$_GET['nama'].'";');
		 fwrite($put,"\n");
		 fwrite($put,'$chatID = "'.$_GET['mailzz'].'";');
		 fwrite($put,"\n");
		 fwrite($put,$terakhir);
		 fclose($put);
echo '200';