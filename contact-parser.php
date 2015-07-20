<?php

function parseContacts($filename)
{
    $new_contacts = [];

    $handle = fopen($filename, 'r');
    $contacts = trim(fread($handle, filesize($filename)));
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

function addContact ($newContact)
{
    $handle = fopen('contacts.txt', 'a');
    fwrite($handle, $newContact);
    fclose($handle);
    return print_r("Contact added" . PHP_EOL);
}

function compileContact ($name, $number)
{
    $newContact = "$name|$number" . PHP_EOL;
    addContact($newContact);
    return print_r("Contact compiled." . PHP_EOL);
}

compileContact("Alex Karamol", "6144036596");
print_r(parseContacts('contacts.txt'));

?>