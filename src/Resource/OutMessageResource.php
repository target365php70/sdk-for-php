<?php

declare(strict_types = 1);

namespace Target365\ApiSdk\Resource;

use Target365\ApiSdk\Exception\ResourceMethodNotAvailableException;
use Target365\ApiSdk\Model\OutMessage;
use Target365\ApiSdk\Attribute\DateTimeAttribute;

class OutMessageResource extends AbstractCrudResource
{
    protected function getResourceUri()
    {
        return 'out-messages';
    }

    protected function getResourceModelFqns()
    {
        return OutMessage::class;
    }

    public function list()
    {
        throw new ResourceMethodNotAvailableException();
    }

    public function prepareMsisdns(array $arr)
    {
        $uri = 'prepare-msisdns';

        $response = $this->apiClient->request('post', $uri, $arr);
    }

    /**
     * POST /out-message/batch
     *
     * @param OutMessage[] $outMessages
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \InvalidArgumentException
     * @throws \Target365\ApiSdk\Exception\ApiClientException
     */
    public function postBatch(array $outMessages)
    {
        $uri = 'out-messages/batch';

        $postData = [];

        foreach ($outMessages as $outMessage) {
            $this->forceResourceModel($outMessage);

            $postData[] = $outMessage->normalize();
        }

        $response = $this->apiClient->request('post', $uri, $postData);
    }

    public function getExport(DateTimeAttribute $from, DateTimeAttribute $to)
    {
        $uri = 'export/out-messages?from=' . urlencode($from->__toString()) . '&to=' . urlencode($to->__toString());
        $response = $this->apiClient->request('get', $uri);
        return $response->getBody()->__toString();
    }
}
