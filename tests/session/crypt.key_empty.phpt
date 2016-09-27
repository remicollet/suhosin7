--TEST--
session with encryption key empty
--SKIPIF--
<?php include "../skipifcli.inc"; ?>
--INI--
suhosin.session.encrypt=On
suhosin.session.cryptkey=
suhosin.session.cryptua=Off
suhosin.session.cryptdocroot=Off
suhosin.session.cryptraddr=0
suhosin.session.checkraddr=0
--FILE--
<?php
include "sessionhandler.inc";
session_test_start();
$_SESSION['a'] = 'b';


?>
--EXPECTF--
SESSION: RIuy2LSSd3_s3hhDCnN89bNWyCnhvNAO0YUq7OQKuJc.
