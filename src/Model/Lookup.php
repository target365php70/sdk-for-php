<?php

declare(strict_types = 1);

namespace Target365\ApiSdk\Model;

use Target365\ApiSdk\Exception\ApiClientException;

class Lookup extends AbstractModel
{
    protected $created;
    protected $msisdn;
    protected $landline;
    protected $firstName;
    protected $middleName;
    protected $lastName;
    protected $companyName;
    protected $companyOrgNo;
    protected $streetName;
    protected $streetNumber;
    protected $streetLetter;
    protected $zipCode;
    protected $city;
    protected $gender;
    protected $dateOfBirth;
    protected $age;
    protected $deceasedDate;

    protected function attributes()
    {
        return [
            'created',
            'msisdn',
            'landline',
            'firstName',
            'middleName',
            'lastName',
            'companyName',
            'companyOrgNo',
            'streetName',
            'streetNumber',
            'streetLetter',
            'zipCode',
            'city',
            'gender',
            'dateOfBirth',
            'age',
            'deceasedDate',
        ];
    }

    /**
     * @return string|null
     */
    public function getIdentifier()
    {
        return null;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function setCreated($created = null)
    {
        $this->created = $created;
        return $this;
    }

    public function getMsisdn()
    {
        return $this->msisdn;
    }

    public function setMsisdn(string $msisdn)
    {
        $this->msisdn = $msisdn;
        return $this;
    }

    public function getLandline()
    {
        return $this->landline;
    }

    public function setLandline($landline = null)
    {
        $this->landline = $landline;
        return $this;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName = null)
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getMiddleName()
    {
        return $this->middleName;
    }

    public function setMiddleName($middleName = null)
    {
        $this->middleName = $middleName;
        return $this;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName = null)
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getCompanyName()
    {
        return $this->companyName;
    }

    public function setCompanyName($companyName = null)
    {
        $this->companyName = $companyName;
        return $this;
    }

    public function getCompanyOrgNo()
    {
        return $this->companyOrgNo;
    }

    public function setCompanyOrgNo($companyOrgNo = null)
    {
        $this->companyOrgNo = $companyOrgNo;
        return $this;
    }

    public function getStreetName()
    {
        return $this->streetName;
    }

    public function setStreetName($streetName = null)
    {
        $this->streetName = $streetName;
        return $this;
    }

    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    public function setStreetNumber($streetNumber = null)
    {
        $this->streetNumber = $streetNumber;
        return $this;
    }

    public function getStreetLetter()
    {
        return $this->streetLetter;
    }

    public function setStreetLetter($streetLetter = null)
    {
        $this->streetLetter = $streetLetter;
        return $this;
    }

    public function getZipCode()
    {
        return $this->zipCode;
    }

    public function setZipCode($zipCode = null)
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city = null)
    {
        $this->city = $city;
        return $this;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender(string $gender)
    {
        $this->gender = $gender;
        return $this;
    }

    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    public function setDateOfBirth($dateOfBirth = null)
    {
        $this->dateOfBirth = $dateOfBirth;
        return $this;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    public function getDeceasedDate()
    {
        return $this->deceasedDate;
    }

    public function setDeceasedDate($deceasedDate = null)
    {
        $this->deceasedDate = $deceasedDate;
        return $this;
    }
}
