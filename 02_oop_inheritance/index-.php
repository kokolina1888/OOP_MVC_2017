<?php 

include 'Page.php';
include 'HomePage.php';


$page = new Page('The Header', 'Simple Page', 'The Content', 'The Footer');
// echo $page->render_body();

echo '<hr>';
$homePage = new HomePage('The Header', 'Home Page', 'The Banner', 'The Sidebar', 'The Content', 'The Footer');

// echo $homePage->render_body();

echo $page->render_title();
echo '<p></p>';
echo $homePage->render_title();