<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');