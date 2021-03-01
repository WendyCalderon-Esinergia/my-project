<?php

namespace Drupal\co_core;

/**
 * Defines a Unit class.
 */
class Unit
{
    private $length = 0;

    /**
     * @param int $length
     */
    public function setLength(int $length)
    {
        $this->length = $length;
    }

    /**
     * @return int
     *   The length of the unit.
     */
    public function getLength()
    {
        return $this->length;
    }
}

//https://salferrarello.com/setup-must-be-compatible-with-phpunitframeworktestcasesetup/
//https://www.lullabot.com/articles/an-introduction-to-unit-testing-in-drupal
//https://www.axelerant.com/resources/team-blog/drupal-8-writing-your-first-unit-test-with-phpunit


//Calidad codigo
//drupalcbf modules/custom/co_core/tests/src/Unit/UnitTest.php