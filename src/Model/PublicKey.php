<?php

declare(strict_types = 1);

namespace Target365\ApiSdk\Model;

use Target365\ApiSdk\Attribute\DateTimeAttribute;

class PublicKey extends AbstractModel
{
    protected $name;
    protected $expiry;
    protected $signAlgo;
    protected $hashAlgo;
    protected $publicKeyString;
    protected $notUsableBefore;
    protected $created;
    protected $lastModified;

    protected function attributes()
    {
        return [
            'name',
            'expiry',
            'signAlgo',
            'hashAlgo',
            'publicKeyString',
            'notUsableBefore',
            'created',
            'lastModified',
        ];
    }

    public function getIdentifier()
    {
        return $this->getName();
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    public function getExpiry()
    {
        return $this->expiry;
    }

    /**
     * @param string $expiry
     * @return PublicKey
     * @throws \Target365\ApiSdk\Exception\ApiClientException
     */
    public function setExpiry(string $expiry)
    {
        $this->expiry = new DateTimeAttribute($expiry);
        return $this;
    }

    public function getSignAlgo()
    {
        return $this->signAlgo;
    }

    public function setSignAlgo(string $signAlgo)
    {
        $this->signAlgo = $signAlgo;
        return $this;
    }

    public function getHashAlgo()
    {
        return $this->hashAlgo;
    }

    public function setHashAlgo(string $hashAlgo)
    {
        $this->hashAlgo = $hashAlgo;
        return $this;
    }

    public function getPublicKeyString()
    {
        return $this->publicKeyString;
    }

    public function setPublicKeyString(string $publicKeyString)
    {
        $this->publicKeyString = $publicKeyString;
        return $this;
    }

    public function getNotUsableBefore()
    {
        return $this->notUsableBefore;
    }

    public function setNotUsableBefore($notUsableBefore)
    {
        $this->notUsableBefore = $notUsableBefore;

        return $this;
    }

    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     * @return PublicKey
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
     * @return PublicKey
     * @throws \Target365\ApiSdk\Exception\ApiClientException
     */
    public function setLastModified(string $lastModified)
    {
        $this->lastModified = new DateTimeAttribute($lastModified);
        return $this;
    }
}
