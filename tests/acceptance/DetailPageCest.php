<?php 

class DetailPageCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/u/1234');
        $I->seeResponseCodeIs(200);
        $I->see('1234');
    }
}
