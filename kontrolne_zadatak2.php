<?php

$dan = date("l");
//može i bez varijable - switch(date("l"))
switch($dan) {
    case 'Monday':
        echo "Ponedjeljak\n";
        break;
    case 'Tuesday':
        echo "Utorak\n";
        break;
    case 'Wednesday':
        echo "Srijeda\n";
        break;
    case 'Thursday':
        echo "Četvrtak\n";
        break;
    case 'Thursday':
        echo "Četvrtak\n";
            break;
    case 'Friday':
        echo "Petak\n";
        break;
    case 'Saturday':
        echo "Subota\n";
        break;
    case 'Sunday':
        echo "Nedjelja\n";
        break;
    }