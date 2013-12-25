<?php
// This is just to make sure that the item is used through SMF, and people aren't accessing it directly
// Additionally, this is used elsewhere in SMF (in almost all the files)
if (!defined('SMF'))
   die('Hacking attempt...');


class item_cat extends itemTemplate
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
      $this->name = "Cat";
      // The item's description
      $this->desc = "A kitty cat.";
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
			Return "The cat laid on the sofa and slept."; 
		} 

		if ($result ==2) 
		{ 
			Return "The cat purred. How sweet!"; 
		} 

		if ($result ==3) 
		{ 
			Return "The cat meowed. Meow!"; 
		} 

		if ($result ==4) 
		{ 
			Return "The cat slept on the floor."; 
		} 

		if ($result ==5) 
		{ 
			Return "The cat attacked you! BAD KITTY!"; 
		} 

		if ($result ==6) 
		{ 
			Return "The cat scratched everything. Bad kitty!"; 
		} 

		if ($result ==7) 
		{ 
			Return "Your cat ate a dog's bacon. Hahahaha! :D"; 
		} 

		if ($result ==8) 
		{ 
			Return "Your cat watched television while you made dinner."; 
		} 
	}
	}	
?>