<?php

declare(strict_types = 1);

namespace Target365\ApiSdk\Resource;

use Target365\ApiSdk\Exception\ResourceMethodNotAvailableException;
use Target365\ApiSdk\Model\AbstractModel;
use Target365\ApiSdk\Model\StrexMerchant;

class StrexMerchantResource extends AbstractCrudResource
{
    protected function getResourceUri()
    {
        return 'strex/merchants';
    }

    protected function getResourceModelFqns()
    {
        return StrexMerchant::class;
    }

    public function post(AbstractModel $model)
    {
        throw new ResourceMethodNotAvailableException();
    }
}
