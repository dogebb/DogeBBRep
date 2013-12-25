<?php
/**********************************************************************************
* SMFShop item                                                                    *
***********************************************************************************
* SMFShop: Shop MOD for Simple Machines Forum                                     *
* =============================================================================== *
* Software Version:           SMFShop 3.1 (Build 14)                              *
* Software by:                DanSoft Australia (http://www.dansoftaustralia.net/)*
* Copyright 2009 by:          vbgamer45 (http://www.smfhacks.com)                 *
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
***********************************************************************************/

if (!defined('SMF'))
	die('Hacking attempt...');

class item_gameconsole extends itemTemplate 
{
	function getItemDetails() 
	{
		$this->authorName = 'coolgem923';
		$this->authorWeb = 'none';
		$this->authorEmail = 'private';

		$this->name = 'Game Console';
		$this->desc = 'Game Console for users to use.';
		$this->price = 50;
		
		$this->require_input = false;
		$this->can_use_item = true;
		$this->addInput_editable = true;
	}
	
	function getAddInput() 
	{	
		
		global $item_info;
		if ($item_info[1] == 0) $item_info[1] = '';

		return '
		Name of game console (you may use BBCode here): 
		<textarea name="info1" rows="1" style="width: 100%">' . $item_info[1] . '</textarea>';
		
	}

	function onUse() 
	{
		global $item_info;

		// What the site says when the game is 'played'.
		return parse_bbc("You booted up your $item_info[1] and played a very fun game.");;
		return parse_bbc($item_info[1]);
		
	}

}

?>