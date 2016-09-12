<?php
    require_once "src/PingPongCounter.php";

    class PingPongCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_countUp()
        {
            $test_countUp = new PingPongCounter;
            $input_number = 15;

            $result = $test_countUp->countUp($input_number);

            $this->assertEquals($count_array = array(1,2,"ping",4,"pong","ping",7,8,"ping","pong",11,
            "ping",13,14,"ping pong"), $result);
        }

        // function test_replacePing()
        // {
        //     $test_replacePing = new PingPongCounter;
        //     $input = 3;
        //
        //     $result = $test_replacePing->replacePing($input);
        //
        //     $this->assertEquals($count_array = array(1,2,"ping"), $result);
        // }
        //
        // function test_replacePong()
        // {
        //     $test_replacePong = new PingPongCounter;
        //     $input = 5;
        //
        //     $result = $test_replacePong->replacePong($input);
        //
        //     $this->assertEquals($count_array = array(1,2,3,4,"pong"), $result);
        // }
        //
        // function test_replacePingPong()
        // {
        //     $test_replacePingPong = new PingPongCounter;
        //     $input = 15;
        //
        //     $result = $test_replacePingPong->replacePingPong($input);
        //
        //     $this->assertEquals($count_array = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,"ping pong"), $result);
        // }

    }

 ?>
