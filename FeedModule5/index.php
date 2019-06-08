<?PHP

include('FeedFive.php');

class Crawler extends FeedFive{
    
    public function index(){
         
          $this->storeFeeds();  
          
    }
    
} // class ends

$crawler = new Crawler();
$crawler->index();

?>

