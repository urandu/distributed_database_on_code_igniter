







<?php require_once("header.php"); ?>

<!-- About Section -->
<section  id="portfolio">
    <div class="container">
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
</section>


<?php require_once("footer.php"); ?>









