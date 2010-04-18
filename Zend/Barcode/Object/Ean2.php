<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Barcode
 * @subpackage Object
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
 */

/**
 * @namespace
 */
namespace Zend\Barcode\Object;

/**
 * Class for generate Ean2 barcode
 *
 * @uses       \Zend\Barcode\Object\Ean5
 * @category   Zend
 * @package    Zend_Barcode
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Ean2 extends Ean5
{

    protected $_parities = array(
        0 => array('A','A'),
        1 => array('A','B'),
        2 => array('B','A'),
        3 => array('B','B')
    );

    /**
     * Default options for Ean2 barcode
     * @return void
     */
    protected function _getDefaultOptions()
    {
        $this->_barcodeLength = 2;
    }

    protected function _getParity($i)
    {
        $modulo = $this->getText() % 4;
        return $this->_parities[$modulo][$i];
    }
}
