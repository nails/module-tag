<?php

/**
 * Manage Tags
 *
 * @package    Nails
 * @subpackage module-tag
 * @category   Controller
 * @author     Nails Dev Team
 */

namespace Nails\Admin\Tag;

use Nails\Admin\Controller\DefaultController;
use Nails\Tag\Constants;

/**
 * Class Tag
 *
 * @package Nails\Admin\Tag
 */
class Tag extends DefaultController
{
    const CONFIG_MODEL_NAME     = 'Tag';
    const CONFIG_MODEL_PROVIDER = Constants::MODULE_SLUG;
}
