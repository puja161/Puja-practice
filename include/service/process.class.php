<?php
class Thought_Service_Process extends Phpfox_Service 
{
public function __construct()
	{	
		$this->_sTable = Phpfox::getT('thought');
	}
	
public function add($iTitle,$iDescription)
	{ 
	$iTitle = Phpfox::getLib('parse.input')->clean($iTitle);
	$iDescription = Phpfox::getLib('parse.input')->clean($iDescription);
	$aSql = array(
			 'title'=>$iTitle, 		    
		'description'=>$iDescription
            ) 
		);
         $iInsert = $this->database()->insert($this->_sTable, $aSql);
		
		return $iInsert;
    } 
}
?>