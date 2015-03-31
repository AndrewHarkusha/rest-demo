<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table
 * @ORM\Entity
 * @ORM\AttributeOverrides({
 *      @ORM\AttributeOverride(name="password", column=@ORM\Column(nullable=true)),
 *      @ORM\AttributeOverride(name="email", column=@ORM\Column(nullable=true)),
 *      @ORM\AttributeOverride(name="emailCanonical", column=@ORM\Column(nullable=true))
 * })
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="vkontakte_id", type="string", length=255, nullable=true)
     */
    private $vkontakte_id;

    /**
     * @ORM\Column(name="vkontakte_access_token", type="string", length=255, nullable=true)
     */
    protected $vkontakte_access_token;


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
     * Set firstName
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $vkontakte_id
     */
    public function setVkontakteId($vkontakte_id)
    {
        $this->vkontakte_id = $vkontakte_id;
    }

    /**
     * @return string
     */
    public function getVkontakteId()
    {
        return $this->vkontakte_id;
    }

    public function setVkontakteAccessToken($vkontakte_access_token)
    {
        $this->vkontakte_access_token = $vkontakte_access_token;
    }

    /**
     * @return mixed
     */
    public function getVkontakteAccessToken()
    {
        return $this->vkontakte_access_token;
    }
}
