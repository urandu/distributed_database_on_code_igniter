
<?php require_once("header.php"); ?>

<!-- About Section -->
<section  id="portfolio">
    <div class="container">

        <div class="row">
            <h1> Counties</h1>
            <div class="col-md-6">
                <table class="table table-bordered table-responsive table-bordered">
                    <thead>
                    <tr>
                        <th>
                            County name
                        </th>
                        <th>
                            County ID
                        </th>
                        <th>
                            Action
                        </th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(!empty($counties))
                    {
                        foreach($counties as $county){

                            ?>

                            <tr>
                                <td><?php echo($county->county_name); ?></td>
                                <td><?php echo($county->county_id); ?></td>
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

                <form method="post" action="<?php echo(base_url("counties/create_county")); ?>" >
                    <div class="input-group">
                        <label for="county_name">
                            County Name
                        </label></br>
                        <input class="input" type="text" id="county_name" name="county_name" required >
                        </br>
                        <button type="submit">Add County</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>


<?php require_once("footer.php"); ?>