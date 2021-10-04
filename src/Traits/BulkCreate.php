<?php

namespace Mosamirzz\BulkQuery\Traits;

use Mosamirzz\BulkQuery\Insert;

trait BulkCreate
{
    public function bulkCreate($insetArray) {
        
        $insert = new Insert($this->getTable());
        $insert->useColumns($this->getColumns($insetArray));
        $insert->prepare($insetArray);
        return $insert->execute();
    }
}
