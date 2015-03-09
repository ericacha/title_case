<?php

    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            // $all_lower_case = strtolower($input_title);
            //
            // $input_array_of_words = explode(" ", $all_lower_case);
            $output_titlecased = array();

            $input_array_of_words = explode(" ", strtolower($input_title));

            foreach ($input_array_of_words as $word) {
                array_push($output_titlecased, ucfirst($word));
            }
            return implode(" ", $output_titlecased);
        }
 }

?>
