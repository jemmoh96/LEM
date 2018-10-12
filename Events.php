<!DOCTYPE HHTML>
<?php
include_once 'header.php';
?>
        <section class="site-content">
            <div class="container">
                <div class="content-area">
                    <main class="site-main">
                         <article class="posts-list">
                             <div class="single-thumb">
                                 <img src="img/305_1.jpg">
                             </div>
                             <div class="entry-header">
                                 <h1 class="entry-title">the first title</h1>
                             </div> 
                             <div class="entry-disc">
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,.
                                        </p>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata .</p>
                                    </div>
                        </article>
                        <div class="comments-area">
                            <div class="comment-respond">
                                <h3>Leave a comment</h3>
                                <form name="comments" action="feedback.php" method="POST">
								<input type="text" name="C_name" placeholder="Enter your name" required="" />
                                      <textarea type="text" name="feedback" placeholder="Comments" required=""></textarea>
                                        <div class="btn">
                                        <input type="submit" class="bttn" name="save" value="submit">
                                    </div>
                                </form>
                            </div>
                        </div>
						 <article class="posts-list">
						 <div class="comments-area">
                            <div class="comment-respond">
							<div><b><u>COMMENTS</u></b><div>
						 <?php
		 include_once 'connection.php';
					$sql_0 = "SELECT C_name, feedback, post_date FROM comments";
					$result = $conn->query($sql_0);

					if ($result->num_rows > 0) {
					// output data of each row
					// Printing the posted data
					while($row = $result->fetch_assoc()) {
					
						echo '<div style="margin-top:2em">'.$row["C_name"].'<span style="margin-left:5em">'.$row["post_date"].'<br />'.$row["feedback"].'</span>'.'</div>';

						}
					} else {
					echo "0 results";
					}
					$conn->close();
?>
</div></div>
   </article>
                    </main>
                </div>
            </div>
        </section>
          <?php
include_once 'footer.php';
?>
		