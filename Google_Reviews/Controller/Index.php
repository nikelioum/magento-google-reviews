<?php
/**
* Google Reviews
*
* @category    Elegento
* @package     Elegento_Google_Reviews
* @author      Dimitris Liaropoulos
*
*/
namespace Elegento\Google_Reviews\Controller\Index;
class Index extends \Magento\Framework\App\Action\Action
{
	public function execute()
	{
		$this->_view->loadLayout();
		$this->_view->renderLayout();
	}
}
