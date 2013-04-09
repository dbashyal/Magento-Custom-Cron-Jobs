<?php
class Technooze_Tcrons_Model_Crons {
    public function runTestMageCron()
	{
        Mage::log('I was called by CRON!!!');
    }
	
	/*
	 * add more functions as you like and call it from crontab in config.xml
	 */
}