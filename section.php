<?php
/**
 * Purpose: Registers the demo module with Morweb and exposes metadata for the section.
 * Usage: Automatically loaded by the framework to define the module name, description,
 * navigation, and privilege placeholders for the demo experience.
 */
/**//**----= mwDemoInit =--------------------------------------------------------------------------------------------------**//**
*
*	Demo module for designers.
*	Contains UI prototypes and design experiments for admin interface.
*
*	@package	morweb
*	@subpackage	demo
*	@category	module
*
**/// **-----------------------------------------------------------------------------= by Mr.V!T @ Morad Media Inc. =----**// **
class mwDemoInit extends mwSectionInit {

	public	$Name		= 'demo';
	public	$Title		= 'Demo';
	public 	$Description	= 'Design prototypes and UI experiments';
	public	$namespace	= 'demo';

	public 	$addNavigaton	= FALSE;
	public	$Navigation	= [
		// Navigation items if needed
	]; //$Navigation

	public	$Privileges	= [
		// Module privileges if needed
	]; //$Privileges

} //CLASS mwDemoInit

?>
