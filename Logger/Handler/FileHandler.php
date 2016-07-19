<?php
/**
 * TurnTo_SocialCommerce
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @copyright  Copyright (c) 2016 TurnTo Networks, Inc.
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

namespace TurnTo\SocialCommerce\Logger\Handler;

/**
 * Class FileHandler
 * @package TurnTo\SocialCommerce\Logger\Handler
 */
class FileHandler extends \Magento\Framework\Logger\Handler\System
{
    /**
     * Overrides the default log file path
     * @var string
     */
    protected $fileName = '/var/log/turnto.log';
}
