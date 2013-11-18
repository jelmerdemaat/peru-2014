<?php

// Encode an email address to display on your website
// Source: http://www.paulund.co.uk/encode-email-with-php

function encode_email_address( $email ) {
 $output = '';
 for ($i = 0; $i < strlen($email); $i++) {
    $output .= '&#'.ord($email[$i]).';';
 }
 return $output;
}