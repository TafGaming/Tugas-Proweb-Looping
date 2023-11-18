<?php

function bilanganprima($angka) {
    if ($angka < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($angka); $i++) {
        if ($angka % $i === 0) {
            return false;
        }
    }
    return true;
}
for ($i = 0; $i <= 50; $i++) {
    if (bilanganprima($i)) {
        echo "$i. Bilangan prima<br>";
    }
}