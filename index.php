<?PHP

/*

@ Parse Restaurant Pages and store in the Item table

*/

include_once('FeedModule1/FeedOne.php'); // include FeedOne class

class FeedCrawler extends DatabaseModel{

     public function index(){
 
        // update menu for restaurant one
        $feedOne = new FeedOne();
        $feedOne->storeFeeds(); 
        
        // insert log data into items log table
        $this->saveLogData("");
    }

}

$parser = new FeedCrawler();
$parser->index();

?>