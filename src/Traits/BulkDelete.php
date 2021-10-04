<?php

namespace Mosamirzz\BulkQuery\Traits;

use Mosamirzz\BulkQuery\Delete;

trait BulkDelete
{
    public function bulkDelete($ids)
    {
        $delete = new Delete($this->getTable());
        $delete->prepare($ids);
        return $delete->execute();
    }
}
