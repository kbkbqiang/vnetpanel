<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('DBDFC5B74756CBC2AAQAAAAXAAAABJAAAACABAAAAAAAAAD/SV5L7wNXVn6W4Gskdt5/rzRPMbBBSCczZcM/093nsFam1WkZ+AQl+OTzsrVSO1ISeTJbxfGiBtR0okKIgyVaNjrP+m/il5rGby11jQMxNFKUG/CDLq1+O3rabEk4iiF7q5RIzLjaN78QNYvi+52HYg+dd80d+wd0cMFNCdzrfg+fpxCJ0HIMdllgJ/No6F0GSQAAAFACAABABTAbWBXv5D1mPbNF11fzIV6IufgXKvojmDdZoNc2B/vOq9+7LOrAgvtoMpjtdRbJNdnzzaehoPOfGAfaVBcPq3MiO7p7U7XWPKvhVT2vrrPb8RxpZLBdn3wSKBNzUjszlpTIXb7SeKeLCVXmuJsEYyeFOhThpsMuBzIJlfRv88v4jA2DX809MFklELXMyfN6HeUx/4OXXma4SynPJ45yF/NOWNtffZI5480b3c6nid6nBoxuT0LZSzlyGOuAKSIghFVjff/5coTn3GHQimvz6Xi+nfQVLAe1bdf7FDuz0tH+UR4BZwzz6c9W9AWQ0vU9iJjumCcsHTEmAl4BqOmt7gsils7OKInMCEMUffTcW9O/7hGtPBi2CWZ+gB+wMC5/JjnFxJdpgfZy2BD/Mu8w/HWESbgcF6U1VcqXjjrvyqfdacvzHmrq3vaQnA3IQv5edHXsUZdBKoHEXCWZ5/h5MD7DGzO+d/btW0ZNR0pSvB3kyhrJ252xEBSwSh5hJy1w3D/uMtEECMnmxgeXnVtPBKs5cAgkWUZccAvoSTAaIb3OIjYEBdeJ43L/SdwyFTWrKxw9nKHDSy9BoqKo5X7x9oa/9A9cTbLwPI4IPwJyrPqwpeoYcVvIMasQvVJ3ozlMTvfXRcfZLFGFCskmIWAdNOEM9siFEkDdVGMvTNiMviBtFAlLQvtjjJY4RamUwyId0gIcKE6M+Guh7fQbY/lCJFEOUbrDHpjTtM3HOaWBRDZMtfvINSOYgsfdRb635vZa2fjVnTnYIvj6AL85mkWJSgAAAFACAABrz0ova7Dz9ajHB+Hm8q4Yk5LKqzfqwuq33l8TpnIhnSmLylHKpOy9D4lb/+okQ6BxE4Bu8iR4XXQYXXFFCina/bhLvf5NAe/dfPK2gEHO44gaU1Cqjox8fEDX/LYJFm0w76lOPKm2LpTl7MUu767NzF94HDtgRjrfPqNE+rnhQaRz/GeXs6sXv2keqG6TAE2oqH5v4xWpZAxk/HGHzDmBlZW/Rq/QXO2i8Ut/BnTf6aslsGt8SjoH1i9FHaOa8NU82b/eVphLAc0FO9xTrTjdSjC1Sf1eAQXJYjV2RZTcVSwRQbHs5Yp9cjpBDH8mXu4TlLDoU9/C87OYtPdFLbcFTj42f95t02GORHyGxUk6v21u/nUEixq6GMKjHaJnya78SuhmEt5zcABaSAhJuGRPQi/7jy6v5201lcvTLx0WivHbuS8d9bmgdQYY9xtcBAktZHWp85lTyrGPLCC93K1MW1mFxQsrovBjS+Kf2h74Ygj8UN+M2GgT+3CwvLIZvAWMDWRhw5NPpx8PFRHkZpofG9pN6cMuIEi/cFyMU6DDbEojUMUBKtq0uH0S6hT2B6Nd6aOX/rz/FIp4EKK7C0KCwe7b521H9floh6AlUNNNs3N7hwNP6C6xH/Jox/98L2H2gpn6uiJ6gYIes9kZMMX0FA3XeHUyh6SjSnxV7A2iJyoMngRla4RD7Fo5HXqMvQto7rsfWcvjqRmsIZ2Rbk4PCPJZScIn3e6JxaVuCmgBLPJ6F22VuzCMPn7shE5oMoB3PjUGWtf82xF8lR4x/rHOAAAAAA==');