<?php
use Step\Acceptance\ReservationForm as ReservationForm;
use Step\Acceptance\HomeStep as HomeStep;

class ReloadCest
{
    /**
     * @var array
     */
    protected $reservationArray;

    /**
     * ReloadCest constructor.
     */
    public function __construct()
    {
        $this->reservationArray=
            [
                'ID'=>'5',
                'number'=>'4',
                'date'=>'18/05/2019',
                'des'=>'We have meeting',
                'time'=>'22'
            ];
    }

    /**
     * @param HomeStep $I
     * @param $scenario
     * @throws Exception
     * Check if the user click on the reload after performing some action
     */
    public function reload(HomeStep $I, $scenario)
    {
        $I->wantToTest('I want Check if the user click on the reload after performing some action');
        $I->checkPage();
        $I->Reservation();
        $I=new ReservationForm($scenario);
        $I->creatReservation($this->reservationArray);
        $I=new HomeStep($scenario);
        $I->reload();
        $I->sortTableID();
        $I->reload();
        $I->delete();
        $I->reload();
        $I=new ReservationForm($scenario);
        $I->edit($this->reservationArray);
        $I=new HomeStep($scenario);
        $I->reload();
    }

}