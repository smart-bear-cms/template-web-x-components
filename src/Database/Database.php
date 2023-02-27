<?php

namespace nguyenanhung\Platforms\WebBuilderSDK\ComponentsXName\Components\Database;

use nguyenanhung\Platforms\WebBuilderSDK\Initialize\BaseComponents\Database\Database as InitializeComponentsDatabase;

/**
 * Class Database
 *
 * @package   nguyenanhung\Platforms\WebBuilderSDK\ComponentsXName\Components\Database
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class Database extends InitializeComponentsDatabase
{
    /**
     * Database constructor.
     *
     * @param array $options
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     */
    public function __construct(array $options = array())
    {
        parent::__construct($options);
        $this->logger->setLoggerSubPath(__CLASS__);
    }
}
