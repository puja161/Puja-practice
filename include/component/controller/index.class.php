<?php
class Thought_Component_Controller_Index extends Phpfox_Component
{
   public function process()
   {
     $aUsers = Phpfox::getService('thought')->getData(5); 
    $this->template()->assign('aUsers', $aUsers); 
   }
   
}
?>