<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');