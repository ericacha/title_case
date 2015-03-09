<?php
     class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {

            $output_titlecased = array();

            $input_array_of_words = explode(" ", strtolower($input_title));

            foreach ($input_array_of_words as $word) {
                array_push($output_titlecased, ucfirst($word));
            }
            return implode(" ", $output_titlecased);
        }
    };

?>
<!DOCTYPE html>
        <html>
        <head>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>

        </head>
        <body>
            <div class='container'>
                <h1>Input a whole sentence here</h1>

                <form  action= $TitleCaseGenerator->makeTitleCase() method= "get">
                    <div class='form-group'>
                      <label for='words'>Enter a long sentence:</label>
                      <input id='words' name='words' class='form-control' type='text'>
                      <?php $input= 'words'; ?>
                    </div>

                <button type='submit' class='btn-success'>Let's see!</button>
                </form>

                <?php $wordss = $_GET['words'];
                //$final = $TitleCaseGenerator->makeTitleCase($wordss);
                echo $final;
                ?>

            </div>
        </body>
        </html>
