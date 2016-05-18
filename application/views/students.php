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
	<h1>All Students</h1>

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
                            School
                        </th>
                        <th>
                            County

                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(!empty($students))
                    {
                        foreach($students as $student){

                            ?>

                            <tr>
                                <td><a href="<?php echo(base_url("results?student_id=".$student->student_id)); ?>"><?php echo($student->student_first_name." ".$student->student_last_name); ?></a></td>
                                <td><?php echo(get_school($student->school_id)->school_name); ?></td>
                                <td><?php echo(get_county(get_school($student->school_id)->school_county_id)->county_name); ?></td>
                            </tr>

                        <?php

                        }

                    }

                    ?>





                    </tbody>
                </table>
            </div>
            <div class="col-md-6">

                <form method="post" action="<?php echo(base_url("students/create_student")); ?>" >
                    <div class="input-group">
                       <label for="school_id">
                           School
                       </label>
                        </br>


                        <select name="school_id" id="school_id">

                            <?php

                            $schools=get_all_schools();

                            foreach($schools as $school)
                            {
                                ?>

                                <option value="<?php echo($school->school_id); ?>"><?php echo($school->school_name); ?></option>

                            <?php
                            }


                            ?>


                        </select>


                        </br>
                        <label for="student_first_name">
                           Student First Name
                       </label></br>
                        <input class="input" type="text" id="student_first_name" name="student_first_name" required >
                        </br>
                        <label for="student_last_name">
                           Student Last Name
                       </label></br>
                        <input class="input" type="text" id="student_last_name" name="student_last_name" required >
                        </br>
                        <button type="submit">Add Student</button>
                    </div>
                </form>
            </div>
		</div>

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. </p>
</div>

</body>
</html>