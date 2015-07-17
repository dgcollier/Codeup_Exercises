<?php

function parseContacts($filename)
{
    $new_contacts = [];

    // todo - read file and parse contacts

    $handle = fopen($filename, 'r');
    $contacts = fread($handle, filesize($filename));
    fclose($handle);

    $contacts = explode(PHP_EOL, $contacts);
    // print_r($contacts);
    // $contacts = implode('|', $contacts);
    // print_r($contacts);
    // $contacts = explode('|', $contacts);

    foreach ($contacts as $contact) {
        array_push($new_contacts, explode('|', $contact));
    }

    foreach ($new_contacts as $key => $value) {
        $number = substr($value[1], 0, 3) . '-' . substr($value[1], 3, 3) . '-' . substr($value[1], 6, 4);
        $new_contacts[$key] = array("name" => $value[0], "number" => $number);
    }

    $contacts = $new_contacts;

    return $contacts;
}

print_r(parseContacts('contacts.txt'));

?>