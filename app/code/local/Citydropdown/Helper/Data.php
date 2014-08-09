<?php

class ITG_Citydropdown_Helper_Data extends Mage_Core_Helper_Abstract
{     
      function getMarCitiesAsDropdown()
      {
        $model = Mage::getModel('citydropdown/city');
        $collection =  $model->getCollection();
        foreach($collection as $city){
          $options .= '<option value="'.$city->getdefaultName().'" >' . $city->getdefaultName() . '</option>';
        }
        return $options;
     }
}

?>