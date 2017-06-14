<?php

namespace M2l\Model\Entity;

class Formation extends BaseEntity
{
    private $id;
    private $name;
    private $description;
    private $days;
    private $date;
    private $credits;
    private $duration;
    private $place;
    private $requirement;
    private $provider;
    private $status;

    /**
     * @param array|null $data
     */
    public function hydrate(array $data = null)
    {
        parent::hydrate($data);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     * @return mixed
     */
    public function getCredits()
    {
        return $this->credits;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @return mixed
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @return mixed
     */
    public function getRequirement()
    {
        return $this->requirement;
    }

    /**
     * @return mixed
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param $id
     * @return $this
     */
    public function setId($id)
    {
        if (!is_int($id)) {
            $id = (int)$id;
        }
        $this->id = $id;
        return $this;
    }

    /**
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param $days
     * @return $this
     */
    public function setDays($days)
    {
        if (!is_int($days)) {
            $days = (int)$days;
        }
        $this->days = $days;
        return $this;
    }

    /**
     * @param $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @param $credits
     * @return $this
     */
    public function setCredits($credits)
    {
        if (!is_int($credits)) {
            $credits = (int)$credits;
        }
        $this->credits = $credits;
        return $this;
    }

    /**
     * @param $duration
     * @return $this
     */
    public function setDuration($duration)
    {
        if (!is_int($duration)) {
            $duration = (int)$duration;
        }
        $this->duration = $duration;
        return $this;
    }

    /**
     * @param $place
     * @return $this
     */
    public function setPlace($place)
    {
        $this->place = $place;
        return $this;
    }

    /**
     * @param $requirements
     * @return $this
     */
    public function setRequirement($requirements)
    {
        if (is_array($requirements)) {
            foreach ($requirements as $requirement) {
                $this->requirement[] = $requirement;
            }
        } else {
            $this->requirement[] = $requirements;
        }
        return $this;
    }

    /**
     * @param $provider
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * @param $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param $attribute
     * @return bool
     */
    public function __isset($attribute)
    {
        return (bool)isset($this->$attribute);
    }

    /**
     * @param $attribute
     * @return false|string
     */
    public function __get($attribute)
    {
        if ('date' == $attribute) {
            return $date = date('d/m/Y', strtotime($this->$attribute));
        }
        return $this->$attribute;
    }
}
