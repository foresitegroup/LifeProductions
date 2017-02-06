<?php
include "login.php";

$PageTitle = "Home Page Videos";
include "header.php";
?>

<link rel="stylesheet" href="../inc/swipebox/swipebox.css">
<script type="text/javascript" src="../inc/swipebox/jquery.swipebox.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $(".swipebox-video").swipebox({autoplayVideos: true});
  });
</script>

<div class="site-width admin">
  <div class="one-half">
    <h3>Add Video</h3>

    <form action="home-videos-db.php?a=add" method="POST">
      <div>
        <input type="text" name="video" placeholder="Video URL">

        <input type="text" name="image" placeholder="Image" id="image">

        <input type="text" name="title" placeholder="Title">

        <input type="text" name="type" placeholder="Type">

        <strong>Publish</strong>
        &nbsp;
        <input type="radio" name="publish" value="on" id="r-pub-y" checked> <label for="r-pub-y">Yes</label>
        &nbsp;
        <input type="radio" name="publish" value="off" id="r-pub-n"> <label for="r-pub-n">No</label><br>
        <br>

        <input type="submit" name="submit" value="SUBMIT" id="submit">

        <div style="clear: both;"></div>
      </div>
    </form>
  </div>
  
  <div class="one-half last">
    <h3>Videos</h3><br>
    
    <div id="sortable">
      <?php
      $result = $mysqli->query("SELECT * FROM home_videos ORDER BY sort+0 ASC");

      while($row = $result->fetch_array(MYSQLI_ASSOC)) {
        echo "<div id=\"item-" . $row['id'] . "\">";
          echo "<div class=\"controls\">";
            echo "<a href=\"home-videos-edit.php?id=" . $row['id'] . "\" title=\"Edit\" class=\"c-edit\"><i class=\"fa fa-pencil\"></i></a>";
            echo "<a href=\"home-videos-db.php?a=delete&id=" . $row['id'] . "\" onClick=\"return(confirm('Are you sure you want to delete this record?'));\" title=\"Delete\" class=\"c-delete\"><i class=\"fa fa-trash\"></i></a>";
            echo "<i class=\"fa fa-sort\" aria-hidden=\"true\" title=\"Drag to sort\"></i>";
            echo "<a href=\"#\" class=\"pub\" id=\"" . $row['id'] . "\" title=\"" . $row['publish'] . "\"><i class=\"fa fa-toggle-" . $row['publish'] . "\"></i></a>";
          echo "</div>\n";

          echo "<div class=\"record\">";

          $TheImage = ($row['image'] != "") ? "../images/home-videos/" . $row['image'] : VideoImage($row['video']);
          ?>

          <div class="our-work-video" style="background-image: url(<?php echo $TheImage; ?>);">
            <a href="<?php echo $row['video']; ?>" class="swipebox-video"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a>

            <div>
              <?php echo $row['title']; ?><br>
              <span><?php echo $row['type']; ?></span>
            </div>
          </div>

          <?php
          echo "</div>";

          echo "<div style=\"clear: both; height: 0.7em\"></div><br>\n";
        echo "</div>\n";
      }

      $result->close();
      ?>
    </div>
  </div>

  <div style="clear: both;"></div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#sortable').sortable({
      axis: 'y',
      update: function (event, ui) {
        $.ajax({
          data: 'a=sort&' + $(this).sortable('serialize'),
          type: 'POST',
          url: 'home-videos-db.php'
        });
      }
    });
  });

  $(document).on("click", ".pub", function() {
    event.preventDefault();

    var orgPubState = $(this).attr('title');
    var newPubState = ($(this).attr('title') == "on") ? "off" : "on";

    $.ajax({
      data: "a=toggle&id="+$(this).attr('id')+"&pubstate="+newPubState,
      type: 'POST',
      url: 'home-videos-db.php'
    });

    $(this).children().removeClass('fa-toggle-'+orgPubState).addClass('fa-toggle-'+newPubState);
    $(this).attr("title", newPubState);
  });

  $(document).on("click", ".select-image", function() {
    event.preventDefault();
    $("#image").val(this.title);
    $("#image").css("background-image", 'url(../images/home-videos/'+this.title+')');
    $("#mediamanager").dialog("close");
  });
</script>

<div id="mediamanager" title="Media Manager">
  <div id="tabs">
    <ul>
      <li><a href="mm-images.php">Select Image</a></li>
      <li><a href="mm-upload.php">Upload Image</a></li>
    </ul>
  </div>
</div>

<?php include "footer.php"; ?>