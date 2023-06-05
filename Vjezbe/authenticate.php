<?php

$submitted = !empty($_POST);

?>

<p>Form submitted? 
    <?php
        if ($submitted) {
            echo 'Submitted';
        } else {
            echo 'Nope!';
        }
    
    ?>
</p>