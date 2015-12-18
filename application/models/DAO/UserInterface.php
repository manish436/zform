<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author NOIDA\ppi
 */
interface Application_Model_DAO_UserInterface
{

    public function save(Application_Model_DTO_User $user);

    public function findById(Application_Model_DTO_User $user);

    public function findAll();

    public function findByCategory(Application_Model_DTO_User $user);
}
