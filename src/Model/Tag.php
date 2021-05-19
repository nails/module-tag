<?php

/**
 * This model handles interactions with the "nails_tag" table.
 *
 * @package    Nails
 * @subpackage module-tag
 * @category   Model
 * @author     Nails Dev Team
 */

namespace Nails\Tag\Model;

use Nails\Tag\Constants;
use Nails\Common\Model\Base;

/**
 * Class Tag
 *
 * @package Nails\Tag\Model
 */
class Tag extends Base
{
    /**
     * The table this model represents
     *
     * @var string
     */
    const TABLE = NAILS_DB_PREFIX . 'tag';

    /**
     * The name of the resource to use (as passed to \Nails\Factory::resource())
     *
     * @var string
     */
    const RESOURCE_NAME = 'Tag';

    /**
     * The provider of the resource to use (as passed to \Nails\Factory::resource())
     *
     * @var string
     */
    const RESOURCE_PROVIDER = Constants::MODULE_SLUG;

    /**
     * Whether to automatically set slugs or not
     *
     * @var bool
     */
    const AUTO_SET_SLUG = true;
}
