<?php

/**
 * Manage Tags
 *
 * @package    Nails
 * @subpackage module-tag
 * @category   Controller
 * @author     Nails Dev Team
 */

namespace Nails\Tag\Admin\Controller;

use Nails\Admin\Controller\DefaultController;
use Nails\Tag\Constants;

/**
 * Class Tag
 *
 * @package Nails\Tag\Admin\Controller
 */
class Tag extends DefaultController
{
    const CONFIG_MODEL_NAME     = 'Tag';
    const CONFIG_MODEL_PROVIDER = Constants::MODULE_SLUG;
}
