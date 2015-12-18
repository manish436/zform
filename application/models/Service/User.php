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
class Application_Model_Service_User
{

    public static function getUserDAO()
    {
        return new Application_Model_DAO_User();
    }

}
