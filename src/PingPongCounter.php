<?php
    class PingPongCounter
    {
        function countUp($input_number)
        {
            $input_number = $_GET['number'];
            $count_array = range(1, $input_number);

            foreach ($count_array as &$count) {
                if (($count % 15) == 0) {
                    $count = "ping pong";
                }

                else if (($count % 5) == 0) {
                    $count = "pong";
                }

                else if (($count % 3) == 0) {
                    $count = "ping";
                }
            }

            return implode(", ",$count_array);
        }

    }
?>
