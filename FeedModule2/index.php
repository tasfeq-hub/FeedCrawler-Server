<?PHP

include('FeedTwo.php');

class Crawler extends FeedTwo{
    
    public function index(){
         
          $this->storeFeeds();  
          
    }
    
} // class ends

$crawler = new Crawler();
$crawler->index();

?>

