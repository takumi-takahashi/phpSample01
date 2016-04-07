<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>PHPアップロード受信</title>
</head>
<body>
<p><?php
if(is_uploaded_file($_FILES["upfile"]["tmp_name"])) {//ファイルがアップロードされたか調べる関数
	if(move_uploaded_file(//ファイルを移動する関数
		$_FILES["upfile"]["tmp_name"],//移動元ファイル指定
		 "files/" . $_FILES["upfile"]["name"])){//移動先ファイル指定(./file)
		chmod("files/" . $_FILES["upfile"]["name"], 0644);//パーミッションを設定する関数
		echo $_FILES["upfile"]["name"] . "をアップロードしました";
	}else{
		echo "ファイルをアップロードできません。";
	}
}else{
		echo "ファイルが選択されていません。";
	}


?>
</p>
</body>
</html>