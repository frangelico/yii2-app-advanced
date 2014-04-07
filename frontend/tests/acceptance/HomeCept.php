<?php

$I = new WebGuy($scenario);
$I->wantTo('ensure that home page works');
$I->amOnPage(Yii::$app->homeUrl);
$I->makeScreenshot('open');

$I->see('My Company');
$I->seeLink('About');
$I->click('About');
$I->see('This is the About page.');
