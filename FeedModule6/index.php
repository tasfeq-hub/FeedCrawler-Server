<?PHP

include('FeedSix.php');

class Crawler extends FeedSix{
    
    public function index(){
         
          $this->storeFeeds();  
          
    }
    
} // class ends

$crawler = new Crawler();
$crawler->index();

?>

