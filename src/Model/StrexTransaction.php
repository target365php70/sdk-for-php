<?php

declare(strict_types = 1);

namespace Target365\ApiSdk\Model;

use Target365\ApiSdk\Attribute\DateTimeAttribute;

class StrexTransaction extends StrexData
{
    protected $transactionId;
    protected $sessionId;
    protected $correlationId;
    protected $shortNumber;
    protected $recipient;
    protected $content;
    protected $oneTimePassword;
    protected $deliveryMode;
    protected $tags;
    protected $properties;    
    protected $statusCode;
    protected $detailedStatusCode;
    protected $smscTransactionId;
    protected $created;
    protected $lastModified;

    protected function attributes()
    {
        return array_merge(
            parent::attributes(),
        [
            'transactionId',
            'sessionId',
            'correlationId',
            'shortNumber',
            'recipient',
            'content',
            'oneTimePassword',
            'deliveryMode',
            'tags',
            'properties',
            'statusCode',
            'detailedStatusCode',
            'smscTransactionId',
            'created',
            'lastModified',
        ]
        );
    }

    public function getIdentifier()
    {
        return $this->getTransactionId();
    }

    public function getTransactionId()
    {
        return $this->transactionId;
    }

    public function setTransactionId(string $transactionId)
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    public function getSessionId()
    {
        return $this->sessionId;
    }

    public function setSessionId($sessionId = null)
    {
        $this->sessionId = $sessionId;
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

    public function getShortNumber()
    {
        return $this->shortNumber;
    }

    public function setShortNumber(string $shortNumber)
    {
        $this->shortNumber = $shortNumber;
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
    
    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content = null)
    {
        $this->content = $content;
        return $this;
    }

    public function getOneTimePassword()
    {
        return $this->oneTimePassword;
    }

    public function setOneTimePassword($oneTimePassword = null)
    {
        $this->oneTimePassword = $oneTimePassword;
        return $this;
    }

    public function getDeliveryMode()
    {
        return $this->deliveryMode;
    }

    public function setDeliveryMode($deliveryMode = null)
    {
        $this->deliveryMode = $deliveryMode;
        return $this;
    }
    
    public function getTags()
    {
        return $this->tags;
    }
    
    public function setTags($tags = null)
    {
        $this->tags = $tags;
        return $this;
    }
    
    public function getProperties()
    {
        return $this->properties;
    }
    
    public function setProperties($properties = null)
    {
        $this->properties = $properties;
        return $this;
    }
    
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function setStatusCode($statusCode = null)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    public function getDetailedStatusCode()
    {
        return $this->detailedStatusCode;
    }

    public function setDetailedStatusCode($detailedStatusCode = null)
    {
        $this->detailedStatusCode = $detailedStatusCode;
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

    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * @param string $lastModified
     * @return StrexTransaction
     * @throws \Target365\ApiSdk\Exception\ApiClientException
     */
    public function setLastModified(string $lastModified)
    {
        $this->lastModified = new DateTimeAttribute($lastModified);
        return $this;
    }

    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     * @return StrexTransaction
     * @throws \Target365\ApiSdk\Exception\ApiClientException
     */
    public function setCreated(string $created)
    {
        $this->created = new DateTimeAttribute($created);
        return $this;
    }
}
