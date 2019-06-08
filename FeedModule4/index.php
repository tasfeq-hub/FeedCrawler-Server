<?PHP

include('FeedFour.php');

class Crawler extends FeedFour{
    
    public function index(){
         
          $this->storeFeeds();  
          
    }
    
} // class ends

$crawler = new Crawler();
$crawler->index();

?>

