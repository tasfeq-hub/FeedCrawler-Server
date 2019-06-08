<?PHP

/*

@ Parse Feeds from different Web pages and store in MySQL database

*/

include_once('FeedModule1/FeedOne.php'); // include FeedOne class
include_once('FeedModule2/FeedTwo.php'); // include FeedTwo class

class FeedCrawler extends DatabaseModel{

     public function index(){
 
        /*
        $feedOne = new FeedOne();
        $feedOne->storeFeeds(); 
        */
        $feedTwo = new FeedTwo();
        $feedTwo->storeFeeds();
        // insert log data into items log table
        //$this->saveLogData("");
    }

}

$parser = new FeedCrawler();
$parser->index();

?>