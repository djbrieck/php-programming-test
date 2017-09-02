<?php

/**
 * Instructions:
 *
 * Create a class in the Vault namespace and rewrite each test to make the assertions pass.
 * NOTE: You can use any third party packages you deem necessary to complete the tests.
 */

// Path is /Users/danieljbrieckjr/Development_Programing/php-programming-test
// require_once(dirname(dirname(__FILE__)) . "/src/Interview.php");

use Vault\Interview;

class InterviewTests extends PHPUnit\Framework\TestCase {

    /**
     * Create a class that turns the below string into an array and reverse the words.
     */
    public function testReverseArray()
    {
        $data = "I want this job.";

        $interview = new Interview();

        $data = $interview->reverseArray($data);

        $this->assertEquals(['job', 'this', 'want', 'I'], $data);
    }

    /**
     * Create a class that sorts the below array
     */
    public function testOrderArray()
    {
        $data = ["200", "450", "2.5", "1", "505.5", "2"];


        $interview = new Interview();

        $interview->orderArray($data);

        $this->assertTrue(1 === $data[0]);
        $this->assertTrue(2 === $data[1]);
        $this->assertTrue(2.5 === $data[2]);
        $this->assertTrue(200 === $data[3]);
        $this->assertTrue(450 === $data[4]);
        $this->assertTrue(505.5 === $data[5]);
    }

    /**
     * Create a class to determine array differences
     */
    public function testGetDiffArray()
    {
        $data1 = [1, 2, 3, 4, 5, 6, 7];
        $data2 = [2, 4, 5, 7, 8, 9, 10];

        $data =array_values(array_diff($data2,$data1));

        $this->assertEquals([8, 9, 10], $data);

        //No class needed using builtin functions, array_values to get zero index.
        $data =array_values(array_diff($data1,$data2));

        $this->assertEquals([1, 3, 6], $data);
    }

    /**
     * Create a class that will get the distance between two geo points
     */
    public function testGetDistance()
    {
        $place1 = ['lat' => '41.9641684', 'lon' => '-87.6859726'];
        $place2 = ['lat' => '42.1820210', 'lon' => '-88.3429465'];

        // Code here

        $this->assertEquals(36.91, $distance);
    }

    /**
     * Create a class that will generate a human readable time difference
     */
    public function testGetHumanTimeDiff()
    {
        $time1 = "2016-06-05T12:00:00";
        $time2 = "2016-06-05T15:00:00";

        // Code here

        $this->assertEquals("3 hours ago", $timeDiff);
    }

}
