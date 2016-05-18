




<?php require_once("header.php"); ?>

<!-- About Section -->
<section  id="portfolio">
<div class="container">
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

</div>
</section>


<?php require_once("footer.php"); ?>




