<?php

/**
 * This reosurce represents a single tag
 *
 * @package    Nails
 * @subpackage module-tag
 * @category   Resource
 * @author     Nails Dev Team
 */

namespace Nails\Tag\Resource;

use Nails\Common\Resource\Entity;

/**
 * Class Tag
 *
 * @package Nails\Tag\Resource
 */
class Tag extends Entity
{
    /** @var string */
    public $slug;

    /** @var string */
    public $label;
}
