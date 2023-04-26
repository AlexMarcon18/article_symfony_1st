<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

echo ('hello');
echo ('<div><p>banana</p></div>');

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
