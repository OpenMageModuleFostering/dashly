<?php

class dashly_magento_ExampleController extends Mage_Adminhtml_Controller_Action
{

    public function indexAction()
    {
    	// "Fetch" display
        $this->loadLayout();
        
        // "Inject" into display
        // THe below example will not actualy show anything since the core/template is empty
        $this->_addContent($this->getLayout()->createBlock('core/template'));
		 $block = $this->getLayout()
        ->createBlock('core/text', 'example-block')
        ->setText('<a href="https://play.google.com/store/apps/details?id=com.lxrmarketplace.dashly&hl=en" target="_blank"><h1 style="text-align:center;">Download Dashly from Google Play Store </h1></a>
				<div style="">
					

<br /><br />
<p>Dashly is a real-time Magento Dashboard and Admin app for Android Phones &amp; Tablets. It lets you connect to your Magento Store on mobile phones and tablets and get live access to all the vital store information such as Sales, Revenue, Invoice and Shipment information.</p><p>
You can also connect with any number of magento stores from your app. Best of all there is NO NEED for any coding. Anyone can simply install this app by creating an API user in your magento store. There is a helpful guide with screenshots to show how an API User and role can be created.</p>

Key Features &amp; Benefits: 
<ul>
<li> - Keep track of all the vital sales &amp; product metrics in a simple yet intuitive dashboard in real-time wherever you are.</li>
<li> - Get detailed information about each aspect of your ecommerce business by tapping the relevant widget. For example, if you want to know your revenue trend, just tap on the revenue widget and you can see the month till date revenue chart.</li>
<li> - You can take a deeper look at each order to know who placed the order and what were the items purchased within 2 taps.</li>
<li> - Dashly provides a quick look at the orders that are pending and which need your attention. If you choose to, you can simply generate an invoice or process a shipment, or even hold the order, directly from your mobile.</li>
<li> - You also receive automatic notifications on your mobile or tablet if a purchase is made or a certain product goes out of stock. The notification feature is especially useful during the holiday season as you would want to ensure that your popular products are in stock.</li>
<li>You can add multiple magento stores targeting different geographies.</li>
</ul>
<br /><br />
<P style="font-size:16px;">You can access the Android App from the play store location:
<b><a href="https://play.google.com/store/apps/details?id=com.lxrmarketplace.dashly&amp;hl=en"  target="_blank">Dashly from Google Play Store</a></b></P>
				</div>
		');
		
        $this->_addContent($block);
         //echo "Hello developer...";
          //$this->setText('Hello World #3.');      
        // "Output" display
        $this->renderLayout();
    }	
}