<?php

declare(strict_types = 1);

namespace Target365\ApiSdk\Resource;

use Target365\ApiSdk\Model\InMessage;

class InMessageResource extends AbstractResource // intentionally not extending AbstractCrudResource
{
    protected function getResourceUri()
    {
        return 'in-messages';
    }

    protected function getResourceModelFqns()
    {
        return InMessage::class;
    }

    /**
     * GET /api/in-messages/{shortNumberId}/{transactionId}
     *
     * @param string $shortNumberId
     * @param string $transactionId
     * @return InMessage
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \InvalidArgumentException
     * @throws \Target365\ApiSdk\Exception\ApiClientException
     */
    public function get(string $shortNumberId, string $transactionId)
    {
        $uri = $this->getResourceUri() . '/' . $shortNumberId . '/' . $transactionId;
        $response = $this->apiClient->request('get', $uri);
        $responseData = $this->decodeResponseJson($response);
        return $this->instantiateModel($responseData);
    }
}
