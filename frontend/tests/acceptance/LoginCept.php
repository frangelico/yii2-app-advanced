<?php

use common\tests\_pages\LoginPage;

$I = new WebGuy($scenario);
$I->wantTo('ensure login page works');

$loginPage = LoginPage::openBy($I);
$I->makeScreenshot('open');


$I->amGoingTo('submit login form with no data');
$loginPage->login('', '');
$I->wait(1);

$I->expectTo('see validations errors');
$I->see('Username cannot be blank.', '.help-block');
$I->see('Password cannot be blank.', '.help-block');

$I->amGoingTo('try to login with wrong credentials');
$I->expectTo('see validations errors');
$loginPage->login('admin', 'wrong');
$I->wait(1);

$I->expectTo('see validations errors');
$I->see('Incorrect username or password.', '.help-block');

$I->amGoingTo('try to login with correct credentials');
$loginPage->login('erau', 'password_0');
$I->wait(1);

$I->expectTo('see that user is logged');
$I->seeLink('Logout (erau)');
$I->dontSeeLink('Login');
$I->dontSeeLink('Signup');
/** Uncomment if using WebDriver
 * $I->click('Logout (erau)');
 * $I->dontSeeLink('Logout (erau)');
 * $I->seeLink('Login');
 */
