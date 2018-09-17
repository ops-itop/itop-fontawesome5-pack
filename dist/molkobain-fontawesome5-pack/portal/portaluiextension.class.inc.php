<?php
/**
 * Copyright (c) 2015 - 2018 Molkobain.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace Molkobain\iTop\Portal\FontAwesome\Extension;

use utils;
use AbstractPortalUIExtension;
use Silex\Application;

/**
 * Class PortalUIExtension
 *
 * @package Molkobain\iTop\Portal\FontAwesome\Extension
 */
class PortalUIExtension extends AbstractPortalUIExtension
{
	/**
	 * @inheritdoc
	 */
    public function GetCSSFiles(Application $oApp)
    {
    	$aReturn = array();

    	$aReturn[] = utils::GetAbsoluteUrlModulesRoot() . 'molkobain-fontawesome5-pack/fontawesome-free-5.0.13/css/fontawesome-all.min.css?v=' . utils::GetCompiledModuleVersion('molkobain-fontawesome5-pack');

        return $aReturn;
    }
}
