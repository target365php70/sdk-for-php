<?php

declare(strict_types = 1);

namespace Target365\ApiSdk\Model;

use Target365\ApiSdk\Exception\ApiClientException;

abstract class AbstractModel
{
    abstract protected function attributes();

    abstract public function getIdentifier();

    public function populate(array $data)
    {
        foreach ($data as $key => $value) {
            if ($value === null || !in_array($key, $this->attributes(), true)) {
                continue;
            }
            
            if ($key === 'properties') {

                if ($this instanceof DynamicPropertiesInterface && is_array($value)) {
                    $properties = new Properties;

                    foreach ($value as $innerKey => $innerValue) {
                        $properties->$innerKey = $innerValue;
                    }

                    $this->setProperties($properties);
                }
            } else {
                $methodName = 'set' . ucfirst($key);
                $this->$methodName($value);
            }
        }
    }

    /**
     * @return array
     * @throws ApiClientException
     */
    public function normalize()
    {
        $normalizedData = [];

        foreach ($this->attributes() as $attribute) {
            $getter = 'get' . ucfirst($attribute);
            $value = $this->$getter();

            if ($value === null) {
                continue;
            }

            if ($value instanceof AbstractModel) {
                $normalizedData[$attribute] = $value->normalize();
                continue;
            }

            if ($value instanceof Properties) {
                $normalizedData[$attribute] = $value->toArray();
                continue;
            }
            
            if (is_object($value)) {
                if (!method_exists($value, '__toString')) {
                    throw new ApiClientException('Object does not implement __toString()');
                }

                $normalizedData[$attribute] = $value->__toString();
            } else {
                $normalizedData[$attribute] = $value;
            }
        }

        return $normalizedData;
    }
}
