<?php
/**********************************************************************************
* SMFShop item                                                                    *
***********************************************************************************
* SMFShop: Shop MOD for Simple Machines Forum                                     *
* =============================================================================== *
* Software Version:           SMFShop 3.0 (Build 12)                              *
* $Date:: 2007-04-14 10:39:52 +0200 (za, 14 apr 2007)                           $ *
* $Id:: RandomMoney.php 113 2007-04-14 08:39:52Z daniel15                       $ *
* Software by:                DanSoft Australia (http://www.dansoftaustralia.net/)*
* Copyright 2005-2007 by:     DanSoft Australia (http://www.dansoftaustralia.net/)*
* Support, News, Updates at:  http://www.dansoftaustralia.net/                    *
*                                                                                 *
* Forum software by:          Simple Machines (http://www.simplemachines.org)     *
* Copyright 2006-2007 by:     Simple Machines LLC (http://www.simplemachines.org) *
*           2001-2006 by:     Lewis Media (http://www.lewismedia.com)             *
***********************************************************************************
* This program is free software; you may redistribute it and/or modify it under   *
* the terms of the provided license as published by Simple Machines LLC.          *
*                                                                                 *
* This program is distributed in the hope that it is and will be useful, but      *
* WITHOUT ANY WARRANTIES; without even any implied warranty of MERCHANTABILITY    *
* or FITNESS FOR A PARTICULAR PURPOSE.                                            *
*                                                                                 *
* See the "license.txt" file for details of the Simple Machines license.          *
* The latest version of the license can always be found at                        *
* http://www.simplemachines.org.                                                  *
**********************************************************************************/

if (!defined('SMF'))
	die('Hacking attempt...');

class item_Rose extends itemTemplate
{
    function getItemDetails()
	{
		$this->authorName = 'coolgem923';
		$this->authorWeb = '';
		$this->authorEmail = 'private';

        $this->name = 'Rose';
        $this->desc = 'Sniff the rose. A nice valentines day gift.';
        $this->price = 75;
        
        $this->require_input = false;
        $this->can_use_item = true;
		$this->addInput_editable = false;
    }

    function getAddInput()
	{
		// There is nothing to input.
    }

    function onUse()
	{
        global $smcFunc, $context, $item_info;
        
        if (!isset($item_info[1]) || $item_info[1] == '')
            $item_info[1] = 75;

        if (!isset($item_info[2]) || $item_info[2] == '')
            $item_info[2] = 200;

        $amount = mt_rand($item_info[1], $item_info[2]);
		
		{
			$smcFunc['db_query']('', '
				UPDATE {db_prefix}members
				SET `money` = `money` + {int:amount}
				WHERE id_member = {int:id}',
				array(
					'id' => $context['user']['id'],
					'amount' => $amount,
				));

			return 'You got ' . formatMoney($amount) . ' from sniffing the rose! Sweet!';
		}
    }

}

?>
