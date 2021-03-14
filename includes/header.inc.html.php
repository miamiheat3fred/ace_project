<?php

    define ("BASE_URL", "/cas222/ace_project/");

?>

<header>
    
    <img id="title" src="/cas222/ace_project/images/AITH_Logos/AITH_white_and_red_shadow_on_black_Impact.png" alt="Ace Logo">
    
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
            
        <ul class="nav">
            <li><a href="<?php echo BASE_URL; ?>index.php" target="_self">Home</a></li>
            <li><a href="#" target="_self">Event ▾</a>
                <ul class="dropdown">
                    <li><a href="<?php echo BASE_URL; ?>courseDetails" target="_self">Course Details</a></li>
                    <li><a href="<?php echo BASE_URL; ?>whatToBring" target="_self">What to Bring</a></li>
                    <li><a href="<?php echo BASE_URL; ?>faq" target="_self">FAQs</a></li>
                </ul>
            </li>
            <li><a href="<?php echo BASE_URL; ?>registrations" target="_self">Register</a></li>
            <li><a href="<?php echo BASE_URL; ?>contact" target="_self">Contact Us</a></li>
            <li><a href="<?php echo BASE_URL; ?>gallery" target="_self">Gallery</a></li>
        </ul>
               
</header>

