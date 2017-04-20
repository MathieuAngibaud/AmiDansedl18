<?php

namespace AmiDanseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lesson
 */
class Lesson
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $danse;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $level;

    /**
     * @var \DateTime
     */
    private $schedule;

    /**
     * @var \DateTime
     */
    private $duration;

    /**
     * @var string
     */
    private $room;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set danse
     *
     * @param string $danse
     * @return Lesson
     */
    public function setDanse($danse)
    {
        $this->danse = $danse;

        return $this;
    }

    /**
     * Get danse
     *
     * @return string 
     */
    public function getDanse()
    {
        return $this->danse;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Lesson
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set level
     *
     * @param string $level
     * @return Lesson
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return string 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set schedule
     *
     * @param \DateTime $schedule
     * @return Lesson
     */
    public function setSchedule($schedule)
    {
        $this->schedule = $schedule;

        return $this;
    }

    /**
     * Get schedule
     *
     * @return \DateTime 
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Set duration
     *
     * @param \DateTime $duration
     * @return Lesson
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return \DateTime 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set room
     *
     * @param string $room
     * @return Lesson
     */
    public function setRoom($room)
    {
        $this->room = $room;

        return $this;
    }

    /**
     * Get room
     *
     * @return string 
     */
    public function getRoom()
    {
        return $this->room;
    }
}
