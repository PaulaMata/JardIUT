<?php include("includes/data.php"); ?>
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
            <a class="navbar-brand" href="index.php"><?php echo $_NAME; ?></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="index.php">Accueil</a>
                </li>
                <li>
                    <a href="about.php">A propos</a>
                </li>
                <li>
                    <a href="blog.php">Blog</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
