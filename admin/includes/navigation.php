

 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="../images/logowhite.png" width="150px" height="50px"></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Namaste <?php echo $username;?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                     
                    
                        <li>
                            <a href="index.php?logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
             <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-compass"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#post"><i class="fa fa-fw fa-clone"></i> Study Destinations  <i class="fa fa-fw fa-caret-down"></i></a> 
                        <ul id="post" class="collapse">
                            <li>
                                <a href="posts.php?source=">View Posts</a>
                            </li>
                            <li>
                                <a href="posts.php?source=add_new">Add New Posts</a>
                            </li>

                        </ul>
                    </li>


                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#service"><i class="fa fa-fw fa-send"></i> Services <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="service" class="collapse">
                            <li>
                                <a href="services.php?source=">View Services</a>
                            </li>
                            <li>
                                <a href="services.php?source=add_new">Add New Service</a>
                            </li>

                        </ul>
                    </li>

                       <li>
                        <a href="categories.php"><i class="fa fa-fw fa-cubes"></i> Categories</a>
                    </li>
                   
                    <li><a href="../index.php"><i class="fa fa-fw fa-globe"></i> Visit Site</a></li> 
                    <li>
                    <a href="index.php?logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
       <script src="bootstrap/js/jquery.js"></script>
