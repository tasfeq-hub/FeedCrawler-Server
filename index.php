<?PHP

/*

@ Parse Feeds from different Web pages and store in MySQL database

*/

include_once('FeedModule1/FeedOne.php'); // include FeedOne class
include_once('FeedModule2/FeedTwo.php'); // include FeedTwo 
include_once('FeedModule3/FeedThree.php'); // include FeedThree class
include_once('FeedModule4/FeedFour.php'); // include FeedFour class
include_once('FeedModule5/FeedFive.php'); // include FeedFive class

class FeedCrawler extends DatabaseModel{

     public function index(){
 
        /*
        $feedOne = new FeedOne();
        $feedOne->storeFeeds(); 

        $feedTwo = new FeedTwo();
        $feedTwo->storeFeeds();
        
        $feedThree = new FeedThree();
        $feedThree->storeFeeds();
        
        $feedFour = new FeedFour();
        $feedFour->storeFeeds();
        */
        $feedFive = new FeedFive();
        $feedFive->storeFeeds();
        
        // insert log data into items log table
        //$this->saveLogData("");
    }

}

$parser = new FeedCrawler();
$parser->index();

?>