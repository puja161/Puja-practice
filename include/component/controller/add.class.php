<?php
class Thought_Component_Controller_Add extends Phpfox_Component
{
   public function process()
   {
     
		
   }     
  public function clean()
	{
		(($sPlugin = Phpfox_Plugin::get('Thought.component_controller_add_clean')) ? eval($sPlugin) : false);
	}
}

?>