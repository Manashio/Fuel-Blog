<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title;?></title>

    <?php 
        echo Asset::css('bulma.min.css');
        echo Asset::css('app.css');
    ?>
</head>
<body>



        <div class="header">
        <div class="container">
            <div class="">
                <!-- NAV BAR -->
                <nav class="navbar  " role="navigation" aria-label="main navigation">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="/">BLOG.IO</a>

                        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
                            data-target="navbarBasicExample">
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>
                        <div class="navbar-end">
                            <div id="navbarBasicExample" class="navbar-menu">
                                <div class="navbar-start">

                                    <a href="/posts/add" class="navbar-item" href="">Write</a>    

                                    <a class="navbar-item" href="">About</a>
                                    <a class="navbar-item" href="">join</a>
                                    
        
                                </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>


    </div>

                <?php echo $content;?>

    <footer>
        <div class="container">
            <p class="logo">
                
                    Dev.blog.io 2018 <br>
                    <span class="sub-title">Blog for developer</span>
                
            </p>
        </div>
    </footer>

    <?php 
        echo Asset::js('fontawesome.js');
    ?>
</body>
</html>

