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
                        <hr>
                        <p>Sign in to like videos, comment and subscribe.</p>
                        <a href='./signin.php' class='sign-btn'>
                            <i class='fa-regular fa-circle-user'></i>
                            <p>SIGN IN</p>
                        </a>
                        <hr>
                        <p class='title'>BEST OF YOUTUBE</p>
                        <div class='categories'>
                            <a class='item'>
                                <div class='icon'>
                                    <i class='fa-solid fa-music' aria-hidden='true'></i>
                                </div>
                                <p>Music</p>
                            </a>
                            <a class='item'>
                                <div class='icon'>
                                    <i class='fa-solid fa-trophy'></i>
                                </div>
                                <p>Sports</p>
                            </a>
                            <a class='item'>
                                <div class='icon'>
                                    <i class='fa-solid fa-gamepad'></i>
                                </div>
                                <p>Gaming</p>
                            </a>
                            <a class='item'>
                                <div class='icon'>
                                    <i class='fa-solid fa-film'></i>
                                </div>
                                <p>Movies</p>
                            </a>
                            <a class='item'>
                                <div class='icon'>
                                    <i class='fa-solid fa-newspaper'></i>
                                </div>
                                <p>News</p>
                            </a>
                            <a class='item'>
                                <div class='icon'>
                                    <i class='fa-solid fa-tower-broadcast'></i>
                                </div>
                                <p>Live</p>
                            </a>
                            <a class='item'>
                                <div class='icon'>
                                    <i class='fa-solid fa-vr-cardboard'></i>
                                </div>
                                <p>360° Video</p>
                            </a>
                        </div>
                        <hr>
                        <a class='item browse'>
                            <div class='icon'>
                                <i class='fa-solid fa-plus'></i>
                            </div>
                            <p>Browse channels</p>
                        </a>
                        <hr>
                        <p class='title'>MORE FROM YOUTUBE</p>
                        <a class='item'>
                            <i class='fa-brands fa-youtube'></i>
                            <p>YouTube Premium</p>
                        </a>
                        <a class='item'>
                            <i class='fa-solid fa-tower-broadcast'></i>
                            <p>Live</p>
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
            <a href='./signin.php' class='sign-btn'>
                <i class='fa-regular fa-circle-user'></i>
                <p>SIGN IN</p>
            </a>
            <a class='anym-settings'>
                <i class='fa-solid fa-ellipsis-vertical'></i>
            </a>
            <a class='apps'>
                <i class='fa-solid fa-ellipsis'></i>
            </a>
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