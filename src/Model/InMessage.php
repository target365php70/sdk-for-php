<?php

declare(strict_types = 1);

namespace Target365\ApiSdk\Model;

use Psr\Http\Message\RequestInterface;
use Target365\ApiSdk\Attribute\DateTimeAttribute;

class InMessage extends AbstractModel
{
    protected $transactionId;
    protected $keywordId;
    protected $sender;
    protected $recipient;
    protected $content;
    protected $isStopMessage;
    protected $created;
    protected $tags;
    protected $properties;

    /**
     * Creates a Message object from the raw POST data
     *
     * @return InMessage
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
     * @return InMessage
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
     * @return InMessage
     * @throws \InvalidArgumentException
     */
    public static function fromJsonString(string $json)
    {
        $data = \GuzzleHttp\json_decode($json, true);
        $inMessage = new self();
        $inMessage->populate($data);
        return $inMessage;
    }
    
    protected function attributes()
    {
        return [
            'transactionId',
            'keywordId',
            'sender',
            'recipient',
            'content',
            'isStopMessage',
            'created',
            'tags',
            'properties',
        ];
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

    public function setContent(string $content)
    {
        $this->content = $content;
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

    public function getIsStopMessage()
    {
        return $this->isStopMessage;
    }

    public function setIsStopMessage(bool $isStopMessage)
    {
        $this->isStopMessage = $isStopMessage;
        return $this;
    }

    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     * @return InMessage
     * @throws \Target365\ApiSdk\Exception\ApiClientException
     */
    public function setCreated(string $created)
    {
        $this->created = new DateTimeAttribute($created);
        return $this;
    }

    public function getProperties()
    {
        return $this->properties;
    }

    public function setProperties(array $properties = null)
    {
        $this->properties = $properties;
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
}
