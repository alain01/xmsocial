<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * xmsocial module
 *
 * @copyright       XOOPS Project (http://xoops.org)
 * @license         GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @author          Mage Gregory (AKA Mage)
 */
class_exists('\Xmf\Module\Admin') or die('XMF is required.');
use Xmf\Module\Helper;
$helper = Helper::getHelper(basename(dirname(__DIR__)));

// Get handler
$socialHandler = $helper->getHandler('xmsocial_social');
$ratingHandler = $helper->getHandler('xmsocial_rating');
$socialdataHandler = $helper->getHandler('xmsocial_socialdata');

