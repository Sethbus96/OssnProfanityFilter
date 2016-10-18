<?php
/* File:        acfreplace.lib.php
 * Version:     20150212_0001
 */
function replacer($text) {

    $ascii_pattern = array(
            'xxx',
            'porn',
            'ponography',
            'fuck',
            'pussy',
            'cunt',
            'dick',
	    'ass',
	    'shit',
            'vagina',
            'penis',
            'doggystyle',
            'bitch',
            'cum',
            'asshole',
			'motherfucker'
    );

	$removed_content = "---";
	
    return str_replace($ascii_pattern, $removed_content, $text);
}


