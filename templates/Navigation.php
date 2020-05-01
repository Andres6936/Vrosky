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
        return '
            <!-- Header and Navigation -->
            <nav class="navbar navbar-expand-lg navbar-light bg-ligth">
                <a class="navbar-brand" href="#">Vrosky</a>
            
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href=" ' . $this->links[0] . ' ">Sign Up</a>
                        </li>                    
                        <li class="nav-item">
                            <a class="nav-link" href=" ' . $this->links[1] . ' ">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=" ' . $this->links[2] . ' ">Privacy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=" ' . $this->links[3] . ' ">Contact</a>
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