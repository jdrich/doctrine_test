<?php

namespace EAS;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $reportedBugs;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $assignedBugs;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reportedBugs = new \Doctrine\Common\Collections\ArrayCollection();
        $this->assignedBugs = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add reportedBugs
     *
     * @param \EAS\Bug $reportedBugs
     * @return User
     */
    public function addReportedBug(\EAS\Bug $reportedBugs)
    {
        $this->reportedBugs[] = $reportedBugs;

        return $this;
    }

    /**
     * Remove reportedBugs
     *
     * @param \EAS\Bug $reportedBugs
     */
    public function removeReportedBug(\EAS\Bug $reportedBugs)
    {
        $this->reportedBugs->removeElement($reportedBugs);
    }

    /**
     * Get reportedBugs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReportedBugs()
    {
        return $this->reportedBugs;
    }

    /**
     * Add assignedBugs
     *
     * @param \EAS\Bug $assignedBugs
     * @return User
     */
    public function addAssignedBug(\EAS\Bug $assignedBugs)
    {
        $this->assignedBugs[] = $assignedBugs;

        return $this;
    }

    /**
     * Remove assignedBugs
     *
     * @param \EAS\Bug $assignedBugs
     */
    public function removeAssignedBug(\EAS\Bug $assignedBugs)
    {
        $this->assignedBugs->removeElement($assignedBugs);
    }

    /**
     * Get assignedBugs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAssignedBugs()
    {
        return $this->assignedBugs;
    }
}
