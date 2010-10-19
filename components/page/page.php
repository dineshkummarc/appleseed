<?php
/**
 * @version      $Id$
 * @package      Appleseed.Components
 * @subpackage   Wall
 * @copyright    Copyright (C) 2004 - 2010 Michael Chisari. All rights reserved.
 * @link         http://opensource.appleseedproject.org
 * @license      GNU General Public License version 2.0 (See LICENSE.txt)
 */

// Restrict direct access
defined( 'APPLESEED' ) or die( 'Direct Access Denied' );

/** Page Component
 * 
 * Page Component Entry Class
 * 
 * @package     Appleseed.Components
 * @subpackage  Page
 */
class cPage extends cComponent {
	
	/**
	 * Constructor
	 *
	 * @access  public
	 */
	public function __construct ( ) {       
		parent::__construct();
	}
	
	public function AddToProfileTabs ( $pData = null ) {
		
		$return = array ();
		
		$return[] = array ( 'id' => 'page', 'title' => 'Page Tab', 'link' => '/page/' );
		
		return ( $return );
	} 
	
	public function IdentifierExists ( $pData = null ) {
		
		$Identifier = $pData['Identifier'];
		
		$Model = new cModel ( 'PageReferences' );
		
		$Model->Retrieve ( array ( 'Identifier' => $Identifier ) );
		
		if ( $Model->Get ( 'Total' ) > 0 ) {
			return ( true );
		}
		
		return ( false );
	}
	
	
}
