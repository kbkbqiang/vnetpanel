<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');