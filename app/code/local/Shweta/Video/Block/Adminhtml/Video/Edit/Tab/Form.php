<?php
class Shweta_Video_Block_Adminhtml_Video_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("video_form", array("legend"=>Mage::helper("video")->__("Item information")));

				
						$fieldset->addField("keyurl", "text", array(
						"label" => Mage::helper("video")->__("keyurl"),
						"name" => "keyurl",
						));
					

				if (Mage::getSingleton("adminhtml/session")->getVideoData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getVideoData());
					Mage::getSingleton("adminhtml/session")->setVideoData(null);
				} 
				elseif(Mage::registry("video_data")) {
				    $form->setValues(Mage::registry("video_data")->getData());
				}
				return parent::_prepareForm();
		}
}
