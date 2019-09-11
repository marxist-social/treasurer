<?php

namespace App;

use App\CashCollection;

class LevyCollection extends CashCollection
{
    /**
     * The table associated with the model. Overidden from parent class.
     *
     * @var string
     */
    protected $table = 'levy_collections';
}
