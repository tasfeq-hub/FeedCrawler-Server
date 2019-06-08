<?PHP

include('FeedThree.php');

class Crawler extends FeedThree{
    
    public function index(){
         
          $this->storeFeeds();  
          
    }
    
} // class ends

$crawler = new Crawler();
$crawler->index();

?>

