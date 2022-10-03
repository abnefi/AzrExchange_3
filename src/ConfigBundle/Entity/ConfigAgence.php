<?php

namespace ConfigBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConfigAgence
 *
 * @ORM\Table(name="config_agence")
 * @ORM\Entity(repositoryClass="ConfigBundle\Repository\ConfigAgenceRepository")
 */
class ConfigAgence
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

