<?PHP

include_once($_SERVER['DOCUMENT_ROOT'].'/FeedCrawler-Server/ModuleDatabase/DatabaseModel.php'); // include database model
require_once($_SERVER['DOCUMENT_ROOT'].'/FeedCrawler-Server/StringModifier.php'); // string modifier helper class

define('webPageUrlOne','https://rss.nytimes.com/services/xml/rss/nyt/Technology.xml'); // set the URL of feed provider


class FeedOne extends DatabaseModel{
    
    private $stringModifier;

    function __construct() {
        
        $this->stringModifier = new StringModifier();

    }

    function storeFeeds(){

        $feedXml = simplexml_load_file(webPageUrlOne);
        $feedJson = json_encode($feedXml);
        $feedArray = json_decode($feedJson,TRUE);
        $allFeedItems =$feedArray['channel']['item'];
        
        for ($i=0; $i<count($allFeedItems); $i++){
            
            // save data in the database
            $this->saveFeed(
                $allFeedItems[$i]['title'],
                $allFeedItems[$i]['link'],
                $allFeedItems[$i]['pubDate'],
                date('Y-m-d H:i:s'),
                "NYT" // hardcoded provider name! @todo make it dynamic in future
            ); 
        
        }
       
    } // function ends
        

} // class ends

?>

