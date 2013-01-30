    <header>
    	<div class="main">
        	<div class="prev-indent-bot2">
                <h1><a href="index.php" title="home page">Trafitac</a></h1>
                <nav>
                    <ul class="menu">
                        <li><a <?php if($page == 'index') echo 'class="active"';?> href="index.php">home</a></li>
                        <li><a <?php if($page == 'about') echo 'class="active"';?> href="#">about us</a>
                            <ul>
                                <li><a href="company.php">our company</a></li>
                                <li><a href="approach.php">our approach</a></li>
                                <li><a href="mission.php">our mission</a></li>
                            </ul>
                        </li>
                        <li><a <?php if($page == 'services') echo 'class="active"';?> href="#">services</a>
                        	<ul>
                            	<li><a href = "manned_guarding.php">manned guarding</a></li>
                                <li><a href = "monitoring_systems.php">monitoring systems</a></li>
                                <li><a href = "mobile_patrol.php">mobile patrol</a></li>
                                <li><a href = "event_solutions.php">event solutions</a></li>
                                <li><a href = "traffic_management.php">traffic managment</a></li>
                            </ul>
                        </li>
                        <li><a <?php if($page == 'team') echo 'class="active"';?> href = "team.php">team</a></li>
                        <li><a <?php if($page == 'portfolio') echo 'class="active"';?> href="portfolio.php">portfolio</a></li>
                        <li><a <?php if($page == 'contact') echo 'class="active"';?> href="contact.php">contact</a></li>
                    </ul>
                </nav>
                <div class="clear"></div>
            </div>
        </div>
        <?PHP if($page == 'index'){
			echo'
        <div class="slider-wrapper">
        	<div class="slider">
            	<ul class="items">
                	<li>
                    	<img src="images/slider-img1.jpg" alt="">
                        <div class="banner">
                        	<strong>Need <strong>Protection?</strong></strong>
                            <em>Maximum security guaranteed wherever and whenever!</em>
                            <span class="button">
                            	<a href="manned_guarding.php"><strong>Read More</strong></a>
                            </span>
                        </div>
                    </li>
                    <li>
                    	<img src="images/slider-img2.jpg" alt="">
                        <div class="banner">
                        	<strong>Leaders <strong>in security!</strong></strong>
                            <em>Recognized as leading security solutions in West Africa!</em>
                            <span class="button">
                            	<a href="company.php"><strong>Read More</strong></a>
                            </span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>';
		}?>
    </header>