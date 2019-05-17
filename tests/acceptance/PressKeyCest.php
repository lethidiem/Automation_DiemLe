<?php
use Step\Acceptance\ReservationForm as ReservationForm;
use Step\Acceptance\HomeStep as HomeStep;

class PressKeyCest
{
    /**
     * @param HomeStep $I
     * @param $scenario
     * check if user press key Tab
     */
    public function usePressKeyTab(HomeStep $I, $scenario)
    {
        $I->wantToTest('I want check if user press key Tab');
        $I->checkPage();
        $I->Reservation();
        $I=new ReservationForm($scenario);
        $I->usePressTab();
    }
}