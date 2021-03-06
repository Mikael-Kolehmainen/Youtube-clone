<?php
    echo "
        <header>
            <!-- HAMBURGER MENU -->
            <div class='bottom-border'></div>
                <nav>
                    <div id='hamburger'>
                        <a onclick='openHamburgerMenu()'>
                            <i class='fa-solid fa-bars' id='hamburgerImage'></i>
                        </a>
                    </div>
                    <div id='navLinks' class='navLinks'>
                        <a href='index.php' class='item active'>
                            <div class='icon'>
                                <i class='fa-solid fa-house'></i>
                            </div>
                            <p>Home</p>
                        </a>
                        <a class='item'>
                            <div class='icon'>
                                <i class='fa-solid fa-compass'></i>
                            </div>
                            <p>Explore</p>
                        </a>
                        <a class='item'>
                            <div class='icon'>
                                <i class='fa-solid fa-stopwatch'></i>
                            </div>
                            <p>Shorts</p>
                        </a>
                        <a class='item'>
                            <div class='icon'>
                                <i class='fa-solid fa-clipboard-list'></i>
                            </div>
                            <p>Subscriptions</p>
                        </a>
                        <hr>
                        <a class='item'>
                            <div class='icon'>
                                <i class='fa-solid fa-book'></i>
                            </div>
                            <p>Library</p>
                        </a>
                        <a class='item'>
                            <div class='icon'>
                                <i class='fa-solid fa-clock-rotate-left'></i>
                            </div>
                            <p>History</p>
                        </a>
                        <a class='item'>
                            <div class='icon'>
                                <i class='fa-solid fa-circle-play'></i>
                            </div>
                            <p>Your videos</p>
                        </a>
                        <a class='item'>
                            <div class='icon'>
                                <i class='fa-solid fa-clock'></i>
                            </div>
                            <p>Watch later</p>
                        </a>
                        <a class='item'>
                            <div class='icon'>
                                <i class='fa-solid fa-thumbs-up'></i>
                            </div>
                            <p>Liked videos</p>
                        </a>
                        <hr>
                        <p class='title'>SUBSCRIPTIONS</p>
                        <hr>
                        <p class='title'>MORE FROM YOUTUBE</p>
                        <a class='item'>
                            <div class='icon'>
                                <i class='fa-brands fa-youtube'></i>
                            </div>
                            <p>YouTube Premium</p>
                        </a>
                        <a class='item'>
                            <div class='icon'>
                                <i class='fa-solid fa-film'></i>
                            </div>
                            <p>Movies</p>
                        </a>
                        <a class='item'>
                            <div class='icon'>
                                <i class='fa-solid fa-gamepad'></i>
                            </div>
                            <p>Gaming</p>
                        </a>
                        <a class='item'>
                            <div class='icon'>
                                <i class='fa-solid fa-tower-broadcast'></i>
                            </div>
                            <p>Live</p>
                        </a>
                        <a class='item'>
                            <div class='icon'>
                                <i class='fa-solid fa-trophy'></i>
                            </div>
                            <p>Sports</p>
                        </a>
                        <hr>
                        <a class='item'>
                            <div class='icon'>
                                <i class='fa-solid fa-gear'></i>
                            </div>
                            <p>Settings</p>
                        </a>
                        <a class='item'>
                            <div class='icon'>
                                <i class='fa-solid fa-flag'></i>
                            </div>
                            <p>Report history</p>
                        </a>
                        <a class='item'>
                            <div class='icon'>
                                <i class='fa-solid fa-circle-question'></i>
                            </div>
                            <p>Help</p>
                        </a>
                        <a class='item'>
                            <div class='icon'>
                                <i class='fa-solid fa-circle-exclamation'></i>
                            </div>
                            <p>Send feedback</p>
                        </a>
                        <hr>
                    </div>
                    <div id='closed-navLinks' class='closed-navLinks' style='display: none'>
                        <a href='index.php' class='item active'>
                            <div class='icon'>
                                <i class='fa-solid fa-house'></i>
                            </div>
                            <p>Home</p>
                        </a>
                        <a class='item'>
                            <div class='icon'>
                                <i class='fa-solid fa-compass'></i>
                            </div>
                            <p>Explore</p>
                        </a>
                        <a class='item'>
                            <div class='icon'>
                                <i class='fa-solid fa-stopwatch'></i>
                            </div>
                            <p>Shorts</p>
                        </a>
                        <a class='item'>
                            <div class='icon'>
                                <i class='fa-solid fa-clipboard-list'></i>
                            </div>
                            <p>Subscriptions</p>
                        </a>
                        <a class='item'>
                            <div class='icon'>
                                <i class='fa-solid fa-book'></i>
                            </div>
                            <p>Library</p>
                        </a>
                    </div>
                </nav>
            <div class='logo'>
                <img src='./media/logo.jpg' alt='YouTube logo'>
            </div>
            <div class='search-bar' id='search-bar' style='display: block;'>
                <form action=''>
                    <input type='text' name='searchInput' placeholder='Search' required><input type='submit' name='searchBtn' value='Icon'>
                </form>
            </div>
            
            <!-- IN REVERSE ORDER BECAUSE OF FLOAT RIGHT -->
            <a href='#' onclick='openDropdownMenu(\"profileMenu\");' class='profile-btn'>
                <img src='./media/profile-default.jpg' alt='profile image of user'>
            </a>
                <div class='profile dropdown' id='profileMenu' style='display: none'>
                    <div class='top'>
                        <img src='./media/profile-default.jpg' alt='profile image of user'>
                        <h1>$row[fname] $row[lname]</h1><br>
                        <a href='#'>Manage your Google Account</a>
                    </div>
                    <a class='item'>
                        <div class='icon'>
                            <i class='fa-solid fa-user'></i>
                        </div>
                        <p>Your channel</p>
                    </a>
                    <a class='item'>
                        <div class='icon'>
                            <i class='fa-brands fa-youtube'></i>
                        </div>
                        <p>YouTube Studio</p>
                    </a>
                    <a class='item'>
                        <div class='icon'>
                            <i class='fa-solid fa-user-group'></i>
                        </div>
                        <p>Switch account</p>
                        <div class='angle'>
                            <i class='fa-solid fa-angle-right'></i>
                        </div>
                    </a>
                    <a href='signout.php' class='item'>
                        <div class='icon'>
                            <i class='fa-solid fa-arrow-right-from-bracket'></i>
                        </div>
                        <p>Sign out</p>
                    </a>
                    <hr>
                    <a class='item'>
                        <div class='icon'>
                            <i class='fa-solid fa-sack-dollar'></i>
                        </div>
                        <p>Purchases and memberships</p>
                    </a>
                    <a class='item'>
                        <div class='icon'>
                            <i class='fa-solid fa-user-shield'></i>
                        </div>
                        <p>Your data in YouTube</p>
                    </a>
                    <hr>
                    <a class='item'>
                        <div class='icon'>
                            <i class='fa-solid fa-moon'></i>
                        </div>
                        <p>Appearance: Light</p>
                        <div class='angle'>
                            <i class='fa-solid fa-angle-right'></i>
                        </div>
                    </a>
                    <a class='item'>
                        <div class='icon'>
                            <i class='fa-solid fa-language'></i>
                        </div>
                        <p>Language: English</p>
                        <div class='angle'>
                            <i class='fa-solid fa-angle-right'></i>
                        </div>
                    </a>
                    <a class='item'>
                        <div class='icon'>
                            <i class='fa-solid fa-shield'></i>
                        </div>
                        <p>Restricted Mode: off</p>
                        <div class='angle'>
                            <i class='fa-solid fa-angle-right'></i>
                        </div>
                    </a>
                    <a class='item'>
                        <div class='icon'>
                            <i class='fa-solid fa-globe'></i>
                        </div>
                        <p>Location: Finland</p>
                        <div class='angle'>
                            <i class='fa-solid fa-angle-right'></i>
                        </div>
                    </a>
                    <a class='item'>
                        <div class='icon'>
                            <i class='fa-solid fa-keyboard'></i>
                        </div>
                        <p>Keyboard shortcuts</p>
                    </a>
                    <hr>
                    <a class='item'>
                        <div class='icon'>
                            <i class='fa-solid fa-gear'></i>
                        </div>
                        <p>Settings</p>
                    </a>
                    <hr>
                    <a class='item'>
                        <div class='icon'>
                            <i class='fa-solid fa-circle-question'></i>
                        </div>
                        <p>Help</p>
                    </a>
                    <a class='item'>
                        <div class='icon'>
                            <i class='fa-solid fa-circle-exclamation'></i>
                        </div>
                        <p>Send feedback</p>
                    </a>
                    <hr>
                </div>
            <a class='notifications'>
                <i class='fa-solid fa-bell'></i>
            </a>
            <a href='#' onclick='openDropdownMenu(\"videoMenu\");' class='new'>
                <i class='fa-solid fa-video'></i>
            </a>
                <div class='video dropdown' id='videoMenu' style='display: none'>
                    <a href='create-video.php' class='item'>
                        <div class='icon'>
                            <i class='fa-solid fa-circle-play'></i>
                        </div>
                        <p>Upload video</p>
                    </a>
                    <a class='item'>
                        <div class='icon'>
                            <i class='fa-solid fa-tower-broadcast'></i>
                        </div>
                        <p>Go live</p>
                    </a>
                </div>
            <a class='voice-search'>
                <i class='fa-solid fa-microphone'></i>
            </a>
            <div class='search-btn' id='search-btn' style='display: none;' onclick='showSearchBar();'>
                <div class='icon'>
                    <i class='fa-solid fa-magnifying-glass' id='search-btn-icon'></i>
                </div>
            </div>
            <!-- SEARCH BAR ON SMALLER SCREENS -->
            <div class='search-container' id='search-container' style='display: none;'>
                <div class='back-btn' onclick='hideSearchBar();'>
                    <i class='fa-solid fa-arrow-left' id='back-btn-icon'></i>
                </div>
                <div class='search-bar'>
                    <form action=''>
                        <input type='text' name='searchInput' placeholder='Search' required><input type='submit' name='searchBtn' value='Icon'>
                    </form>
                </div>
                <a class='voice-search'>
                    <i class='fa-solid fa-microphone'></i>
                </a>
            </div>
        </header>
    ";
?>