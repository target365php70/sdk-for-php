<?php

declare(strict_types = 1);

namespace Target365\ApiSdk\Resource;

use Target365\ApiSdk\Exception\ResourceMethodNotAvailableException;
use Target365\ApiSdk\Model\AbstractModel;
use Target365\ApiSdk\Model\OneClickConfig;

class OneClickConfigResource extends AbstractCrudResource
{
    protected function getResourceUri()
    {
        return 'one-click/configs';
    }

    protected function getResourceModelFqns()
    {
        return OneClickConfig::class;
    }

    public function list()
    {
        throw new ResourceMethodNotAvailableException();
    }

    public function post(AbstractModel $model)
    {
        throw new ResourceMethodNotAvailableException();
    }

    public function delete(string $identifier)
    {
        throw new ResourceMethodNotAvailableException();    
		}
}
