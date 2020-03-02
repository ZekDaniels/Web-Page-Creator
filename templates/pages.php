<?php 
 $pname= $_GET['pname'];
 ?>
<body>
    <div class="container">
        <a href="index.php" id="logo">CMS </a>

        <ol>
            <li><a href="./?&action=pages&pname=<?php echo $pname; ?>">Edit Home Page</a></li>
            <li><a href="./?&action=pages&pname=<?php echo $pname; ?>">Create About Us</a></li>
            <li><a href="./?&action=pages&pname=<?php echo $pname; ?>">Create Our Activities</a></li>
            <li><a href="./?&action=create-contact&pname=<?php echo $pname; ?>">Create Contact</a></li>
            

        </ol>

    </div>
</body>
