









<?php require_once("header.php"); ?>

<!-- About Section -->
<section  id="portfolio">
    <div class="container">
        <h1>All Schools</h1>

        <div id="body" class="container">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>
                                School name
                            </th>
                            <th>
                                School ID
                            </th>
                            <th>
                                Action
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(!empty($schools))
                        {
                            foreach($schools as $school){

                                ?>

                                <tr>
                                    <td><?php echo($school->school_name); ?></td>
                                    <td><?php echo($school->school_id); ?></td>
                                    <td>
                                </tr>

                            <?php

                            }

                        }

                        ?>





                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">

                    <form method="post" action="<?php echo(base_url("schools/create_school")); ?>" >
                        <div class="input-group">
                            <label for="county_id">
                                County
                            </label>
                            </br>


                            <select name="county_id" id="county_id">

                                <?php

                                $counties=get_all_counties();

                                foreach($counties as $county)
                                {
                                    ?>

                                    <option value="<?php echo($county->county_id); ?>"><?php echo($county->county_name); ?></option>

                                <?php
                                }


                                ?>


                            </select>


                            </br>
                            <label for="school_name">
                                School Name
                            </label></br>
                            <input class="input" type="text" id="school_name" name="school_name" required >
                            </br>
                            <button type="submit">Add School</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. </p>
    </div>
</section>


<?php require_once("footer.php"); ?>






