<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');