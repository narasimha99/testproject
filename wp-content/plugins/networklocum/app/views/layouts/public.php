<?php
if( $mylayout == 'customer')
	include('customer-layout.php');

if(	$mylayout == 'advisor')
	include('advisor-layout.php');

if(	$mylayout == 'client')
	include('client-layout.php');

if(	$mylayout == 'empty')
	include('emptypage-layout.php');
?>