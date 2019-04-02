<?php sleep(60) ?>
<html>
    <head>
        <title>Tugboat Test Page</title>
    </head>
    <body>
        <pre>
        <?php ksort($_ENV); print_r($_ENV); ?>
        </pre>
    </body>
</html>
