<?php

declare(strict_types=1);

namespace Target365\ApiSdk\Model;

interface DynamicPropertiesInterface
{
    public function getProperties();
    public function setProperties($properties = null);
}
