<?php 
use Step\Acceptance\ReservationForm as ReservationForm;
use Step\Acceptance\HomeStep as HomeStep;
class CreatFormCest
{
    /**
     * @var array
     */
    protected $reservationArray;

    /**
     * CreatFormCest constructor.
     */
    public function __construct()
    {
        $this->reservationArray =
            [
                'ID'=> '4',
                'number'=>'2',
                'date'=>'18/05/2019',
                'des'=>'we have meeting',
                'time'=>'20'
            ];
    }

    /**
     * @param ReservationForm $I
     * Check if the user enters the correct data
     */
    public function creatFormSuccesfull(HomeStep $I, $scenario)
    {
        $I->wantToTest('I want to do create new table successfully');
        $I->checkPage();
        $I->Reservation();
        $I=new ReservationForm($scenario);
        $I->creatReservation($this->reservationArray);
        $I->comment('Create Successfully');

    }

    /**
     * @param ReservationForm $I
     * Check if the user enters the incorrect ID
     */
    public function creatFormNoID(HomeStep $I, $scenario)
    {
        $I->wantToTest('I want to do creat reservation with empty ID ');
        $I->Reservation();
        $I=new ReservationForm($scenario);
        $this->reservationArray['id']="";
        $I->creatReservation($this->reservationArray);

    }

    /**
     * @param ReservationForm $I
     * Check if the user enters the incorrect ID
     */
    public function creatFormInvalidID(HomeStep $I, $scenario)
    {
        $I->wantToTest('I want to do creat reservation with incorrect ID ');
        $I->Reservation();
        $I=new ReservationForm($scenario);
        $this->reservationArray['id']="10";
        $I->creatReservation($this->reservationArray);
    }

    /**
     * @param ReservationForm $I
     * Check if the user enters the incorrect number
     */
    public function creatFormNoNumber(HomeStep $I, $scenario)
    {
        $I->wantToTest('I want to do creat reservation with incorrect number');
        $I->Reservation();
        $I=new ReservationForm($scenario);
        $this->reservationArray["ID"]="4";
        $this->reservationArray['number']="";
        $I->creatReservation($this->reservationArray);
    }

    /**
     * @param ReservationForm $I
     * Check if the user enters the incorrect date
     */
    public function creatFormNoDate(HomeStep $I, $scenario)
    {
        $I->wantToTest('I want to do creat reservation with incorrect date');
        $I->Reservation();
        $I=new ReservationForm($scenario);
        $this->reservationArray["number"]="3";
        $this->reservationArray['date']="";
        $I->creatReservation($this->reservationArray);
    }

    /**
     * @param ReservationForm $I
     * Check if the user enters the empty Description
     */
    public function creatFormNoDes(HomeStep $I, $scenario)
    {
        $I->wantToTest('I want to do creat reservation with empty description');
        $I->Reservation();
        $I=new ReservationForm($scenario);
        $this->reservationArray['date']="18/05/2019";
        $this->reservationArray['des']="";
        $I->creatReservation($this->reservationArray);
    }

    /**
     * @param ReservationForm $I
     * Check if the user enters the empty Time
     */
    public function creatFormNoTime(HomeStep $I, $scenario)
    {
        $I->wantToTest('I want to do creat reservation with empty time');
        $I->Reservation();
        $I=new ReservationForm($scenario);
        $this->reservationArray['des']="We have a meeting";
        $this->reservationArray['time']="";
        $I->creatReservation($this->reservationArray);
    }

    /**
     * @param ReservationForm $I
     * Check if the user enters the invalid time
     */
    public function creatFormInvalidTime(HomeStep $I, $scenario)
    {
        $I->wantToTest('I want to do creat reservation with invalid time');
        $I->Reservation();
        $I=new ReservationForm($scenario);
        $this->reservationArray['time']="01";
        $I->creatReservation($this->reservationArray);

        $I=new HomeStep($scenario);
        $I->Reservation();
        $I= new ReservationForm($scenario);
        $this->reservationArray['time']="25";
        $I->creatReservation($this->reservationArray);
    }
    /**
     * @param HomeStep $I
     * @param $scenario
     * if user click on clear after enter data
     */
    public function clearData(HomeStep $I, $scenario)
    {
        $I->Reservation();
        $I=new ReservationForm($scenario);
        $I->clearData($this->reservationArray);
    }
}
