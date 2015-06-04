<?php

namespace EAS;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bug
 */
class Bug
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var string
     */
    private $status;

    /**
     * @var \EAS\User
     */
    private $reporter;

    /**
     * @var \EAS\User
     */
    private $engineer;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $products;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function prePersist() {
        $this->created = new \DateTime();
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
     * Set description
     *
     * @param string $description
     * @return Bug
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Bug
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Bug
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set reporter
     *
     * @param \EAS\User $reporter
     * @return Bug
     */
    public function setReporter(\EAS\User $reporter = null)
    {
        $this->reporter = $reporter;

        return $this;
    }

    /**
     * Get reporter
     *
     * @return \EAS\User
     */
    public function getReporter()
    {
        return $this->reporter;
    }

    /**
     * Set engineer
     *
     * @param \EAS\User $engineer
     * @return Bug
     */
    public function setEngineer(\EAS\User $engineer = null)
    {
        $this->engineer = $engineer;

        return $this;
    }

    /**
     * Get engineer
     *
     * @return \EAS\User
     */
    public function getEngineer()
    {
        return $this->engineer;
    }

    /**
     * Add products
     *
     * @param \EAS\Product $products
     * @return Bug
     */
    public function addProduct(\EAS\Product $products)
    {
        $this->products[] = $products;

        return $this;
    }

    /**
     * Remove products
     *
     * @param \EAS\Product $products
     */
    public function removeProduct(\EAS\Product $products)
    {
        $this->products->removeElement($products);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProducts()
    {
        return $this->products;
    }
}
