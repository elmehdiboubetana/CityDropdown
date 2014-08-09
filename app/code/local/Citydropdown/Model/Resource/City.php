<?php
  /**
  *  
  */
  class ITG_Citydropdown_Model_Resource_City extends Mage_Core_Model_Resource_Db_Abstract{
    

    protected function _construct()
    {
        $this->_init('citydropdown/city', 'city_id');
    }
}

?>