<nav id="navbar" class="navbar">
    <ul>
        <li>
            <a class="nav-link scrollto" href="?module=main">Home</a>
        </li>
        <li class="dropdown">
            <a href="#"><span>Server Info</span></a>
            <ul>
                <li>
                    <a href="?module=server&amp;action=info">About Server</a>
                </li>
                <li>
                    <a href="?module=ranking&amp;action=character">Ranking</a>
                </li>
                <li>
                    <a href="#">About Us</a>
                </li>
                <li>
                    <a href="?module=woe">WOE Statistics</a>
                </li>
            </ul>
        </li>

        <li>
            <a class="nav-link scrollto" href="wiki">Wiki</a>
        </li>
        <li>
            <a class="nav-link scrollto" href="?module=donate">Donate</a>
        </li>
        <li>
            <a class="nav-link scrollto" href="?module=pages&amp;action=content&amp;path=downloads">Download</a>
        </li>


        <li>
            <a class="nav-link scrollto discord-nav" href="#">&nbsp;</a>
        </li>

        <?php if ($session->isLoggedIn()): ?>

            <li>
                <button class="nav-link scrollto al_custom_dropdown" href="#">
                    <?php echo htmlspecialchars($session->account->userid) ?>
                    <i class="fa fa-caret-down">&nbsp;</i>
                    <div class="al_custom_dropdown_menu" style="display: none;">
                        <div class="al_drop_navs">
                            <a class="nav-link" href="?module=account&action=view">My Account</a>
                            <a class="nav-link" href="?module=history">History</a>
                            <a class="nav-link" href="?module=servicedesk">Service Desk</a>
                            <a class="nav-link" href="?module=account&action=logout">Logout</a>
                        </div>

                    </div>
                </button>
            </li>
        <?php else: ?>
            <li>
                <a class="nav-link scrollto" href="?module=account&action=login">Log In</a>
            </li>
            <li>
                <a class="nav-link scrollto" href="?module=account&action=create">Register</a>
            </li>
        <?php endif; ?>


    </ul>
    <i class="fa fa-bars mobile-nav-toggle">&nbsp;</i>
</nav>