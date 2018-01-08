<?php

// $Id$

// Try to remove anti-SPAM bits
function antiSpam($email)
{
    $remove_spam = "![-_]?(NO|I[-_]?HATE|DELETE|REMOVE)[-_]?(THIS)?(ME|SPAM)?[-_]?!i";
    return preg_replace($remove_spam, "", trim($email));
}

class Foo { 
    public $aMemberVar = 'aMemberVar Member Variable'; 
    public $aFuncName = 'aMemberFunc'; 
    
    
    function fooster() { 
        print 'Inside `aMemberFunc()`'; 
    } 
} 
	// Try to remove anti-SPAM bits
	// Try to remove anti-SPAM bits
	// Try to remove anti-SPAM bits

namespace MyFunctions{
	// Try to remove anti-SPAM bits
	function clean($email) {
	    $remove_spam = "![-_]?(NO|I[-_]?HATE|DELETE|REMOVE)[-_]?(THIS)?(ME|SPAM)?[-_]?!i";
	    return preg_replace($remove_spam, "", trim($email));
	}
}

?>
