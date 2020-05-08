<?php


final class Navigation
{
    private $links = [];

    public function __construct(array $_links)
    {
        $this->links = $_links;
    }

    public function getNavigation()
    {
        // Initialize the session
        session_start();

        if (isset($_SESSION["LOGGEDIN"]) && $_SESSION["LOGGEDIN"] === true) {
            $linkToRegisterOrLogin = '<a class="nav-link" href=" ' . $this->links["LOGOUT"] . ' ">Log Out</a>';
        } else {
            $linkToRegisterOrLogin = '<a class="nav-link" href=" ' . $this->links["SIGNUP"] . ' ">Sign Up</a>';
        }

        return '
            <!-- Header and Navigation -->
            <nav class="navbar navbar-expand-lg navbar-light bg-ligth">
                <a class="navbar-brand" href=" ' . $this->links["INDEX"] . ' ">Vrosky</a>
            
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            ' . $linkToRegisterOrLogin . '
                        </li>                    
                        <li class="nav-item">
                            <a class="nav-link" href=" ' . $this->links["TEAM"] . ' ">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=" ' . $this->links["PRIVACY"] . ' ">Privacy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=" ' . $this->links["CONTACT"] . ' ">Contact</a>
                        </li>
                    </ul>
            
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="search">
                        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        ';
    }
}