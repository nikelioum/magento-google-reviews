<?php
    /**
    * Google Reviews
    *
    * @category    Elegento
    * @package     Elegento_Google_Reviews
    * @author      Dimitris Liaropoulos
    *
    */
namespace Elegento\Google_Reviews\Block;
class Google_Reviews extends \Magento\Framework\View\Element\Template
{
	public function _prepareLayout()
	{
		parent::_prepareLayout();
        $this->pageConfig->getTitle()->set(__('Google Reviews'));
        return $this;
	}
}
