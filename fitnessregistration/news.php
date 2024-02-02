<?php
include("db.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $newsName = $_POST['newsName'];
    $newsList = $_POST['newsList'];
    $newsDescription = $_POST['newsDescription'];
    $newsReview = $_POST['newsReview'];

    $insertQuery = "INSERT INTO news (news_name, list, description, review) VALUES ('$newsName', '$newsDescription', '$newsList', '$newsReview')";

    if ($con->query($insertQuery) === TRUE){
        echo "News added successfully";
    }else{
        echo "Error: " . $insertQuery . "<br>" . $con->error;    
    }
    header("Location: " . $_SERVER['PHP_SELF']);
}
$query = "SELECT * FROM news";
$result = $con->query($query);
?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>List</th>
        </tr>
    </thead> 
<tbody>
    <?php
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['news_name']}</td>";
        echo "<td>{$row['description']}</td>";
        echo "<td>{$row['list']}</td>";
        echo "<td>{$row['review']}</td>";
        echo "</tr>";
    }           
    ?>
</tbody>
</table>

<div class="form-container">
    <button onclick="showAddNewsForm()">Add News</button>
    <form id="addNewsForm" style="display: none;" method="post">
    <label for="newsName">Name:</label>
    <input type="text" id="newsName" name="newsName">
    
    <label for="newsDescription">Description:</label>
    <input type="text" id="newsDescription" name="newsDescription">

    <label for="newsList">List:</label>
    <input type="text" id="newsList" name="newsList">

    <label for="newsReview">Review:</label>
    <input type="text" id="newsReview" name="newsReview">

    <input type="submit" name="submit" value="Add News">
    </form>
</div>

<script>
    function showAddNewsForm(){
        var showAddNewsForm = document.getElementById('addNewsForm');
        addNewsForm.style.display ='block';
    }
</script>

<?php
$con->close();
?>
