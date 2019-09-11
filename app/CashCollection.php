<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Exception;

class CashCollection extends Model
{
    /**
     * The table associated with the model.
     * The CashCollection functions as a parent class and does not get a table
     *
     * @var string
     */
    protected $table = null;

    /**
     * The function for calculating the total sum of the CashCollection.
     * Child classes should implement this.
     *
     * @return int
     */
    public function getTotal() {
    	throw new Exception("getTotal() has not been implemented on ".get_class($this));
    }

    // The child classes may have '_lines' tables associated with them. They can have models if they want, though they'd be individual
    // It's also fair just to interact with the table via SQL/Eloquent query builders. Will see. If model route, will have to declare
    // 'pivot' (relationships)? not sure
}
