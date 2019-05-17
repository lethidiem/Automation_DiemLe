<?php
namespace Page\Acceptance;

class PageReservation
{
    /**
     * @var string
     * xpath of reservation page
     */
    public static $URL2 = '/reservationform';

    /**
     * @var string
     * Xpath of Table ID feild
     */
    public static $tableID = '//input[@id="tableID"]';

    /**
     * @var string
     * Xpath of Number of Person feild
     */
    public static $numberPerson = '//input[@id="numberofperson"]';

    /**
     * @var string
     * Xpath of Date feild
     */
    public static $date = '//input[@id="date"]';

    /**
     * @var string
     * Xpath of Description feild
     */
    public static $description = '//textarea[@id="description"]';

    /**
     * @var string
     * Xpath of Start time feild
     */
    public static $startTime = '//input[@id="startTime"]';

    /**
     * @var string
     * Xpath of Add/edit button
     */
    public static $btnAdd = '//input[@class="t-beaneditor-submit"]';

    /**
     * @var string
     * Xpath of clear hyperlink
     */
    public static $clear = '//a[text()="clear"]';
}
