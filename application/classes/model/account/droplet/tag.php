<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Model for Account_Droplet_Tags
 *
 * PHP version 5
 * LICENSE: This source file is subject to GPLv3 license 
 * that is available through the world-wide-web at the following URI:
 * http://www.gnu.org/copyleft/gpl.html
 * @author     Ushahidi Team <team@ushahidi.com> 
 * @package	   SwiftRiver - http://github.com/ushahidi/Swiftriver_v2
 * @subpackage Models
 * @copyright  Ushahidi - http://www.ushahidi.com
 * @license    http://www.gnu.org/copyleft/gpl.html GNU General Public License v3 (GPLv3) 
 */
class Model_Account_Droplet_Tag extends ORM {
    
	/**
	 * A tag belongs to a droplet
	 * @var array Relationhips
	 */
	protected $_belongs_to = array(
		'droplet' => array(),
		'account' => array(),
		'tag' => array()
	);
		    
	/**
	 * Checks if a given tag already exists. 
	 *
	 * @param string $tag_name The tag string
	 * @param Model_Droplet $droplet_id Droplet id this tag belongs to
	 * @param Model_Account $account_id Account id this tag belongs to 
	 * @return Model_Account_Droplet_Tag
	 */
	public static function get_tag($tag_name, $droplet_id,  $account_id)
	{    	
		$orm_tag = Model_Tag::get_tag_by_name(array('tag_name' => $tag_name, 
		                                            'tag_type' => 'user_generated'), 
		                                        TRUE);
		
		$account_tag = ORM::factory('account_droplet_tag')
		                ->where('droplet_id', '=', $droplet_id)
		                ->where('tag_id', '=', $orm_tag->id)
		                ->where('account_id', '=', $account_id)
		                ->find();
		                
		
		if ( ! $account_tag->loaded())
		{
			$account_tag->tag_id = $orm_tag->id;
			$account_tag->droplet_id = $droplet_id;
			$account_tag->account_id = $account_id;
			$account_tag->save();
		}
		
		return $account_tag;
	}
}
?>