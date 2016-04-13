<?php

namespace Suite900\Hello\Controller\Hello;


class World extends \Magento\Framework\App\Action\Action
{
	public function execute()
    {
        echo '<p>You Did It!</pd>';
        var_dump(__METHOD__);
    }   
}