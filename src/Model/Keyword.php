<?php

declare(strict_types = 1);

namespace Target365\ApiSdk\Model;

use Target365\ApiSdk\Attribute\DateTimeAttribute;

class Keyword extends AbstractModel
{
    protected $keywordId;
    protected $shortNumberId;
    protected $keywordText;
    protected $mode;
    protected $forwardUrl;
    protected $enabled;
    protected $created;
    protected $lastModified;
    protected $tags;

    public function attributes()
    {
        return [
          'keywordId',
          'shortNumberId',
          'keywordText',
          'mode',
          'forwardUrl',
          'enabled',
          'created',
          'lastModified',
          'tags',
        ];
    }

    public function getIdentifier()
    {
        return $this->getKeywordId();
    }

    public function getKeywordId()
    {
        return $this->keywordId;
    }

    public function setKeywordId(string $keywordId)
    {
        $this->keywordId = $keywordId;
        return $this;
    }

    public function getShortNumberId()
    {
        return $this->shortNumberId;
    }

    public function setShortNumberId(string $shortNumberId)
    {
        $this->shortNumberId = $shortNumberId;
        return $this;
    }

    public function getKeywordText()
    {
        return $this->keywordText;
    }

    public function setKeywordText(string $keywordText)
    {
        $this->keywordText = $keywordText;
        return $this;
    }

    public function getMode()
    {
        return $this->mode;
    }

    public function setMode(string $mode)
    {
        $this->mode = $mode;

        return $this;
    }

    public function getForwardUrl()
    {
        return $this->forwardUrl;
    }

    public function setForwardUrl(string $forwardUrl)
    {
        $this->forwardUrl = $forwardUrl;
        return $this;
    }

    public function getEnabled()
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled)
    {
        $this->enabled = $enabled;
        return $this;
    }

    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     * @return Keyword
     * @throws \Target365\ApiSdk\Exception\ApiClientException
     */
    public function setCreated(string $created)
    {
        $this->created = new DateTimeAttribute($created);
        return $this;
    }

    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * @param string $lastModified
     * @return Keyword
     * @throws \Target365\ApiSdk\Exception\ApiClientException
     */
    public function setLastModified(string $lastModified)
    {
        $this->lastModified = new DateTimeAttribute($lastModified);
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
