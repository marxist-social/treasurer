<?php

namespace App;

use App\CashCollection;

class SubsCollection extends CashCollection
{
    /**
     * The table associated with the model. Overidden from parent class.
     *
     * @var string
     */
    protected $table = 'subs_collections';
}
