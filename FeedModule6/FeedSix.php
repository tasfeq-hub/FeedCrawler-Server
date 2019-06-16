<?PHP

include_once($_SERVER['DOCUMENT_ROOT'].'/FeedCrawler-Server/ModuleDatabase/DatabaseModel.php'); // include database model
require_once($_SERVER['DOCUMENT_ROOT'].'/FeedCrawler-Server/StringModifier.php'); // string modifier helper class

define('webPageUrlSix','https://www.washingtontimes.com/atom/headlines/opinion/'); // set the URL of ATOM feed provider


class FeedSix extends DatabaseModel{
    
    private $stringModifier;

    function __construct() {
        
        $this->stringModifier = new StringModifier();

    }

    function storeFeeds(){

        $feedXml = simplexml_load_file(webPageUrlSix);
        $feedJson = json_encode($feedXml);
        $feedArray = json_decode($feedJson,TRUE);
        $allFeedItems =$feedArray['entry'];
        
        for ($i=0; $i<count($allFeedItems); $i++){
            
            // save feed data in the database
            $this->saveFeed(
                $this->stringModifier->modifyString($allFeedItems[$i]['title']),
                $allFeedItems[$i]['id'],
                $allFeedItems[$i]['published'],
                date('Y-m-d H:i:s'),
                "WT" // hardcoded provider name! @todo make it dynamic in future
            ); 
        
        }
     
    } // function ends
        

} // class ends

?>

