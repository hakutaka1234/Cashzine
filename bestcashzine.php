<?

function WAKTU($detik){
for ($x=$detik;$x>0;$x--){
echo "    \033[0;31mWaiting \033[0;32mFor \033[0;35m".$x." \033[0;33mSecond ";
echo "\r"; 
sleep(1);
}
}/*KURUNG WAKTU()*/
function BERSIH(){
system('clear');}
error_reporting(0);
function SATU(){
$save=fopen("poin.php", "a");
echo "\033[0;32mMasukan Data : \033[0;33m";
$p=trim(fgets(STDIN));
$l=('<?php
$Gb[]="').$p.('";
');
fwrite($save,$l);
fclose($save);

}//Kurung KURAWAL MILIK SATU()


function DUA(){
$save=fopen("data.php", "a");
echo "\033[0;32mMasukan Data : \033[0;33m";
$p=trim(fgets(STDIN));
$l=('<? $Ga[]="').$p.('";?>
');
fwrite($save,$l);
fclose($save);
}//Kurung Kurawal Milik Dua()

function CLAIM(){
$Ga=array();
include(('data.php'));
$h=count($Ga);
$c=-1;
$l=0;
while($c<$h){$c++;$l++;$data=$Ga[$c];sleep(1);
$ua=array('Content-Type: application/json','content-pwd: 1','Host: gateway.cashzine.net','Connection: Keep-Alive','User-Agent: Android/vivo/Android/8.1.0/guaguazhuan/3.87/GooglePlay/05f53de0f7cc47265bdd17a25546bb0f/10.76.139.104/com.sky.sea.cashzine/36:6C:BA:31:DA:FA/AArch64 Processor rev 4 (aarch64)////MOBILE/474A48AA39AF08761533E61E4FA9CB29263E0804/59f3a0ac88fcce04/31874cf3/0b60a96d540ac41465ce7558a6bf39e8');

$ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://gateway.cashzine.net/app-http/api");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result=curl_exec($ch);
$js=json_decode($result);
$code=$js->code;
	if($code=="1000"){
$rewa=$js->data->rewardgold;
echo "\033[0;32m[$l] \033[0;31mSukses \033[0;33mClaim \033[0;34m$rewa Point\033[0;31m\n";WAKTU(7);
	}/*if*/
	elseif($code=="1100"){
echo "\033[0;32m[$l] \033[0;31mTunggu \033[0;33mNanti \033[0;34mLagi...\033[0;31m\n";
	}/*elseif*/
}/*Kurung Kurawal Milik While*/
}/*Kurung Kurawal Milik CLAIM*/
if(file_exists(('data.php')))
{goto menu;
}else{DUA();}
menu:
BERSIH();
include(('data.php'));
$h=count($Ga);
$hari = date ("D");
switch($hari){
		case 'Sun':
			$hari_ini = "Minggu";
		break;
 
		case 'Mon':			
			$hari_ini = "Senin";
		break;
 
		case 'Tue':
			$hari_ini = "Selasa";
		break;
 
		case 'Wed':
			$hari_ini = "Rabu";
		break;
 
		case 'Thu':
			$hari_ini = "Kamis";
		break;
 
		case 'Fri':
			$hari_ini = "Jumat";
		break;
 
		case 'Sat':
			$hari_ini = "Sabtu";
		break;
		
		default:
			$hari_ini = "Tidak di ketahui";		
		break;}
$tanggal = date('d-F-Y');
echo"
\033[0;33m╭━━━━━━━━━━━━━━━━━━━━━━━━━━━╮
\033[0;35m│SCRIPT  : CASHZINE         │
\033[0;33m│CODE    : HAKUTAKA         │
\033[0;35m│HARI    : $hari_ini            │
\033[0;33m│TANGGAL : $tanggal │
\033[0;35m│BAHASA  : PHP              │
\033[0;33m│SUPPORT : ONLY HAKU        │
\033[0;35m╰━━━━━━━━━━━━━━━━━━━━━━━━━━━╯
";
echo"
\033[0;31m    ++++\033[0;35mMENU\033[0;31m+++
\033[0;37m[1] \033[0;31mCLAIM POINT 
\033[0;31m[2] \033[0;32mTAMBAH DATA || TOTAL DATA $h
\033[0;37m[3] \033[0;33mCEK POINT 
\033[0;31m[4] \033[0;34mTAMBAH DATA CEK POINT \033[0;31m";
echo "\nChose ==> \033[0;36m";
$menu = trim(fgets(STDIN));
	if($menu == "1"){
CLAIM();}
	elseif($menu == "4"){
SATU();}
	elseif($menu == "3"){
include(('poin.php'));
$ua=array('Content-Type: application/json','content-pwd: 1','Host: gateway.cashzine.net','Connection: Keep-Alive','User-Agent: Android/vivo/Android/8.1.0/guaguazhuan/3.87/GooglePlay/05f53de0f7cc47265bdd17a25546bb0f/10.76.139.104/com.sky.sea.cashzine/36:6C:BA:31:DA:FA/AArch64 Processor rev 4 (aarch64)////MOBILE/474A48AA39AF08761533E61E4FA9CB29263E0804/59f3a0ac88fcce04/31874cf3/0b60a96d540ac41465ce7558a6bf39e8');
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://gateway.cashzine.net/app-http/api");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $Gb[0]);
$result=curl_exec($ch);
$js=json_decode($result);
$code=$js->code;
if($code=="1000")
	{
$dt=$js->data;
$nickname=$dt->nickname;
$totalgold=$dt->totalgold;
$todaygold=$dt->todaygold;
echo"
Nick Name  : $nickname
Total Gold : $totalgold
Today Gold : $todaygold
";
	}
elseif($code=="1100")
	{
$msg=$js->msg;
print_r($msg);
	}

}/*Kurung Kurawal Milik "3"*/

elseif($menu == "2"){
DUA();}
