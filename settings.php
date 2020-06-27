<?php
 /**
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * TinyMCE5 adapter for XOOPS
 *
 * @category  XoopsEditor
 * @package   TinyMCE5
 * @author    Gregory Mage
 * @copyright 2020 XOOPS Project (http://xoops.org)
 * @license   GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @link      http://xoops.org
 */
return array(
	'theme' => 'silver',
	'mode' => 'exact',
	'plugins' => 'anchor,autolink,charmap,code,codesample,emoticons,hr,image,imagetools,link,media,preview,searchreplace,table',
	'toolbar' => 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent',
	// This option prevents tinyeditor from deleting empty tags
	'valid_elements' => '*[*]',
	// Use of relative urls?
	'relative_urls' => false
	//'menubar' => 'file edit view'

);