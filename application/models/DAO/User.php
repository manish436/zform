<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author NOIDA\ppi
 */
class Application_Model_DAO_User implements Application_Model_DAO_UserInterface
{

    private $_em = null;

    public function __construct()
    {
        $registry = Zend_Registry::getInstance();
        $this->_em = $registry->entitymanager;
    }

    public function findAll()
    {
        
    }

    public function findByCategory(Application_Model_DTO_User $user)
    {
        
    }

    public function findById(Application_Model_DTO_User $user)
    {
        
    }

    public function save(Application_Model_DTO_User $user)
    {
        $this->_em->persist($user);
        $this->_em->flush();
    }

}
