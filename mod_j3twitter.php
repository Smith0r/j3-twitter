<?php
//============================================================================
// @ mod_j3twitter// @license		GNU/GPL
// # Chris Smith - 7/11/2013
// # Twitter Module for Joomla 3.2.x
//============================================================================
// No Direct Access
defined('_JEXEC') or die('Restricted access');
// Require the helper
require_once(dirname(__FILE__).'/helper.php');
$helper = new modJ3TwitterHelper;
// Require the Twitter API Exchange
require_once(dirname(__FILE__).'/libs/TwitterAPIExchange.php');// Include the J3Twitter CSS$doc = JFactory::getDocument();$doc->addStyleSheet('modules/mod_j3twitter/assets/mod_j3twitter.css');$tweet_num = $params->get('tweet_num');$username = $params->get('username');$oauth = $params->get('token');$oauth_secret = $params->get('token_secret');$key = $params->get('key');$key_secret = $params->get('key_secret');if ($oauth != ""){	$tweets = $helper->fetchTweets($tweet_num, $username, $oauth, $oauth_secret, $key, $key_secret);}else{	$tweets = array();	$tweets[] = array("text" => "Please enter your OAuth Information.");}
// Fetch the layout
require( JModuleHelper::getLayoutPath('mod_j3twitter'));
?>