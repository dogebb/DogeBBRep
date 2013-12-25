<?php
// This is just to make sure that the item is used through SMF, and people aren't accessing it directly
// Additionally, this is used elsewhere in SMF (in almost all the files)
if (!defined('SMF'))
   die('Hacking attempt...');


class item_dog extends itemTemplate
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
      $this->name = "Dog";
      // The item's description
      $this->desc = "A puppy dog!";
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
			Return "The dog licked you! How sweet!"; 
		} 

		if ($result ==2) 
		{ 
			Return "The dog begged for food. Gotta get the food! :D"; 
		} 

		if ($result ==3) 
		{ 
			Return "You took the dog for a walk, when it met another dog and 'talked' to eachother."; 
		} 

		if ($result ==4) 
		{ 
			Return "Your dog found meat on the ground and ate it. Disgusting!"; 
		} 

		if ($result ==5) 
		{ 
			Return "Your dog bit you. Bad dog!"; 
		} 

		if ($result ==6) 
		{ 
			Return "Your dog has been entered into a dog show, and won 1st place! Lucky puppy!"; 
		} 

		if ($result ==7) 
		{ 
			Return "Your dog ate all your peanut butter. That dog sure loves peanut butter! :D"; 
		} 

		if ($result ==8) 
		{ 
			Return "Your dog watched television while you made dinner."; 
		} 
	}	
}
?>