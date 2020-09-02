<?php
/**
*
* Terms of use extension for the phpBB Forum Software package.
*
* @copyright (c) 2020 Crizzo <https://www.phpbBB.de>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace phpbbde\tou\acp;

class tou_info
{
	function module()
	{
		return array(
			'filename'	=> '\phpbbde\tou\acp\tou_module',
			'title'		=> 'ACP_TOU_TITLE',
			'modes'		=> array(
				'settings'	=> array(
						'title' => 'ACP_TOU_SETTINGS',
						'cat' => array('ACP_TOU_TITLE')
					),
			),
		);
	}
}
