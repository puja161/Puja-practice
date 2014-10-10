<?php
/**
 * [PHPFOX_HEADER]
 */

defined('PHPFOX') or exit('NO DICE!');


class Thought_Component_Block_Index extends Phpfox_Component
{
	/**
	 * Class process method wnich is used to execute this component.
	 */
	public function process()
	{
		
		 $aVals = $this->request()->getArray('val'); 
     if(isset($aVals['add']))
                    {
                       
        $cId = Phpfox::getService('thought.process')->add($aVals['title'],$aVals['description']);
		}
		return 'block';

	}
	
	/**
	 * Garbage collector. Is executed after this class has completed
	 * its job and the template has also been displayed.
	 */
	public function clean()
	{
		(($sPlugin = Phpfox_Plugin::get('living.component_controller_index_clean')) ? eval($sPlugin) : false);
	}
}

?>
