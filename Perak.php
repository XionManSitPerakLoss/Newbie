<?php
date_default_timezone_set('Asia/Jakarta');
include "function.php";
os.system('clear');
sleep (2);
echo color("blue"," Silahkan Tunggu Sebentar \n");
sleep (2);
echo color("red"," Jangan Lupa Sodakoh! \n");
os.system('xdg-open //https://t.me/XionManSit');
sleep (5);
os.system('clear');
sleep (2);
echo color("red","[]                 PERAK LOSS                 []\n");
echo color("nevy","[]            CREATOR : XionManSit            []\n");
echo color("blue","[]       Time : ".date('[d-m-Y] [H:i:s]')."       []\n");
login2:
echo color("nevy","🔐▶️ Masukan ID \n");
$pass =  ( '╄1�71ￄ1�77 User Login2 : ' );
echo "\033[30;40m";
$user = trim(fgets(STDIN));
echo "\033[0m";
if($user == "xms")
{
		goto ulang;
}
else
{
goto login2;
}
	return rtrim( $input, "\n" );
ulang:
login:
echo color("nevy","🔐▶️ Masukan PASSWORD \n");
$pass =  ( '╄1�71ￄ1�77 User Login : ' );
echo "\033[30;40m";
$user = trim(fgets(STDIN));
echo "\033[0m";
if($user == "perak")
{
		goto ulang2;
}
else
{
goto login;
}
	return rtrim( $input, "\n" );
ulang2:
echo "\n".color("red"," ?▶️ Cara Menulis Nomor 08xxxxxxxxxx\n");
// function change(){
        $nama = nama();
        $email = str_replace(" ", "", $nama) . mt_rand(100, 999);
        echo color("green","📲▶️ Nomor : ");
        // $no = trim(fgets(STDIN));
        $nohp = trim(fgets(STDIN));
        $nohp = str_replace("62","62",$nohp);
        $nohp = str_replace("(","",$nohp);
        $nohp = str_replace(")","",$nohp);
        $nohp = str_replace("-","",$nohp);
        $nohp = str_replace(" ","",$nohp);
        
        if (!preg_match('/[^+0-9]/', trim($nohp))) {
            if (substr(trim($nohp),0,3)=='62') {
                $hp = trim($nohp);
        }
            else if (substr(trim($nohp),0,1)=='0') {
                $hp = '62'.substr(trim($nohp),1);
        }
         elseif(substr(trim($nohp), 0, 2)=='62'){
            $hp = '6'.substr(trim($nohp), 1);
        }
        else{
            $hp = '1'.substr(trim($nohp),0,13);
        }
        }
        $data = '{"email":"'.$email.'@gmail.com","name":"'.$nama.'","phone":"+'.$hp.'","signed_up_country":"ID"}';
        $register = request("/v5/customers", null, $data);
        if(strpos($register, '"otp_token"')){
        $otptoken = getStr('"otp_token":"','"',$register);
        echo color("pink","📶▶️ Kode verifikasi sudah di kirim")."\n";
        otp:
        echo color("purple","💬▶️ Otp : ");
        $otp = trim(fgets(STDIN));
        $data1 = '{"client_name":"gojek:cons:iphone","data":{"otp":"' . $otp . '","otp_token":"' . $otptoken . '"},"client_secret":"484edbb9-ab94-44a4-abc2-c8d8cf9d125a"}';
        $verif = request("/v5/customers/phone/verify", null, $data1);
        if(strpos($verif, '"access_token"')){
        echo color("pink","✔️▶️ Berhasil mendaftar\n");
        $token = getStr('"access_token":"','"',$verif);
        $uuid = getStr('"resource_owner_id":',',',$verif);
        echo color("nevy","+] Your access token : ".$token."\n\n");
        save("token.txt",$token);
        sleep(3);
        $cekvoucher = request('/gopoints/v3/wallet/vouchers?limit=13&page=1', $token);
        $total = fetch_value($cekvoucher,'"total_vouchers":',',');
        $voucher1 = getStr1('"title":"','",',$cekvoucher,"1");
        $voucher2 = getStr1('"title":"','",',$cekvoucher,"2");
        $voucher3 = getStr1('"title":"','",',$cekvoucher,"3");
        $voucher4 = getStr1('"title":"','",',$cekvoucher,"4");
        $voucher5 = getStr1('"title":"','",',$cekvoucher,"5");
        $voucher6 = getStr1('"title":"','",',$cekvoucher,"6");
        $voucher7 = getStr1('"title":"','",',$cekvoucher,"7");
        $voucher8 = getStr1('"title":"','",',$cekvoucher,"8");
        $voucher9 = getStr1('"title":"','",',$cekvoucher,"9");
        $voucher10 = getStr1('"title":"','",',$cekvoucher,"10");
        $voucher11 = getStr1('"title":"','",',$cekvoucher,"11");
        $voucher12 = getStr1('"title":"','",',$cekvoucher,"12");
        $voucher13 = getStr1('"title":"','",',$cekvoucher,"13");
        echo "\n".color("purple","🎫▶️ Total voucher ".$total." : ");
        echo "\n".color("green","                     1. ".$voucher1);
        echo "\n".color("green","                     2. ".$voucher2);
        echo "\n".color("green","                     3. ".$voucher3);
        echo "\n".color("green","                     4. ".$voucher4);
        echo "\n".color("green","                     5. ".$voucher5);
        echo "\n".color("green","                     6. ".$voucher6);
        echo "\n".color("green","                     7. ".$voucher7);
        echo "\n".color("green","                     8. ".$voucher8);
        echo "\n".color("green","                     9. ".$voucher9);
        echo "\n".color("green","                     10. ".$voucher10);
    	echo "\n".color("green","                     11. ".$voucher11);
        echo "\n".color("green","                     12. ".$voucher12);
        echo "\n".color("green","                     13. ".$voucher13);
        echo"\n";
        $expired1 = getStr1('"expiry_date":"','"',$cekvoucher,'1');
        $expired2 = getStr1('"expiry_date":"','"',$cekvoucher,'2');
        $expired3 = getStr1('"expiry_date":"','"',$cekvoucher,'3');
        $expired4 = getStr1('"expiry_date":"','"',$cekvoucher,'4');
        $expired5 = getStr1('"expiry_date":"','"',$cekvoucher,'5');
        $expired6 = getStr1('"expiry_date":"','"',$cekvoucher,'6');
        $expired7 = getStr1('"expiry_date":"','"',$cekvoucher,'7');
        $expired8 = getStr1('"expiry_date":"','"',$cekvoucher,'8');
        $expired9 = getStr1('"expiry_date":"','"',$cekvoucher,'9');
        $expired10 = getStr1('"expiry_date":"','"',$cekvoucher,'10');
        $expired11 = getStr1('"expiry_date":"','"',$cekvoucher,'11');
        $expired12 = getStr1('"expiry_date":"','"',$cekvoucher,'12');
        $expired13 = getStr1('"expiry_date":"','"',$cekvoucher,'13');
         setpin:
         echo "\n".color("purple","🔧▶️ SET PIN GOPAY SEKALIAN ? !!!: Y/N ");
         $pilih1 = trim(fgets(STDIN));
         if($pilih1 == "y" || $pilih1 == "Y"){
         //if($pilih1 == "y" && strpos($no, "628")){
         echo color("nevy","🛠▶️ PIN GOPAY KAMU ADALAH = 112233")."\n";
         $data2 = '{"pin":"112233"}';
         $getotpsetpin = request("/wallet/pin", $token, $data2, null, null, $uuid);
         echo "Otp pin: ";
         $otpsetpin = trim(fgets(STDIN));
         $verifotpsetpin = request("/wallet/pin", $token, $data2, null, $otpsetpin, $uuid);
         echo $verifotpsetpin;
         }else if($pilih1 == "n" || $pilih1 == "N"){
         die();
         }else{
         echo color("red","-] GAGAL!!!\n");
         }
         }else{
         echo color("red","-] OTP nya salah coba cek lagi \n");
         echo color("red","!] Coba input lagi \n");
         goto otp;
         }
         }else{
         echo color("red","-] Nomor udah keregist.\n");
         echo color("red","!] Coba Nomer Fresh Lainnya \n");
         goto ulang2;
           }
// echo change()."\n";
