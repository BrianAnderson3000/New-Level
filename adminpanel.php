<!DOCTYPE html>
<?php
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
?>
<html>

 <body>
  <h1>Submit a new Post</h1>
  <p>For step 1, type in the catergory ID based on the blog catergory list below:
  <ul class="list-group">
<li class="list-group-item list-group-item-info">Blog ID = 1</li>
<li class="list-group-item list-group-item-info">Videos ID = 2</li>

    </ul>

  <form method="post" action="process.php" enctype="multipart/form-data">

<div class="text-left">
      <div class="form-group">
      </br><label>1. Catergory ID:</label></br>
      <input class="form-control" type="number" name="catergoryID" />
      <br /></div>
  <div class="form-group"><label>2. Blog Title:</label></br>
  <input class="form-control" type="text" name="Name" />
  <br /></div>

  <div class="form-group"<label>4a. Select Thumbnail Image:</label></br></br>
  <input class="form-control-file" type="file" name="fileToUpload" id="fileToUpload">
</br>
<li class="list-group-item list-group-item-info">For database purposes, you must
  also type the exact file name of the thumbnail image below:</li></div>
  <div class="form-group"><label>4b. Thumbnail Image file name:</label></br>
  <input class="form-control" type="text" name="imgThumb" /></br></div>

  <div class="form-group"><label>5a. Select Main Image:</label></br>
  <input class="form-control-file" type="file" name="fileToUpload1" id="fileToUpload1">
  </br><li class="list-group-item list-group-item-info">For database purposes, you must
    also type the exact file name of the Main Image below:</li></div>
  <div class="form-group"><label>5b. Main Image file name:</label></br>
  <input class="form-control" type="text" name="img1" />
</br></div>







  <div class="form-group"><label>Blog Post Paragraph 1</label></br>
  <input class="form-control" type="text" name="paragraph1" />
</br></div>
  <div class="form-group"><label>Blog Post Paragraph 2</label></br>
  <input class="form-control" type="text" name="paragraph2" /></div>
</div>

<div class="form-group"><label>Blog Post Paragraph 3</label></br>
<input class="form-control" type="text" name="paragraph3" />
</br></div>
<div class="form-group"><label>Blog Post Paragraph 4</label></br>
<input class="form-control" type="text" name="paragraph4" /></div>
</div>

<div class="form-group"><label>Blog Post Paragraph 5</label></br>
<input class="form-control" type="text" name="paragraph5" />
</br></div>
<div class="form-group"><label>Blog Post Paragraph 6</label></br>
<input class="form-control" type="text" name="paragraph6" /></div>
</div>

  <button class="btn btn-primary" type="submit" name="submit" value="Add Item">Publish</button>
  </form>
</br>
	<p><a href="admin.php?page=admin&logout=true">Logout</a></p>

</body>
</html>
