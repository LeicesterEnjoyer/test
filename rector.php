<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->sets([
        \Rector\Set\ValueObject\SetList::PHP_81,
    ]);
};
