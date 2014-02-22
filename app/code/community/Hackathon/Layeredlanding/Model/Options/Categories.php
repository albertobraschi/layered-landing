<?php

class Hackathon_Layeredlanding_Model_Options_Categories extends Mage_Core_Model_Abstract
{

    public function toOptionArray()
    {
        $collection = Mage::getModel('catalog/category')->getCollection()
            ->addAttributeToSelect('name')
            ->addAttributeToSelect('children_count')
            ->addAttributeToSelect('level')
            ->addAttributeToFilter('is_active', 1)
            ->addAttributeToFilter('is_anchor', 1)
            ->addAttributeToFilter('level', array('gt' => 1))
            ->setOrder('level', 'ASC');

        foreach ($collection as $item) {
            $categories[] = array(
                'label' => $item->getName(),
                'value' => $item->getId()
            );
        }

        return $categories;
    }
}