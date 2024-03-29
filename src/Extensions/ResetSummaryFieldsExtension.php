<?php

namespace Fromholdio\SummaryReset\Extensions;

use SilverStripe\Core\Config\Config;
use SilverStripe\ORM\DataExtension;

class ResetSummaryFieldsExtension extends DataExtension
{
    public function updateSummaryFields(&$fields) {
        $fields = Config::inst()->get(
            get_class($this->getOwner()),
            'summary_fields',
            Config::UNINHERITED
        );
    }
}
