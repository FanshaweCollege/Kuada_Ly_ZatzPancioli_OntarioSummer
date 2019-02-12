<?php

function send_email($name, $email, $returning) {
	if($returning) {
        $message = 'Returning subscriber email';
        return $message;
	} else {
        $message = 'New subscriber email';
        return $message;
	}
}

?>