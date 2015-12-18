<?php

/**
 * @Entity
 * @Table(name="users")
 */
class Application_Model_DTO_User
{

    /**
     * @Id @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    /** @Column(type="string") */
    private $name;

    public function setName($string)
    {
        $this->name = $string;
        return true;
    }

}
