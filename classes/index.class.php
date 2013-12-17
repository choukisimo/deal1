<?php 


class SiteMap{

        public function __construct(){
                $this->mapGenerator();
        }


        public function mapGenerator() {

        require 'core/SitemapGenerator.php';
        define('WEBROOT',str_replace('index.php', '',$_SERVER['SCRIPT_NAME']));
        $url= $_SERVER["HTTP_HOST"].WEBROOT;
        // create object
        $sitemap = new SitemapGenerator($url);
        // add urls
        $sitemap->addUrl($url,date('c'),'daily','1');
        $deals = new Deal();
        $d=$deals->getDealList();
        $cities = new City();
        $c=$cities->getCities();
        $cats = new Category();
        $ctg=$cats->getCategories();
                foreach ($d as $value) {

                $sitemap->addUrl("http://deals.com:8080/deals/".$value->id, date('c'),  'daily',    '0.5');
                }

                 foreach ($c as $value) {
                $sitemap->addUrl("http://deals.com:8080/deals/city.php.c=".$value->nomVille, date('c'),  'daily');
                }
                foreach ($ctg as $value) {
                $sitemap->addUrl("http://deals.com:8080/deals/category.php?cat=".$value->intitule, date('c'));
                }

        // create sitemap
        $sitemap->createSitemap();

        // write sitemap as file
        $sitemap->writeSitemap();

        // update robots.txt file
        $sitemap->updateRobots();

        }

}

?>
