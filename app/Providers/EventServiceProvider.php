<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('DBDFC5B74756CBC2AAQAAAAXAAAABJAAAACABAAAAAAAAAD/a3LInwtlTi76XNIXLYKZnopw7kcnJebZmIVUCXkGkiWUeb1KPgI7NS15RPxAoGSlfc1X7Hb6G76lnkrWkVWGad0JFsfMm2D34BuE7jHz1etJbJcA858jaeMcOKwqRMoDip6ZUPjJ86er+ftAOXdS0LJNbf99M+lo+0j8fVgavUh8Bkj8GTm/EivzgQSFJO+aSQAAADgCAAAUo9aZrNmYmtOaHKRRFT+lt2XsLFR1HkyOpHrumq+jeguPU1tpeHJEb/ujJBYUoVW/wec4FwvWwh2OCC8OABg5BSQim7y3CDYjpWCrSd5+wMJOrtuS7pgmtOvBwPHn5mngu2X1fqCR2BKq2nzbJpB9Twa+RN7M6yDJNuXjqZhcEVlna2yAe1PBphZEADWBnnMq2O1UaiyvcapaVWMH9PzbhBazm5hyXJXwnyzu/AO6OTGCXojAml5OXthipXv52DuLYquDpS1SqWX1H+MzVCP+R0pKvX7RuIZ8l5f0VaQmgMs7Ug67Y+d6Fk0/h5DaeaT8Uhe4bhCiy3oWkl0o+H0h+G4Dq2NwFsckLWICJoVRfWC2u8HBvSqErXGnYxHMsqaZHyCnxW/VUdSVZ/coKLYwO8U2qXp7XwtR/HvTymLQy0CzcPUJtYaQfkbhisYHapZLjHPUkWMkvU1kBVVLXSClq9/KWxdkvjMv9DA0hJH8n6rwJhioerAaOKbz7G09dgoffinL2ldNh5eiyGMYak6JxW6nUn1cdqc1qQWBNZarGtP9yBkD3eSmKosM7QAubl0PXxuMBbT/z1bHHlDF7BZAJ2RT95WNYjzXGKqaGHkNc04x/ksFZ3zy2pYZXjGNffHz2bI5DosJmTZ2wEjysTn+MUgoEDH2kXZ0TFW9KNhw06NkhVWS6O+Hr0rHzbx8VIyeDvHlZwR1ganxiBd6S+A4rM5ev+Z9OE/4TeNWbqk020K3CXoUn3R3SgAAAEACAAAVxDKHL1jQYbTwrJZ8w8Wo+NAahM/E/H3Lq6RdPJS1xImAwenpfJrtPYuFN7uMA62BnaI1kMra+wRfQr98Al3ROM01ZlwwC6os2IS/C4pRN98sFWoPM1pBuDyQ0mhUCg3LdLRxQEbnru3UU05U3BJeOm1pz5mZerRc4M8xzYXx5xDNxysoRSP2x60zKlVC+GHpkwrsPqBhUlah4BYKg5uhvgf00xM48jdHj5kdv7x38VAM++JX8MtLp9mobwZ0Ne0gqdsYcBAhjr43TB73sbC78dojsxEZ/LN37Pf9l1t2xbh+hKPd1amxy2bvuv876o5/79bXcOjOoYDUJVwC0G+SAmFgcTnm12UUKvnsp2bJ2sWMH/Fx5AZqhaoiJsduL0k95M7AZwu1WkoLMwBIlsfUhYIlfloCyxn+lILb0sZF635YkeywPL6WPsCJy44JXPyCXTBfdnBCKOkGO3Nw4zzvgf9oDA35wIxEF+QCHcG+DjX98LeQjVii3vLWIFs2WJD4RYx+BYyHl8D6xs74H7CNr9DuwIqA4ONGndvBC2JIWzNC2OLocfOXLLBQrPnwAWg3UuRrloAosDguFFrF6aCzgtrtu1fuDIKyk6OUkfYR/llPwcaPZRQZc8s4GLPVE2kEUQ886nzS+S21K1Ze1WhTXE6077VpqPimVytqDOQV5RcboWBMFNT6JTCPxRGaeUIa8jRGyKcHcpcPPqaj+tz8EQSz4abynJejCOyoGdglctZ56VUaj40eWBR3Jpzq4kAAAAAA');