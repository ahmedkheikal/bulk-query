<?php

namespace Mosamirzz\BulkQuery;

use Mosamirzz\BulkQuery\Traits\BulkCreate;
use Mosamirzz\BulkQuery\Traits\BulkDelete;
use Mosamirzz\BulkQuery\Traits\BulkUpdate;

trait BulkActions
{
    use BulkUpdate, BulkCreate, BulkDelete;

    protected $bulkKey = null;

    public function bulkUseKey(string $key)
    {
        $this->bulkKey = $key;
        return $this;
    }

    /**
     * return array of used keys
     * 
     * @param   array   $updatearray    data to do action on  
     * @return  array   
     */
    private function getColumns($updateArray)
    {
        return array_map(function ($item) {
            return array_keys($item);
        }, $updateArray);
    }
}
