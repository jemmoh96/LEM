<!DOCTYPE HHTML>
<?php
include_once 'header.php';
?>
<link type="text/css" rel="stylesheet" href = "css/alert.css">
<div id="dialogoverlay"></div>
<div align="center" id="dialogbox">
     <div>
	     <div id="dialogboxhead"></div>
		 <div id="dialogboxbody"></div>
		 <div id="dialogboxfoot"></div>
     </div>
</div>	 
<script type="text/javascript">
function CustomAlert() {
	this.render = function(dialog) {
		var winW = window.innerWidth;
		var winH = window.innerHeight;
		var dialogoverlay = document.getElementById('dialogoverlay');
		var dialogbox = document.getElementById('dialogbox');
		dialogoverlay.style.display = "block";
		dialogoverlay.style.height = winH+"px";
		dialogbox.style.left = (winW/2) - (550 * .5)+"px";
		dialogbox.style.top = "100px";
		dialogbox.style.display = "block";
		document.getElementById('dialogboxhead').innerHTML = "Acknowledge this message";
		document.getElementById('dialogboxbody').innerHTML = dialog;
		document.getElementById('dialogboxfoot').innerHTML = '<button onclick="Alert.ok()">OK</button>';
	}
	this.ok = function(){
		document.getElementById('dialogbox').style.display = "none";
		document.getElementById('dialogoverlay').style.display = "none";
	}
}
var Alert = new CustomAlert();
</script>
<body onLoad = "Alert.render('“Welcome to loyoness evangelical ministries and join us in regular church services held every Sunday. Come together to celebrate the goodness of Christ Jesus in the church.')">

        <section class="site-content">
            <div class="container">
                <div class="content-area">
                    <main class="site-main">
                        <div class="row">
                            <div class="abt-left">
                                <div class="index-title">
                                    <h1 class="heading">about the author</h1>
                                    <h2>Lorem ipsum dolor sit amet</h2>
                                </div>
                                <div class="abt-thumb">
                                    <img src="img/303_1.jpg">
                                </div>
                                <div class="abt-disc">
                                    <h2>author name</h2>
                                    <div class="index-content">
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.  </p>
                                    </div>
                                </div>
                                <div class="author-disc">
                                    <div class="index-content">
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="abt-right">
                                <div class="featred-disc">
                                    <h2>featured</h2>
                                    <h3>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,</h3>
                                    <div class="index-content">
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                    </div>
                                    <div class="cartegory-row">
                                        <div class="cartegory-left">
                                            <p><span>+</span>&nbsp;TECH</p>
                                        </div>
                                        <div class="cartegory-right">
                                            <p><span>+</span>&nbsp;GAMING</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </section>
        
	</body>	
      <?php
include_once 'footer.php';
?>