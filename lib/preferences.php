<?php

/****************************************************************************/
/*                                                                          */
/* YOU MAY WISH TO MODIFY OR REMOVE THE FOLLOWING LINES WHICH SET DEFAULTS  */
/*                                                                          */
/****************************************************************************/

// Sets the default charset so that setCharset() is not needed elsewhere
Swift_Preferences::getInstance()->setCharset('utf-8');

// Without these lines the default caching mechanism is "array" but this uses
// a lot of memory.
// If possible, use a disk cache to enable attaching large attachments etc
if (ini_get('upload_tmp_dir') && is_writable(ini_get('upload_tmp_dir') . '/'))
{
  Swift_Preferences::getInstance()
    -> setTempDir(ini_get('upload_tmp_dir'))
    -> setCacheType('disk');
}

Swift_Preferences::getInstance()->setQPDotEscape(false);
