<?php

namespace App;

use App\CashCollection;

class CampaignCollection extends CashCollection
{
    /**
     * The table associated with the model. Overidden from parent class.
     *
     * @var string
     */
    protected $table = 'campaign_collections';
}
