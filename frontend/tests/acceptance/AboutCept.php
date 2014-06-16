<?php

use frontend\tests\_pages\AboutPage;

$I = new WebGuy($scenario);
$I->wantTo('ensure that about works');
AboutPage::openBy($I);
$I->makeScreenshot('open');
$I-resizeWindow(480,640);
$I->makeScreenshot('open-480x640');
$I-resizeWindow(640,960);
$I->makeScreenshot('open-640x960');
$I-resizeWindow(960,640);
$I->makeScreenshot('open-960x640');
$I-resizeWindow(1024,768);
$I->makeScreenshot('open-1024x768');
$I-resizeWindow(1440,900);
$I->makeScreenshot('open-1440x900');
$I-resizeWindow(1366,768);
$I->makeScreenshot('open-1366x768');

$I->see('About', 'h1');
