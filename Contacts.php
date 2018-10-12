<!DOCTYPE HHTML>
<?php
include_once 'header.php';
include_once 'connection.php';
?>
            <section class="site-content">
                <div class="container">
                    <div class="content-area">
                        <main class="site-main">
                            <article class="posts-list">
                                <div class="entry-header">
                                 <h1 class="entry-title">ADD NEW POST</h1>
                             </div> 
                             <div class="entry-disc">
                                        <p>INQUIRIES

If you still can't find the excact location of our ministries, you've just landed on the right place. Here you can contact our team for further inquiries.  
                             </div> 
							</article>
										<div class="row">
										<div class="entry-header">
                                 <h1 class="entry-title" align="center">FOR ANY INQUIRIES</h1>
                             </div>
                            <div align="center" class="abt-left">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.763085049465!2d36.79755811451279!3d-1.3177872360324516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f106640d82b85%3A0x4e63d31efb401f68!2sUndugu+Ground!5e0!3m2!1sen!2ske!4v1470747802595" width="400" height="300" frameborder="0" style="border:0" allowfullscreen> <br />
										</iframe>
										</div>
                            <div class="abt-right">
                                <div class="featred-disc">
                                    <div class="index-content">
                                        <p><h2><u>CONTACTS</u></h2>
										<b>P.O.BOX 101996-00200,<br />
										JUMIA HOUSE,<br />
										NAIROBI-KENYA.<br />
										TEL:(0)725-473-815 (254)724-336-665<br />
										Email: kulola2001@yahoo.com</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
										</p>
                            <article class="posts-list">
                                <div class="entry-header">
                                 <h1 class="entry-title">QUICK INQUIRY</h1><!--kulola2001@yahoo.com-->
                             </div>
                                <form name="contacts" action="mail.php" method="POST" style="text-transform:lowercase">
                                    <input type="text" name="name" placeholder="Your Full name">
                                    <input type="text" name="E-mail" placeholder="Your E-mail Address">
                                    <textarea class="inputbox" name="message" id="message" placeholder="Short Message"></textarea>
                                    <div class="btn">
                                        <a class="bttn" onclick="backgrond: #00f28f;" href="https://mail.joanshisha@gmail.com">
                                            send
                                        </a>
                                    </div>
                                </form>
                            </article>
                        </main>
                    </div>
                </div>
            </section>

<?php
include_once 'footer.php';
?>