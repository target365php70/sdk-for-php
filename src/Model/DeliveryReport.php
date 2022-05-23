<?php

declare(strict_types = 1);

namespace Target365\ApiSdk\Model;

use Psr\Http\Message\RequestInterface;
use Target365\ApiSdk\Exception\ApiClientException;

class DeliveryReport extends AbstractModel
{
    protected $transactionId;
    protected $correlationId;
    protected $sender;
    protected $recipient;
    protected $operatorId;
    protected $price;
    protected $statusCode;
    protected $detailedStatusCode;
    protected $delivered;
    protected $billed;
    protected $smscTransactionId;
    protected $smscMessageParts;

    /**
     * Creates a Message object from the raw POST data
     *
     * @return DeliveryReport
     * @throws \RuntimeException If the POST data is absent, or not a valid JSON document
     * @throws \InvalidArgumentException
     */
    public static function fromRawPostData()
    {
        // Read the raw POST data and JSON-decode it into a message.
        return self::fromJsonString(file_get_contents('php://input'));
    }

    /**
     * Creates a Message object from a PSR-7 Request or ServerRequest object.
     *
     * @param RequestInterface $request
     * @return DeliveryReport
     * @throws \InvalidArgumentException
     */
    public static function fromPsrRequest(RequestInterface $request)
    {
        return self::fromJsonString($request->getBody()->getContents());
    }

    /**
     * Creates a Message object from a JSON-decodable string.
     *
     * @param string $json
     * @return DeliveryReport
     * @throws \InvalidArgumentException
     */
    public static function fromJsonString(string $json)
    {
        $data = \GuzzleHttp\json_decode($json, true);
        $dlr = new self();
        $dlr->populate($data);
        return $dlr;
    }

    protected function attributes()
    {
        return [
            'correlationId',
            'transactionId',
            'price',
            'sender',
            'recipient',
            'operatorId',
            'statusCode',
            'detailedStatusCode',
            'delivered',
            'billed',
            'smscTransactionId',
            'smscMessageParts',
        ];
    }

    /**
     * @return string|null
     */
    public function getIdentifier()
    {
        return null;
    }

    public function getTransactionId()
    {
        return $this->transactionId;
    }

    public function setTransactionId($transactionId = null)
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    public function getCorrelationId()
    {
        return $this->correlationId;
    }

    public function setCorrelationId($correlationId = null)
    {
        $this->correlationId = $correlationId;
        return $this;
    }

    public function getSender()
    {
        return $this->sender;
    }

    public function setSender(string $sender)
    {
        $this->sender = $sender;
        return $this;
    }

    public function getRecipient()
    {
        return $this->recipient;
    }

    public function setRecipient(string $recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }

    public function getOperatorId()
    {
        return $this->operatorId;
    }

    public function setOperatorId($operatorId = null)
    {
        $this->operatorId = $operatorId;
        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price = null)
    {
        $this->price = $price;
        return $this;
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function setStatusCode(string $statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    public function getDetailedStatusCode()
    {
        return $this->detailedStatusCode;
    }

    public function setDetailedStatusCode(string $detailedStatusCode)
    {
        $this->detailedStatusCode = $detailedStatusCode;
        return $this;
    }

    public function getDelivered()
    {
        return $this->delivered;
    }

    public function setDelivered($delivered = null)
    {
        $this->delivered = $delivered;
        return $this;
    }

    public function getBilled()
    {
        return $this->billed;
    }

    public function setBilled($billed = null)
    {
        $this->billed = $billed;
        return $this;
    }

    public function getSmscTransactionId()
    {
        return $this->smscTransactionId;
    }

    public function setSmscTransactionId($smscTransactionId = null)
    {
        $this->smscTransactionId = $smscTransactionId;
        return $this;
    }

    public function getSmscMessageParts()
    {
        return $this->smscMessageParts;
    }

    public function setSmscMessageParts(int $smscMessageParts)
    {
        $this->smscMessageParts = $smscMessageParts;
        return $this;
    }
}
