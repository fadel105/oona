<?php 
$account = "082282743016"; // nomor ovo
$access = "7b05862f82d9c53bd6804b0552d81e66a8f2f3fa"; // access ovo

$max=3; //akan otomatis close apabila sudah max

$i=0;
while ($i < $max) {
	$tf = json_decode(file_get_contents("http://yvelynette17.id/ovo/play_game.php?phone_number=$account&access_code=$access"));
	if($tf->error == false)
	{
		$i++;
		echo "[SUCCESS] " . $tf->message . " [$i]" . "\n";
	} else {
		echo "[FAILED] " . $tf->message . "\n";
	}
}
?>
