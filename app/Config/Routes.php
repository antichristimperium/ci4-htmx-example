<?php

# Add the following lines in your App/Config/Routes.php

$routes->get('/htmx', [HTMXController::class, "index"]);
$routes->get('/htmx/list', [HTMXController::class, "list"]);
$routes->post('/htmx/create', [HTMXController::class, "create"]);
$routes->delete('/htmx/delete/(:num)', [HTMXController::class, "delete"]);

