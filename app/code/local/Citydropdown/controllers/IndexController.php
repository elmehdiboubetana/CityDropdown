<?php
class ITG_Citydropdown_IndexController extends Mage_Core_Controller_Front_Action
{
    public function multiplyAction()
    {
    	 /*$postData = Mage::app()->getRequest()->getPost('v');
         if(!$postData)
          {
            $postData = $this->getRequest()->getPost('v'); 
            echo 'if1';
          }
            if(!$postData)
           {
             $postData = $_POST['v']; 
             echo 'if2';
           }*/
         $postData='485';
         $session = Mage::getSingleton('core/session');
         $session->setData('ville',$postData);
    }

}