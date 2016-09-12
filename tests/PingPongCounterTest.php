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
    }

 ?>
