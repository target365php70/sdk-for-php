<?php

declare(strict_types = 1);

namespace Target365\ApiSdk\Model;

use Target365\ApiSdk\Exception\ApiClientException;
use Target365\ApiSdk\Attribute\DateTimeAttribute;

class OneTimePassword extends AbstractModel
{
    protected $transactionId;
    protected $merchantId;
    protected $recipient;
    protected $sender;
    protected $recurring;
    protected $messagePrefix;
    protected $messageSuffix;
    protected $message;
    protected $timeToLive;
    protected $created;
    protected $delivered;

    protected function attributes()
    {
        return [
            'transactionId',
            'merchantId',
            'recipient',
            'sender',
            'recurring',
            'messagePrefix',
            'messageSuffix',
            'message',
            'timeToLive',
            'created',
            'delivered',
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

    public function setTransactionId(string $transactionId)
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    public function getMerchantId()
    {
        return $this->merchantId;
    }

    public function setMerchantId(string $merchantId)
    {
        $this->merchantId = $merchantId;
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

    public function getSender()
    {
        return $this->sender;
    }

    public function setSender(string $sender)
    {
        $this->sender = $sender;
        return $this;
    }

    public function getRecurring()
    {
        return $this->recurring;
    }

    public function setRecurring(bool $recurring)
    {
        $this->recurring = $recurring;
        return $this;
    }

    public function getMessagePrefix()
    {
        return $this->messagePrefix;
    }

    public function setMessagePrefix($messagePrefix = null)
    {
        $this->messagePrefix = $messagePrefix;
        return $this;
    }

    public function getMessageSuffix()
    {
        return $this->messageSuffix;
    }

    public function setMessageSuffix($messageSuffix = null)
    {
        $this->messageSuffix = $messageSuffix;
        return $this;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message = null)
    {
        $this->message = $message;
        return $this;
    }

    public function getTimeToLive()
    {
        return $this->timeToLive;
    }

    public function setTimeToLive($timeToLive = null)
    {
        $this->timeToLive = $timeToLive;
        return $this;
    }

    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     * @return OneTimePassword
     * @throws ApiClientException
     */
    public function setCreated(string $created)
    {
        $this->created = new DateTimeAttribute($created);
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
}
