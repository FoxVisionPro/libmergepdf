<?php

namespace iio\libmergepdf\Driver;

use iio\libmergepdf\Source\SourceInterface;

interface DriverInterface
{
    /**
     * Merge multiple sources
     */
    public function merge(string $documentTitle, SourceInterface ...$sources): string;
}
