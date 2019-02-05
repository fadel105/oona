<?php 
$account = "082282743016"; // nomor ovo
$access = "7b05862f82d9c53bd6804b0552d81e66a8f2f3fa"; // access ovo
$amount = 10000; // jumlah tf (bisa rp1)
$transfer_to = "085206232135"; // nomor ovo tumbal

$max=3; //akan otomatis close apabila sudah max

$i=0;
while ($i < $max) {
	$tf = json_decode(file_get_contents("http://yvelynette17.id/ovo/transfer.php?phone_number=$account&amount=$amount&access_code=$access&to_account=$transfer_to"));
	if($tf->error == false)
	{
		$i++;
		echo "[SUCCESS] " . $tf->message . " [$i]" . "\n";
	} else {
		echo "[FAILED] " . $tf->message . "\n";
	}
}
?>
