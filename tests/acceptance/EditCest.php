<?php
use Step\Acceptance\ReservationForm as ReservationForm;
use Step\Acceptance\HomeStep as HomeStep;

class EditCest
{
    /**
     * @var array
     */
    protected $reservationArray;

    /**
     * EditCest constructor.
     */
    public function __construct()
    {
        $this->reservationArray =
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
     * check if user want to edit Available Reservations table
     */
    public function edit(HomeStep $I, $scenario)
    {
        $I->wantToTest('I want to edit Available Reservations table');
        $I->checkPage();
        $I=new ReservationForm($scenario);
        $I->edit($this->reservationArray);
    }

}