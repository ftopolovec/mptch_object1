<?php

/**
 * Class Contests
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Contests extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/contests/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function single()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/contests/single_page.php';
        require APP . 'view/_templates/footer.php';
    }

    public function myEntries()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/contests/example_one.php';
        require APP . 'view/_templates/footer.php';
    }
}
