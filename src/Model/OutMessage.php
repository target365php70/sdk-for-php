<?php

declare(strict_types = 1);

namespace Target365\ApiSdk\Model;

use Target365\ApiSdk\Attribute\DateTimeAttribute;

class OutMessage extends AbstractModel implements DynamicPropertiesInterface
{
    protected $transactionId;
    protected $correlationId;
    protected $keywordId;
    protected $sender;
    protected $recipient;
    protected $content;
    protected $strex;
    protected $allowUnicode;
    protected $sendTime;
    protected $timeToLive;
    protected $priority;
    protected $deliveryMode;
    protected $deliveryReportUrl;
    protected $statusCode;
    protected $smscTransactionId;
    protected $detailedStatusCode;
    protected $delivered;
    protected $smscMessageParts;
    protected $tags;
    protected $properties;
    protected $lastModified;
    protected $created;

    /**
     * Gets the number of sms message parts are required for a given text and encoding
     *
     * @param string $text
     * @param bool $unicode
     * @return int
     */
    public static function getSmsPartsForText(string $text, $unicode = null)
    {
        if ($unicode === true) {
            return (strlen($text) <= 70) ? 1 : (int)ceil(strlen($text) / 67);
        }
        
        $extendedChars = [chr(12), '^', '{', '}', '\\', '[', '~', ']', '|', '€'];
        $totalCharCount = 0;

        $stringLength = strlen($text);
        for ($i = 0; $i < $stringLength; $i++) {
            $totalCharCount++;
            
            if (in_array($text[$i], $extendedChars, true)) {
                $totalCharCount++;
            }
        }

        if ($totalCharCount <= 160) {
            return 1;
        }

        $maxSeptetsPerPart = 153;
        $parts = 1;
        $septets = 0;

        for ($i = 0; $i < $stringLength; $i++) {
            if ($septets === $maxSeptetsPerPart || ($septets === ($maxSeptetsPerPart - 1) && in_array($text[$i], $extendedChars, true))) {
                $parts++;
                $septets = 0;
            }
            
            if (in_array($text[$i], $extendedChars, true)) {
                $septets += 2;
            } else {
                $septets += 1;
            }
        }

        return $parts;
    }
    
    protected function attributes()
    {
        return [
            'transactionId',
            'correlationId',
            'keywordId',
            'sender',
            'recipient',
            'content',
            'strex',
            'allowUnicode',
            'sendTime',
            'timeToLive',
            'priority',
            'deliveryMode',
            'deliveryReportUrl',
            'statusCode',
            'smscTransactionId',
            'detailedStatusCode',
            'delivered',
            'smscMessageParts',
            'tags',
            'properties',
            'lastModified',
            'created',
        ];
    }
    
    public function getIdentifier()
    {
        return $this->getTransactionId();
    }

    public function getSmsParts()
    {
        return OutMessage::getSmsPartsForText($this->getContent() ?? '', $this->getAllowUnicode());
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

    public function getKeywordId()
    {
        return $this->keywordId;
    }

    public function setKeywordId($keywordId = null)
    {
        $this->keywordId = $keywordId;
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

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content = null)
    {
        $this->content = $content;
        return $this;
    }

    public function getStrex()
    {
        return $this->strex;
    }

    public function setStrex($strex = null)
    {
        $this->strex = $strex;
        return $this;
    }

    public function getAllowUnicode()
    {
        return $this->allowUnicode;
    }

    public function setAllowUnicode($allowUnicode = null)
    {
        $this->allowUnicode = $allowUnicode;
        return $this;
    }
    
    public function getSendTime()
    {
        return $this->sendTime;
    }

    /**
     * @param string $sendTime
     * @return OutMessage
     * @throws \Target365\ApiSdk\Exception\ApiClientException
     */
    public function setSendTime(string $sendTime)
    {
        $this->sendTime = new DateTimeAttribute($sendTime);
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

    public function getPriority()
    {
        return $this->priority;
    }

    public function setPriority($priority = null)
    {
        $this->priority = $priority;
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

    public function getDeliveryReportUrl()
    {
        return $this->deliveryReportUrl;
    }

    public function setDeliveryReportUrl($deliveryReportUrl = null)
    {
        $this->deliveryReportUrl = $deliveryReportUrl;
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

    public function getSmscTransactionId()
    {
        return $this->smscTransactionId;
    }

    public function setSmscTransactionId($smscTransactionId = null)
    {
        $this->smscTransactionId = $smscTransactionId;
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

    public function getDelivered()
    {
        return $this->delivered;
    }

    public function setDelivered($delivered = null)
    {
        $this->delivered = $delivered;
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

    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * @param string $lastModified
     * @return OutMessage
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
     * @return OutMessage
     * @throws \Target365\ApiSdk\Exception\ApiClientException
     */
    public function setCreated(string $created)
    {
        $this->created = new DateTimeAttribute($created);
        return $this;
    }
}
