<?php
$mass = [1, 2, 3, 5, 16];
$value = 3;
$search = array_search($value, $mass);
if ($search !== false) {
    print ("Вот оно: $search");
} else {
    print ("Не попал:");
}