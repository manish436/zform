<?php

class IndexController extends Zend_Controller_Action
{

    private $userService = null;

    public function init()
    {
        $this->userService = Application_Model_Service_User::getUserDAO();
    }

    public function indexAction()
    {
        $user = new Application_Model_DTO_User();
        $user->setName("Krishna");

        $this->userService->save($user);
    }

}
