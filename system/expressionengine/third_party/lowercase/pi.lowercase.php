<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

$plugin_info = array(
	'pi_name' => 'lowercase',
	'pi_version' => '1.0',
	'pi_author' => 'Ferdi Tarakci',
	'pi_author_url' => 'https://www.ferditarakci.com/',
	'pi_description' => '',
	'pi_usage' => lowercase::usage()
);

/**
 * lowercase Class
 *
 * @package			ExpressionEngine
 * @category		Plugin
 * @author			Ferdi Tarakci
 * @copyright		Copyright (c) 2019, Ferdi Tarakci
 * @link			https://www.ferditarakci.com/
 */

class lowercase
{

	var $return_data = "";

	/**
	 * mb_strtolower
	 *
	 * This function runs mb_strtolower() on a string of text
	 *
	 * @access	public
	 * @return	string
	 */

	function __construct()
	{
		$this->EE =& get_instance();

		$str = $this->EE->TMPL->parse_globals($this->EE->TMPL->tagdata);

		$this->return_data = mb_strtolower($str, 'UTF-8');
	}

	/**
	 * Usage
	 *
	 * This function describes how the plugin is used.
	 *
	 * @access	public
	 * @return	string
	 */

	// Make sure and use output buffering

	public static function usage()
	{

		ob_start();
?>

		The tag pair is simply:
		{exp:lowercase}İSTANBUL{/exp:lowercase}

		Example usage:

		İSTANBUL

		becomes:

		istanbul
<?php
		$buffer = ob_get_contents();

		ob_end_clean();

		return $buffer;
	}
}

/* End of file pi.lowercase.php */ 
/* Location: ./system/expressionengine/third_party/lowercase/pi.lowercase.php */
