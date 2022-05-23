<?php

declare(strict_types = 1);

namespace Target365\ApiSdk\Resource;

use Target365\ApiSdk\Exception\ResourceMethodNotAvailableException;
use Target365\ApiSdk\Model\AbstractModel;
use Target365\ApiSdk\Model\StrexRegistrationSms;

class StrexRegistrationResource extends AbstractCrudResource
{
    protected function getResourceUri()
    {
        return 'strex/registrationsms';
    }

    protected function getResourceModelFqns()
    {
        return StrexRegistrationSms::class;
    }

    public function post(AbstractModel $model)
    {
        $this->forceResourceModel($model);
        $uri = $this->getResourceUri();
        $normalizedData = $model->normalize();
        $response = $this->apiClient->request('post', $uri, $normalizedData);
        return $model->getIdentifier();
    }

    public function getUserValidity(string $merchantId, string $recipient)
    {
        $uri = 'strex/validity?recipient=' . urlencode($recipient) . '&merchantId=' . urlencode($merchantId);
        $response = $this->apiClient->request('get', $uri);
        return $this->decodeResponseJsonString($response);
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
