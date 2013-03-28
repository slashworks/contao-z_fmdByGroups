<?php

/**
 * z_fmdByGroups module - Contao Open Source CMS
 *
 * Copyright (C) 2013 Joe Ray Gregory slashworks KG
 *
 * @package z_fmdByGroups
 * @link    https://slash-works.de
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Table tl_module
 */

/**
 * Extend each Module widt the module Label field
 */

foreach($GLOBALS['TL_DCA']['tl_module']['palettes'] as $key => $pallet)
{
    if(!is_array($pallet))
    {
        $GLOBALS['TL_DCA']['tl_module']['palettes'][$key] = str_replace
        (
            'name',
            'name,moduleLabel',
            $GLOBALS['TL_DCA']['tl_module']['palettes'][$key]
        );
    }
}

/**
 * Set the width of the title to half width
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['name']['eval']['tl_class'] = 'w50';

$GLOBALS['TL_DCA']['tl_module']['fields']['moduleLabel'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['moduleLabel'],
    'exclude'                 => true,
    'sorting'                 => true,
    'inputType'               => 'select',
    'options_callback'        => array('tl_moduleGroups', 'getModuleLabels'),
    'eval'                    => array('chosen' => true, 'tl_class' => 'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

/**
 * Class tl_moduleGroups
 */
class tl_moduleGroups extends Backend
{
    /**
     * Get custom groups
     * @return mixed
     */
    public function getModuleLabels()
    {
        return deserialize($GLOBALS['TL_CONFIG']['moduleLabels']);
    }
}