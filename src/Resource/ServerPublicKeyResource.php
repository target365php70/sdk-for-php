<?php

declare(strict_types = 1);

namespace Target365\ApiSdk\Resource;

use Target365\ApiSdk\Exception\ResourceMethodNotAvailableException;
use Target365\ApiSdk\Model\AbstractModel;
use Target365\ApiSdk\Model\PublicKey;

class ServerPublicKeyResource extends AbstractCrudResource
{
    protected function getResourceUri()
    {
        return 'server/public-keys';
    }

    protected function getResourceModelFqns()
    {
        return PublicKey::class;
    }

    public function post(AbstractModel $model)
    {
        throw new ResourceMethodNotAvailableException();
    }

    public function put(AbstractModel $model)
    {
        throw new ResourceMethodNotAvailableException();
    }

    /**
     * @return array
     * @throws ResourceMethodNotAvailableException
     */
    public function list()
    {
        throw new ResourceMethodNotAvailableException();
    }

    /**
     * @param string $identifier
     * @throws ResourceMethodNotAvailableException
     */
    public function delete(string $identifier)
    {
        throw new ResourceMethodNotAvailableException();
    }
}
