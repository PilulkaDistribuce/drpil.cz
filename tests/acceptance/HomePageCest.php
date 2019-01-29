<?php 

class HomePageCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryPageHasCorrectTitle(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Pilulka zkracovač');
    }
}
