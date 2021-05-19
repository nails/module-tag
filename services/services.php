<?php

use Nails\Tag\Model;
use Nails\Tag\Resource;

return [
    /**
     * Classes/libraries which don't necessarily relate to a database table.
     * Once instantiated, a request for a service will always return the same instance.
     */
    'services'  => [],

    /**
     * Models generally represent database tables.
     * Once instantiated, a request for a model will always return the same instance.
     */
    'models'    => [
        'Tag' => function (): Model\Tag {
            if (class_exists('\App\Tag\Model\Tag')) {
                return new \App\Tag\Model\Tag();
            } else {
                return new Model\Tag();
            }
        },
    ],

    /**
     * A class for which a new instance is created each time it is requested.
     */
    'factories' => [],

    /**
     * A class which represents an object from the database
     */
    'resources' => [
        'Tag' => function ($mObj): Resource\Tag {
            if (class_exists('\App\Tag\Resource\Tag')) {
                return new \App\Tag\Resource\Tag($mObj);
            } else {
                return new Resource\Tag($mObj);
            }
        },
    ],
];
