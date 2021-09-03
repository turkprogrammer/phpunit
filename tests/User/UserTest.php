<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserTest
 *
 * @author kerbelai
 */
class UserTest extends \PHPUnit\Framework\TestCase {

    private $user;

    /*
     * object init
     */

    protected function setUp(): void {
        $this->user = new App\Models\User;
        $this->user->setAge(33);
    }

    /*
     * обнуляем обьекты для очистки памяти
     */

    protected function tearDown(): void {
        
    }

    /**
     * @dataProvider userProvider
     */
    public function testAge($age, $age2) {
        $this->assertEquals($age, $age2); //$this->user->getAge()
    }

    public function userProvider() {
        return [
            'bir' => [1,2],
            'iki' => [2,2],
            'oc' => [33,33],
        ];
    }

}
