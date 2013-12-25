<?php
// This is just to make sure that the item is used through SMF, and people aren't accessing it directly
// Additionally, this is used elsewhere in SMF (in almost all the files)
if (!defined('SMF'))
   die('Hacking attempt...');


class item_fortune extends itemTemplate
{
   // When this function is called, you should set all the item's
   // variables (see inside this example)
   function getItemDetails() {

      // The author's name
      $this->authorName = 'coolgem923';
      // The author's email address
      $this->authorEmail = 'private';
      
      // --- Values changeable from within the SMFShop admin panel ---
      // The name of the item
      $this->name = "Fortune Cookie";
      // The item's description
      $this->desc = "What's your fortune?";
      // The item's price
      $this->price = 50;

      // --- Unchageable values ---
      // These values can not be changed when adding the item, they are stuck on what you set them to here.
      
      // Whether inputs are required by this item. In this case, we get no inputs.
      $this->require_input = false;
      
      $this->can_use_item = true;
   }
   
   function onUse()
   {
      $result = Rand (1,8); 

		if ($result ==1) 
		{ 
			Return "You may be rich."; 
		} 

		if ($result ==2) 
		{ 
			Return "Evil things are coming your way..."; 
		} 

		if ($result ==3) 
		{ 
			Return "You will find a little suprise from your friend."; 
		} 

		if ($result ==4) 
		{ 
			Return "Your long-lost friend will see you again."; 
		} 

		if ($result ==5) 
		{ 
			Return "Your favorite thing may fall off a cliff and you will never see it again."; 
		} 

		if ($result ==6) 
		{ 
			Return "You will win the lottery."; 
		} 

		if ($result ==7) 
		{ 
			Return "You will turn into a humble king."; 
		} 

		if ($result ==8) 
		{ 
			Return "You will journey to a land far away of peace and quiet."; 
		} 
	}	
}
?>