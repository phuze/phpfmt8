<?php

class Test
{
    public function saveTest()
    {
        $campaign = $api->getCampaign($campaign_id);
        $db_test = new Test();
        $db_test->name = $campaign->{CampaignFields::NAME};
        $db_test->status = $campaign->{CampaignFields::EFFECTIVE_STATUS};
        $db_test->budget = $campaign->{CampaignFields::LIFETIME_BUDGET};
        $db_test->save();
    }
}