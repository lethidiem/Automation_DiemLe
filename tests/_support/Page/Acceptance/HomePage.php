<?php
namespace Page\Acceptance;

class HomePage
{
    /**
     * @var string
     * xpath of homepage
     */
    public static $URL = 'https://staging2.formos.com/QATest/';

    /**
     * @var string
     * Xpath of New Reservation hyperlink
     */
    public static $new = '//a[text()="New Reservation"]';

    /**
     * @var string
     * Xpath of Sort ID on All Available Table
     */
    public static $sortID ='//img[@id="id:sort"]';

    /**
     * @var string
     * Xpath of Sort Type on All Available Table
     */
    public static $sortType = '//img[@id="type:sort"]';

    /**
     * @var string
     * Xpath of Sort ID on All Available Reservations table
     */
    public static $sortTableID = '//img[@id="tableID:sort"]';

    /**
     * @var string
     * Xpath of Sort NumberofPerson on All Available Reservations table
     */
    public static $sortNumberPerson = '//img[@id="numberofperson:sort"]';

    /**
     * @var string
     * Xpath of Sort date on All Available Reservations table
     */
    public static $sortDate = '//img[@id="date:sort"]';

    /**
     * @var string
     * Xpath of Sort Description on All Available Reservations table
     */
    public static $sortDescription = '//a[text()="Description"]';

    /**
     * @var string
     * Xpath of Sort Start Time on All Available Reservations table
     */
    public static $sortTime = '//img[@id="startTime:sort"]';

    /**
     * @var string
     * Xpath of Reload Data hyperlink
     */
    public static $reloadData = '//a[text()="Reload Data"]';

    /**
     * @var string
     * Xpath of Delete hyperlink
     */
    public static $delete1 = '(//a[text()="Delete"])[2]';
    /**
     * @var string
     * Xpath of Edit hyperlink
     */
    public static $edit = '(//a[text()="Edit"])[2]';

}
