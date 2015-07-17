<?php

function parseContacts($filename)
{
    $new_contacts = [];

    $handle = fopen($filename, 'r');
    $contacts = fread($handle, filesize($filename));
    fclose($handle);

    $contacts = explode(PHP_EOL, $contacts);

    foreach ($contacts as $contact) {
        array_push($new_contacts, explode('|', $contact));
    }

    foreach ($new_contacts as $key => $value) {
        $new_contacts[$key] = array(
            "name" => $value[0], 
            "number" => format_number($value[1]),
        );
    }

    return $new_contacts;

}

function format_number ($number)
{
    return substr($number, 0, 3) . '-' . substr($number, 3, 3) . '-' . substr($number, 6, 4);
}

print_r(parseContacts('contacts.txt'));

?>