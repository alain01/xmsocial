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
use Xmf\Module\Admin; 
defined('XOOPS_ROOT_PATH') || die('XOOPS root path not defined');

// get path to icons
$pathIcon32 = Admin::menuIconPath('');

$adminmenu = [];
// Index
$adminmenu[] = [
    'title' => _MI_XMSOCIAL_MENU_HOME,
    'link'  => 'admin/index.php',
    'icon'  => $pathIcon32 . 'home.png'
];
// Social
$adminmenu[] = [
    'title' => _MI_XMSOCIAL_MENU_SOCIAL,
    'link'  => 'admin/social.php' ,
    'icon'  => $pathIcon32 . 'groupmod.png'
];
// Rating
$adminmenu[] = [
    'title' => _MI_XMSOCIAL_MENU_RATING ,
    'link'  => 'admin/rating.php' ,
    'icon'  => $pathIcon32 . 'extention.png'
];
// Permission
$adminmenu[] = [
    'title' => _MI_XMSOCIAL_MENU_PERMISSION,
    'link'  => 'admin/permission.php',
    'icon'  => $pathIcon32 . 'permissions.png'
];
// About
$adminmenu[] = [
    'title' => _MI_XMSOCIAL_MENU_ABOUT ,
    'link'  => 'admin/about.php' ,
    'icon'  => $pathIcon32 . 'about.png'
];