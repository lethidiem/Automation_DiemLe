<?php
use Step\Acceptance\ReservationForm as ReservationForm;
use Step\Acceptance\HomeStep as HomeStep;

class DeleteCest
{
    /**
     * @param HomeStep $I
     * @throws Exception
     * check if user want to delete
     */
    public function delete(HomeStep $I)
    {
        $I->wantToTest('I want to delete lines Available Reservations table ');
        $I->checkPage();
        $I->delete();
    }

}