<?php

function parseContacts($filename){
    $contacts = array();
    $filename = 'contacts.txt';
    $handle = fopen($filename, 'r');
    $contents = trim(fread($handle, filesize($filename)));
    $contentsArray = explode("\n", $contents);
    foreach ($contentsArray as $key => $value) {
        $keyarrays = ['Name', 'Number'];
        $key = array_combine($keyarrays , explode("|", $value));
        $key['Number'] = phoneNumberFormating($key['Number']);
        $new[] = $key;
    };
    fclose($handle);
    return $new;
};

function phoneNumberFormating($phoneNumber){
    $phoneNumber = substr($phoneNumber, 0, 3) . '-' . substr($phoneNumber, 3, 3) . '-' .substr($phoneNumber,6,4);
    return $phoneNumber;
};

var_dump(parseContacts('contacts.txt'));