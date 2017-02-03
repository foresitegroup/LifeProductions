<?php
include "login.php";

$PageTitle = "Testimonials";
include "header.php";
?>

<div class="site-width admin">
  <div class="one-half">
    <h3>Add Testimonial</h3>

    <form action="testimonials-db.php?a=add" method="POST">
      <div>
        <textarea name="testimonial" placeholder="Testimonial"></textarea>

        <input type="text" name="person" placeholder="Person">

        <input type="text" name="title" placeholder="Person's Title">

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
    <h3>Testimonials</h3><br>
    
    <div id="sortable">
      <?php
      $result = $mysqli->query("SELECT * FROM testimonials ORDER BY sort+0 ASC");

      while($row = $result->fetch_array(MYSQLI_ASSOC)) {
        echo "<div id=\"item-" . $row['id'] . "\">";
          echo "<div class=\"controls\">";
            echo "<a href=\"testimonials-edit.php?id=" . $row['id'] . "\" title=\"Edit\" class=\"c-edit\"><i class=\"fa fa-pencil\"></i></a>";
            echo "<a href=\"testimonials-db.php?a=delete&id=" . $row['id'] . "\" onClick=\"return(confirm('Are you sure you want to delete this record?'));\" title=\"Delete\" class=\"c-delete\"><i class=\"fa fa-trash\"></i></a>";
            echo "<i class=\"fa fa-sort\" aria-hidden=\"true\" title=\"Drag to sort\"></i>";
            echo "<a href=\"#\" class=\"pub\" id=\"" . $row['id'] . "\" title=\"" . $row['publish'] . "\"><i class=\"fa fa-toggle-" . $row['publish'] . "\"></i></a>";
          echo "</div>\n";

          echo "<div class=\"record\">";
          echo nl2br($row['testimonial']);
          echo "<div class=\"attr\"><strong>" . $row['person'] . "</strong>, " . $row['title'] . "</div>";
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
          url: 'testimonials-db.php'
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
      url: 'testimonials-db.php'
    });

    $(this).children().removeClass('fa-toggle-'+orgPubState).addClass('fa-toggle-'+newPubState);
    $(this).attr("title", newPubState);
  });
</script>

<?php include "footer.php"; ?>