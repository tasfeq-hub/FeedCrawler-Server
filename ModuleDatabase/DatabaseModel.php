<?PHP

include('database-config-local.php'); // include database configuration file


class DatabaseModel{
    
    protected function saveFeed($title,$link,$publishedAt,$createdAt,$feedProvider){
        
        $connection = mysqli_connect(db_HOST,db_USER, db_PASS,db_NAME)
        or die("Could not connect to the Feed Crawler Database:<br />" . mysql_error());
        
        $sql = "INSERT INTO feeds (title, link, published_at, created_at, feed_provider) 
                VALUES ('$title', '$link', '$publishedAt','$createdAt','$feedProvider')";
        
        if(mysqli_query($connection, $sql)){
            echo "Data Inserted successfully.";
        } else{
            echo "ERROR: Can not execute $sql. " . mysqli_error($connection);
        }
    
    } // function ends

    protected function saveLogData(){

        $connection = mysqli_connect(db_HOST,db_USER, db_PASS,db_NAME)
        or die("Could not connect to the Feed Crawler Database:<br />" . mysql_error());
        
        $date = date('Y-m-d H:i:s');
        $sql = "INSERT INTO feed_log (created_at, updated_at) 
                VALUES ('$date', '$date')";
        
        if(mysqli_query($connection, $sql)){
            // @todo in future
        } else{
            // @todo in future
        }

    } // function ends

} // end of class


?>