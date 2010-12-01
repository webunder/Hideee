<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
* Hideee, Hide some stuff!
*
* @package			Hideee
* @version			1.0.0
* @author			Cem Meric <http://webunder.com.au> - Managing Director, Webunder
* @copyright 		Copyright (c) 2002-2010 Webunder <http://http://webunder.com.au>
* @license 			Attribution-ShareAlike 3.0 Unported <http://creativecommons.org/licenses/by-sa/3.0>
* @subpackage		Accessories
* @category			Accessories
* @purpose			Hide some stuff!
*/


class Hideee_acc
{
	var $name			= 'Hideee';
	var $id	 			= 'hideee';
	var $version		= '1.0.0';
	var $description	= 'Hide some stuff!';
	var $sections		= array();


	/**
	* Set Sections
	*
	* Hiding Seach div in Control Panel
	* 
	*/
		 
	function set_sections()
	{
		$EE =& get_instance();
		
		$this->EE =& get_instance();
		
		$this->EE->load->library('javascript');

		/**
		* Hide some stuff
		*
		*/
			
		$str = <<<END
		 $("#search").remove();
END;

		$this->EE->javascript->output($str);
	}
}
/* Location: ./system/expressionengine/third_party/hideee/acc.hideee.php */ 