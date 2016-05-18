<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


    <meta charset="utf-8">
	<title>KCSE RESULTS</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Results</h1>

	<div id="body" class="container">
		<div class="row">
            <div class="col-md-6">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>
                            Student name
                        </th>
                        <th>
                            Mathematics
                        </th>
                        <th>
                            English
                        </th>
                        <th>
                            Kiswahili
                        </th>
                        <th>
                            CRE
                        </th>

                        <th>
                            Geography
                        </th>
                        <th>
                            History
                        </th>
                        <th>
                            Physics
                        </th>
                        <th>
                            Chemistry
                        </th>


                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(!empty($results))
                    {
                       // print_r($results);
                        $result = $results;

                            ?>

                            <tr>
                                <td><?php echo(get_student($result["student_id"])->student_first_name." ".get_student($result["student_id"])->student_last_name); ?></td>
                                <td><?php echo($result["mathematics"]); ?></td>
                                <td><?php echo($result["english"]); ?></td>
                                <td><?php echo($result["kiswahili"]); ?></td>
                                <td><?php echo($result["cre"]); ?></td>
                                <td><?php echo($result["geography"]); ?></td>
                                <td><?php echo($result["history"]); ?></td>
                                <td><?php echo($result["physics"]); ?></td>
                                <td><?php echo($result["chemistry"]); ?></td>
                            </tr>

                        <?php



                    }
                    else
                    {
                        $form=1;
                    }

                    ?>





                    </tbody>
                </table>
            </div>
            </div>


        <?php

        if(!empty($form))
        {


            ?>

            <div class="row">
                <div class="col-md-6">

                    <h4>Add student Results</h4>
                    <form method="post" action="<?php echo(base_url("results/create_result")); ?>" >
                        <div class="input-group">


                            <input type="hidden" name="student_id" value="<?php echo($student_id); ?>">
                            <label for="mathematics"> Mathematics </label>
                            </br>
                            <select name="mathematics" id="mathematics">

                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>

                            </select>
                            </br>



                            <label for="english">English </label>
                            </br>
                            <select name="english" id="english">

                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>

                            </select>
                            </br>



                            <label for="kiswahili">Kiswahili </label>
                            </br>
                            <select name="kiswahili" id="kiswahili">

                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>

                            </select>
                            </br>



                            <label for="cre">CRE </label>
                            </br>
                            <select name="cre" id="cre">

                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>

                            </select>
                            </br>



                            <label for="geography">Geography </label>
                            </br>
                            <select name="geography" id="geography">

                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>

                            </select>
                            </br>



                            <label for="history">History </label>
                            </br>
                            <select name="history" id="history">

                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>

                            </select>
                            </br>



                            <label for="physics">Physics </label>
                            </br>
                            <select name="physics" id="physics">

                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>

                            </select>
                            </br>



                            <label for="chemistry">Chemistry </label>
                            </br>
                            <select name="chemistry" id="chemistry">

                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>

                            </select>
                            </br>



                            <button type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>

        <?php


        }

        ?>


	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. </p>
</div>

</body>
</html>