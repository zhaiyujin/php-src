--TEST--
openssl_get_md_methods basic test
--CREDITS--
marcosptf - <marcosptf@yahoo.com.br>
--SKIPIF--
<?php
if (!extension_loaded("openssl")) print "skip";
?>
--FILE--
<?php
var_dump(is_array(openssl_get_md_methods(true)));
var_dump(is_array(openssl_get_md_methods(false)));
?>
--EXPECT--
bool(true)
bool(true)
