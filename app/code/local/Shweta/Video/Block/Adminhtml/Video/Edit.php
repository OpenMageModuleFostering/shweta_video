<?php
	
class Shweta_Video_Block_Adminhtml_Video_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
		public function __construct()
		{

				parent::__construct();
				$this->_objectId = "id";
				$this->_blockGroup = "video";
				$this->_controller = "adminhtml_video";
				$this->_updateButton("save", "label", Mage::helper("video")->__("Save Item"));
				$this->_updateButton("delete", "label", Mage::helper("video")->__("Delete Item"));

				$this->_addButton("saveandcontinue", array(
					"label"     => Mage::helper("video")->__("Save And Continue Edit"),
					"onclick"   => "saveAndContinueEdit()",
					"class"     => "save",
				), -100);



				$this->_formScripts[] = "

							function saveAndContinueEdit(){
								editForm.submit($('edit_form').action+'back/edit/');
							}
						";
		}

		public function getHeaderText()
		{
				if( Mage::registry("video_data") && Mage::registry("video_data")->getId() ){

				    return Mage::helper("video")->__("Edit Item '%s'", $this->htmlEscape(Mage::registry("video_data")->getId()));

				} 
				else{

				     return Mage::helper("video")->__("Add Item");

				}
		}
}