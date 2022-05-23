<?php

declare(strict_types = 1);

namespace Target365\ApiSdk\Model;

class StrexRegistrationSms extends AbstractModel
{
    protected $merchantId;
    protected $transactionId;
    protected $recipient;
    protected $smsText;

    protected function attributes()
    {
        return [
            'merchantId',
            'transactionId',
            'recipient',
            'smsText',
        ];
    }

    /**
     * @return string|null
     */
    public function getIdentifier()
    {
        return $this->transactionId;
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

    public function getSmsText()
    {
        return $this->smsText;
    }

    public function setSmsText(string $smsText)
    {
        $this->smsText = $smsText;
        return $this;
    }
}
