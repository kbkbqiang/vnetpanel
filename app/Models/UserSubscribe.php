<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');