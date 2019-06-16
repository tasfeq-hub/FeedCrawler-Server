<?PHP

/*

@ Parse Feeds from different Web pages and store in MySQL database

*/

include_once('FeedModule1/FeedOne.php'); // include FeedOne class
include_once('FeedModule2/FeedTwo.php'); // include FeedTwo 
include_once('FeedModule3/FeedThree.php'); // include FeedThree class
include_once('FeedModule4/FeedFour.php'); // include FeedFour class
include_once('FeedModule5/FeedFive.php'); // include FeedFive class
include_once('FeedModule6/FeedSix.php'); // include FeedFive class

class FeedCrawler extends DatabaseModel{

     public function index(){

        /* clear feeds table first before updating */
        $this->emptyFeedsTable();
 
        $feedOne = new FeedOne();
        $feedOne->storeFeeds(); 

        $feedTwo = new FeedTwo();
        $feedTwo->storeFeeds();
        
        $feedThree = new FeedThree();
        $feedThree->storeFeeds();
        
        $feedFour = new FeedFour();
        $feedFour->storeFeeds();
        
        $feedFive = new FeedFive();
        $feedFive->storeFeeds();
        
        $feedSix = new FeedSix();
        $feedSix->storeFeeds();

        /* insert log data into items log table */
        $this->saveLogData();
        
    }

}

$feedCrawler = new FeedCrawler();
$feedCrawler->index();

?>