<!DOCTYPE html>
<html lang="en">

<?php include("./view/head.php"); ?>

<body>
    <?php include('./view/header.php'); ?>
    
    <div class="container mt-2">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get form data using POST
            $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
            $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
            $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
            $comment = isset($_POST['comment']) ? htmlspecialchars($_POST['comment']) : '';

            // Determine greeting based on input provided
            $greeting = 'Guest';
            if (!empty($name)) {
                $greeting = $name;
            } elseif (!empty($email)) {
                $greeting = $email;
            }

            echo "<h2>Thank you, $greeting, for your comment!</h2>";
            echo "<p>Here is the information you submitted:</p>";
            echo "<table class='table table-striped' style='width: 100%;'>";

            // Display fields in a table format
            $fields = [
                'Name' => $name,
                'Email' => $email,
                'Phone' => $phone,
                'Comment' => $comment
            ];

            foreach ($fields as $label => $value) {
                echo "<tr><th style='width: 30%;'>$label</th><td>$value</td></tr>";
            }

            echo "</table>";
        } else { ?>

            <!-- Display the form if the page was not submitted -->
            <div class="container">
                <h2>Leave a Comment</h2>
                <form class="form-horizontal" action="" method="POST">
                    <!-- Name field -->
                    <div class="row p-1">
                        <label class="control-label col-sm-2" for="name">Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your name">
                        </div>
                    </div>

                    <!-- Email field -->
                    <div class="row p-1">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@domain.com">
                        </div>
                    </div>

                    <!-- Phone field -->
                    <div class="row p-1">
                        <label class="control-label col-sm-2" for="phone">Phone:</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="(###) ###-####">
                        </div>
                    </div>

                    <!-- Comment field -->
                    <div class="row p-1">
                        <label class="control-label col-sm-2" for="comment">Comment:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="comment" name="comment" rows="3" placeholder="Your comment here..."></textarea>
                        </div>
                    </div>

                    <!-- Submit and Reset buttons -->
                    <div class="row p-1">
                        <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </div>
                </form>
            </div>

        <?php } ?>
    </div>

    <?php include("./view/footer.php"); ?>
</body>

</html>
