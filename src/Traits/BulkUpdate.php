<?php

namespace Mosamirzz\BulkQuery\Traits;

use Mosamirzz\BulkQuery\Update;

trait BulkUpdate
{
    public function bulkUpdate($updateArray)
    {
        $columns = $this->getColumns($updateArray);
        $update = new Update($this->getTable());
        if( !is_null($this->bulkKey)){
            $update->useKey($this->bulkKey);
        }
        $update->useModel($this);
        $update->useColumns($columns);
        $update->prepare($updateArray);
        return $update->execute();
    }
}
