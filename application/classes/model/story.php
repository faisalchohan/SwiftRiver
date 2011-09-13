<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Model for Stories
 *
 * PHP version 5
 * LICENSE: This source file is subject to GPLv3 license 
 * that is available through the world-wide-web at the following URI:
 * http://www.gnu.org/copyleft/gpl.html
 * @author     Ushahidi Team <team@ushahidi.com> 
 * @package    Ushahidi - http://source.swiftly.org
 * @subpackage Models
 * @copyright  Ushahidi - http://www.ushahidi.com
 * @license    http://www.gnu.org/copyleft/gpl.html GNU General Public License v3 (GPLv3) 
 */
class Model_Story extends ORM
{
	/**
	 * A story has many items
	 *
	 * @var array Relationhips
	 */
	protected $_has_many = array(
		'items' => array(
			'model' => 'item',
			'through' => 'item_story'
			)
		);
	
	/**
	 * A story belongs to a project and a user
	 *
	 * @var array Relationhips
	 */
	protected $_belongs_to = array(
		'project' => array(),
		'user' => array()
		);
}