<?php

use frontend\tests\_pages\AboutPage;

$I = new WebGuy($scenario);
$I->wantTo('ensure that about works');
AboutPage::openBy($I);
$I->makeScreenshot('open');

$I->see('About', 'h1');
