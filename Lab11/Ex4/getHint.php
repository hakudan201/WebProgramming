<?php
$a[] = "Boyhood";
$a[] = "Moonlight";
$a[] = "Roma";
$a[] = "Manchester by the Sea";
$a[] = "12 Years a Slave";
$a[] = "Gravity";
$a[] = "Parasite";
$a[] = "Portrait of a Lady on Fire";
$a[] = "La La La Land";
$a[] = "Avatar";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach ($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
