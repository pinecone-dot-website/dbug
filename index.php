<?php 

namespace WP_Dbug;

if( is_admin() )
	require __DIR__.'/admin.php';

require __DIR__.'/functions.php';
require __DIR__.'/theme.php';
require __DIR__.'/lib/WP_Dbug/Dbug.php';

Dbug::setup();