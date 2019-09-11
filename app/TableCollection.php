<?php

namespace App;

use App\CashCollection;

class TableCollection extends CashCollection
{
    /**
     * The table associated with the model. Overidden from parent class.
     *
     * @var string
     */
    protected $table = 'table_collections';
}
