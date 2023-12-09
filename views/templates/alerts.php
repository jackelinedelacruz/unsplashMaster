<?php

foreach ($alerts as $key => $alert) :
    foreach ($alert as $message) :
?>
        <ul>
            <li><?php echo $message; ?></li>
        </ul>

<?php
    endforeach;
endforeach;
?>