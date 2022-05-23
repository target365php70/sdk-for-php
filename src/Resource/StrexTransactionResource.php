<?php

declare(strict_types = 1);

namespace Target365\ApiSdk\Resource;

use Target365\ApiSdk\Exception\ResourceMethodNotAvailableException;
use Target365\ApiSdk\Model\AbstractModel;
use Target365\ApiSdk\Model\StrexTransaction;

class StrexTransactionResource extends AbstractCrudResource
{
    protected function getResourceUri()
    {
        return 'strex/transactions';
    }

    protected function getResourceModelFqns()
    {
        return StrexTransaction::class;
    }

    public function list()
    {
        throw new ResourceMethodNotAvailableException();
    }

    public function put(AbstractModel $model)
    {
        throw new ResourceMethodNotAvailableException();
    }
    
    /**
     * @deprecated 1.3.0 Please use reverse instead.
     */
    public function delete(string $identifier)
    {
        $this->reverse($identifier);
    }
    
    /**
     * @param string $identifier
     * @throws ApiClientException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \InvalidArgumentException
     */
    public function reverse(string $identifier)
    {
        $uri = $this->getResourceUri() . '/' . $identifier;
        $response = $this->apiClient->request('delete', $uri);
        $locationHeaders = $response->getHeader('Location');
        $locationHeader = reset($locationHeaders);
        return $this->parseIdentifierFromLocationHeader($locationHeader);
    }
}
