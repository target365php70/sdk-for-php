<?php

declare(strict_types = 1);

namespace Target365\ApiSdk\Resource;

use Target365\ApiSdk\Exception\ResourceMethodNotAvailableException;
use Target365\ApiSdk\Model\AbstractModel;
use Target365\ApiSdk\Model\OneTimePassword;

class OneTimePasswordResource extends AbstractCrudResource
{
    protected function getResourceUri()
    {
        return 'strex/one-time-passwords';
    }

    protected function getResourceModelFqns()
    {
        return OneTimePassword::class;
    }

    public function list()
    {
        throw new ResourceMethodNotAvailableException();
    }

    public function put(AbstractModel $model)
    {
        throw new ResourceMethodNotAvailableException();
    }

    public function delete(string $identifier)
    {
        throw new ResourceMethodNotAvailableException();
    }
}
