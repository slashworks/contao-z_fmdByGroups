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

$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] = str_replace
(
    'inactiveModules',
    'inactiveModules,moduleLabels',
    $GLOBALS['TL_DCA']['tl_settings']['palettes']['default']
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['moduleLabels'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['moduleLabels'],
    'exclude'                 => true,
    'inputType'               => 'listWizard'
);

