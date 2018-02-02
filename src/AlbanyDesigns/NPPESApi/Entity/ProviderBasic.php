<?php
namespace AlbanyDesigns\NPPESApi\Entity;


class ProviderBasic
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $credential;

    /**
     * @var string
     */
    public $firstName;

    /**
     * @var string
     */
    public $lastName;

    /**
     * @var \DateTime
     */
    public $lastUpdated;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $soleProprietor;

    /**
     * @var string
     */
    public $namePrefix;

    /**
     * @var \DateTime
     */
    public $enumerationDate;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getCredential()
    {
        return $this->credential;
    }

    /**
     * @param string $credential
     */
    public function setCredential($credential)
    {
        $this->credential = $credential;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * @param \DateTime $lastUpdated
     */
    public function setLastUpdated($lastUpdated)
    {
        $this->lastUpdated = $lastUpdated;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getSoleProprietor()
    {
        return $this->soleProprietor;
    }

    /**
     * @param string $soleProprietor
     */
    public function setSoleProprietor($soleProprietor)
    {
        $this->soleProprietor = $soleProprietor;
    }

    /**
     * @return string
     */
    public function getNamePrefix()
    {
        return $this->namePrefix;
    }

    /**
     * @param string $namePrefix
     */
    public function setNamePrefix($namePrefix)
    {
        $this->namePrefix = $namePrefix;
    }

    /**
     * @return \DateTime
     */
    public function getEnumerationDate()
    {
        return $this->enumerationDate;
    }

    /**
     * @param \DateTime $enumerationDate
     */
    public function setEnumerationDate($enumerationDate)
    {
        $this->enumerationDate = $enumerationDate;
    }


}