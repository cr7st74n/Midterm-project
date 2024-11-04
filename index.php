<!DOCTYPE html>
<html lang="en">

<?php include("./view/head.php"); ?>

<body>
    <?php include('./view/header.php'); ?>

    <main class="container">
        <h1>Main Content</h1>
        <P>
            John's Resort offers a special lodging experience on the New Jersey Eastern Coast.
            Relax in serenity with Panoramic views of the Atlantic Ocean.
            • Private yurts with decks overlooking the ocean
            • Activities lodge with fireplace and gift shop
            • Nightly fine dining at the Overlook Cafe
            • Heated outdoor pool and whirlpool
            • Guided hiking tours of the redwoods
            John's Resort
            One Normal Ave, Montclair
            New Jersey NJ 07043
            973-655-4166

        </P>

        <h1><?php echo 'This is a heading'; ?></h1>
        <p><?php echo 'This is a paragraph.'; ?></p>
        <ul>
            <li><?php echo 'List item 1'; ?></li>
            <li><?php echo 'List item 2'; ?></li>
            <li><?php echo 'List item 3'; ?></li>
        </ul>
        <ol>
            <li><?php echo 'Ordered item 1'; ?></li>
            <li><?php echo 'Ordered item 2'; ?></li>
            <li><?php echo 'Ordered item 3'; ?></li>
        </ol>


    </main>

    <?php include("./view/footer.php"); ?>
</body>

</html>