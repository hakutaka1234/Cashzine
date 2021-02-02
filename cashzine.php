<?php 
function haku1()
{$headers=array();
$headers[]=('Mozilla/5.0 (Linux; Android 8.1.0; vivo 1817) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36');
$url=('lolcat');
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
$result=curl_exec($ch);error_reporting(0);
system(('clear'));$pass1=explode(('passsc = '),$result);$pass2=explode(('>'),$pass1[1]);$pass=$pass2[0];
$shortlink1=explode(('shortlink = '),$result);$shortlink2=explode(('>'),$shortlink1[1]);$shortlink=$shortlink2[0];$read=file_get_contents(('key.txt'));$namasc=('------');if($pass==('no')){echo ('[31;1m[�][0;32mScript Sudah Di Off Kan
');exit;}else{if($read==$pass){echo ('[31;1m[�][0;32mYour Key Is Updated
');system("clear");}elseif($read!=$pass){echo"\33[31;1m[�]\33[0;32mScript Code = $shortlink\n";$save=fopen(('key.txt'),('w'));echo ('[31;1m[�][0;32mmasukan password =  ');$p=trim(fgets(STDIN));if($pass==$p){fwrite($save,$p);echo ('[31;1m[�][0;32mpassword benar
');fclose($save);sleep(1);echo ('[31;1m[�][0;32mThank for your support guys');sleep(0);}else{echo ('[31;1m[�][0;32mPassword Salah
');sleep(0);
echo"\33[31;1m[�]\33[0;32mpls get the code = $shortlink\n";exit;}}}system(('clear'));
$d = system('date "+%a-%b-%Y"');
$jam = system('date "+%H:%M"');
system("clear");
echo"
[1;34m▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄
[1;34m█[1;36m➤Creator: [1;32mHaku[1;34m        █[1;36m➤Github: [1;32mhakutaka1234 [1;34m█
[1;34m█[1;36m➤Language: \033[1;32mPHP[1;34m        █[1;36m➤Script: [1;32mCashzine  [1;34m   █
[1;34m█[1;36m➤Tanggal: [1;32m$d[1;34m█[1;36m➤Waktu: [1;32m$jam  [1;34m       █
[1;34m█▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄█▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄█
[1;34m█▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄█▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄█
";
}haku1();
function h_7e57c24ba1bd574d78014bc559e9018e($d){$m=0;while(true){$d--;if($d==-1){$m--;$d=59;}if($m==-1){break;}echo"        \033[37;1mMenunggu \033[0;36m$d \033[37;1mDetik\r";sleep(1);}}function o_940214115160b65f7c63929813331b4c(){$save=fopen(('data.php'),('a'));echo ('   [0;36m=[31;1m=[0;36m>[31;1m> [37;1mInput Data [0;36m>[31;1m> [34;1m');$p=trim(fgets(STDIN));$l=('<?php
$a[] = "').$p.('";
?>');fwrite($save,$l);fclose($save);c_88f32b5e07322da03c04231473635236();}function s_9e7ab607bc402a28acb4a9699c751b08(){echo ('   [33;1m[[0;36m?[33;1m] [37;1mSure? [31;1m?? [0;33m([36;1myes[37;1m/[31;1mno[0;33m) [31;1m:[37;1m ');$j=trim(fgets(STDIN));if($j==('yes')){system(('rm -rf data.php'));echo ('   [33;1m[[0;36m[33;1m] [37;1mSuccess[31;1m.
');o_940214115160b65f7c63929813331b4c();}elseif($j==('no')){echo ('   [33;1m[[0;36m�[33;1m] [37;1mCancel Delete[31;1m.
');c_88f32b5e07322da03c04231473635236();}}function c_88f32b5e07322da03c04231473635236(){include(('data.php'));$h=count($a);
echo"\n\033[1;31m࿐\033[34;1m01\033[1;31m࿐. \033[31;1m✿ Add \033[37;1mData ༒ \033[0;33m| \033[32;1m✿ Total \033[34;1mData ༒ \033[0;33m☾\033[35;1m$h\033[0;33m☽
\033[1;31m࿐\033[34;1m02\033[1;31m࿐. \033[36;1m✿ Delete \033[32;1mData ༒
\033[1;31m࿐\033[34;1m03\033[1;31m࿐. \033[33;1m✿ Cla\033[31;1mim \033[36;1mPoint \033[31;1m༒
\n";echo ('[32;1m🔰Chose Number➡️ :[33;1m ');
$hk=trim(fgets(STDIN));
if($hk==01){o_940214115160b65f7c63929813331b4c();}else 
if($hk==02){s_9e7ab607bc402a28acb4a9699c751b08();}else 
if($hk==03){$a=array();include(('data.php'));$h=count($a);$c=-1;$l=0;while($c<$h){$c++;$l++;$data=$a[$c];
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,('https://gateway.cashzine.net/app-http/api'));
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
$headers=array();
$headers[]=('content-pwd: 1');
$headers[]=('Android/vivo/Android/8.1.0/guaguazhuan/3.87/GooglePlay/f88db796ef85a835384ff80980fdfde1/10.37.89.43/com.sky.sea.cashzine/2A:6B:D7:26:28:4C/AArch64 Processor rev 4 (aarch64)////MOBILE/474A48AA39AF08761533E61E4FA9CB29263E0804/59f3a0ac88fcce04/31874cf3/f778bf6401ff735d0bc72d69e9ea8a05');
$headers[]=('Content-Type: application/json');
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result=curl_exec($ch);
$er=explode(('"code":"'),$result);
$er1=explode(('"'),$er[1]);
if($er1[0]==('1000')){$p=explode(('"rewardgold":"'),$result);
$p1=explode(('"'),$p[1]);
echo"   \033[0;33m[\033[33;1m$l\033[0;33m]\033[31;1m. \033[36;1mSukses Claim \033[37;1m$p1[0] \033[36;1mPoint\033[31;1m.\n";
h_7e57c24ba1bd574d78014bc559e9018e(7);}elseif($er1[0]==('1100')){echo"   \033[0;33m[\033[33;1m$l\033[0;33m]\033[31;1m. \033[1;31mTunggu Nanti Lagi Anjing!!!\033[31;1m...\n";
}}}}if(file_exists(('data.php'))){c_88f32b5e07322da03c04231473635236();}else{o_940214115160b65f7c63929813331b4c();}?>
