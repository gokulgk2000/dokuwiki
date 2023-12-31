<?php
/**
 * This is an example of how a local.php could look like.
 * Simply copy the options you want to change from dokuwiki.php
 * to this file and change them.
 *
 * When using the installer, a correct local.php file be generated for
 * you automatically.
 */


//$conf['title']       = 'My Wiki';        //what to show in the title

//$conf['useacl']      = 1;                //Use Access Control Lists to restrict access?
//$conf['superuser']   = 'joe';

$conf['useacl'] = 1;
$conf['superuser'] = 'admin';
$conf['plugin']['authplain']['users'] = 'admin:hashedpassword';
$conf['plugin']['sqlite']['db'] = 'path/to/your/dokuwiki/data/cache/db/dokuwiki.db';
