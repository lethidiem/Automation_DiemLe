<?php
use Step\Acceptance\ReservationForm as ReservationForm;
use Step\Acceptance\HomeStep as HomeStep;

class SortCest
{
    /**
     * @var array
     */
    protected $reservationArray;

    /**
     * SortCest constructor.
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
     * @throws Exception
     * check if user want to sort by ID
     */
    public function sortID(HomeStep $I)
    {
        $I->wantToTest('I want to check if user want to sort by ID');
        $I->checkPage();
        $I->sortID();
    }

    /**
     * @param HomeStep $I
     * check if user want to sort by Type
     */
    public function sortType(HomeStep $I)
    {
        $I->wantToTest('I want to check if user want to sort by Type');
        $I->sortType();
    }

    /**
     * @param HomeStep $I
     * @param $scenario
     * check if user want to sort by TableID
     */
    public function sortTableID(HomeStep $I, $scenario)
    {
        $I->wantToTest('I want to check if user want to sort by TableID');
        $I->Reservation();
        $I=new ReservationForm($scenario);
        $I->creatReservation($this->reservationArray);
        $I=new HomeStep($scenario);
        $I->sortTableID();
    }

    /**
     * @param HomeStep $I
     * @param $scenario
     * check if user want to sort by Number of Person
     */
    public function sortNumberPerson(HomeStep $I, $scenario)
    {
        $I->wantToTest('I want to check if user want to sort by Number of Person');
        $I->Reservation();
        $I=new ReservationForm($scenario);
        $I->creatReservation($this->reservationArray);
        $I=new HomeStep($scenario);
        $I->sortNumberPerson();
    }

    /**
     * @param HomeStep $I
     * @param $scenario
     * check if user want to sort by Date
     */
    public function sortDate(HomeStep $I, $scenario)
    {
        $I->wantToTest('I want to check if user want to sort by Date');
        $I->Reservation();
        $I=new ReservationForm($scenario);
        $I->creatReservation($this->reservationArray);
        $I=new HomeStep($scenario);
        $I->sortDate();
    }

    /**
     * @param HomeStep $I
     * @param $scenario
     * check if user want to sort by Description
     */
    public function sortDes(HomeStep $I, $scenario)
    {
        $I->wantToTest('I want to check if user want to sort by Description');
        $I->Reservation();
        $I=new ReservationForm($scenario);
        $I->creatReservation($this->reservationArray);
        $I=new HomeStep($scenario);
        $I->sortDescription();
    }

    /**
     * @param HomeStep $I
     * @param $scenario
     * check if user want to sort by Start time
     */
    public function sortTime(HomeStep $I, $scenario)
    {
        $I->wantToTest('I want to check if user want to sort by Start time');
        $I->Reservation();
        $I=new ReservationForm($scenario);
        $I->creatReservation($this->reservationArray);
        $I=new HomeStep($scenario);
        $I->sortStartTime();
    }

}