<div class="slidePageMain">
      <div id="sliderContainerMain">
            <div id="mySlidesMain">
             <div>
                <img src="<?=Yii::app()->theme->baseUrl;?>/images/1.jpg" alt="Slide 1 jFlow Plus"/>
                <div class="slideContent">
                    <p><span>Breeze Noticeables</span><br>
                     <i>The new series of natural air fresheners.</i> 
						<i>Febreze Noticeables Meadows  Rain </i>
						<i>Air Freshener Refill.</i>
                    </p>
                </div>
              </div>

             <div>
                <img src="<?=Yii::app()->theme->baseUrl;?>/images/1.jpg" alt="Slide 1 jFlow Plus"/>
                <div class="slideContent">
                    <p><b><span>VESTIBULUM</span></b><br>
                     <i>Maecenas tincidunt, augue et rutrum condimentum, libero lectus mattis orci, ut coффmmodo.</i>
                    </p>
                </div>
              </div>

              <div>
                <img src="<?=Yii::app()->theme->baseUrl;?>/images/1.jpg" alt="Slide 1 jFlow Plus"/>
                <div class="slideContent">
                    <p><b><span>VESTIBULUM</span></b><br>
                     <i>Maecenas tincidunt, augue et rutrum condimentum, libero lectus mattis orci, ut coффmmodo.</i>
                    </p>
                </div>
              </div>
              
            <div></div>
            </div><!-- mySlidesMain-->
            <div id="myControllerMain">
                <span class="jFlowControlMain"></span> 
                <span class="jFlowControlMain"></span>
                <span class="jFlowControlMain"></span>
            </div>

            <div class="jFlowPrevMain"></div>
            <div class="jFlowNextMain"></div>
        </div><!-- #sliderContainerMain-->
</div>










<script type="text/javascript">
            $(function () {
              var w = "992px";
      
                $("#myControllerMain").jFlow({
                    controller: ".jFlowControlMain", // must be class, use . sign
                    slideWrapper: "#jFlowSliderMain", // must be id, use # sign
                    slides: "#mySlidesMain",  // the div where all your sliding divs are nested in
                    selectedWrapper: "jFlowSelectedMain",  // just pure text, no sign
                    effect: "rewind", //this is the slide effect (rewind or flow)
                    width: w,  // this is the width for the content-slider
                    height: "480px",  // this is the height for the content-slider
                    duration: 700,  // time in milliseconds to transition one slide
                    pause: 50000, //time between transitions
                    prev: ".jFlowPrevMain", // must be class, use . sign
                    next: ".jFlowNextMain", // must be class, use . sign
                    auto: true
                });
            });


            $(function () {
                $("#contr1").jFlow({
                    controller: ".var1", // must be class, use . sign
                    slideWrapper: "#jFlowSliderSmallBlocksSlider", // must be id, use # sign
                    slides: "#SmS1",  // the div where all your sliding divs are nested in
                    selectedWrapper: "jFlowSelectedSmallBlocksSlider",  // just pure text, no sign
                    effect: "rewind", //this is the slide effect (rewind or flow)
                    width:  "100%",  // this is the width for the content-slider
                    height: "350px",  // this is the height for the content-slider
                    duration: 400,  // time in milliseconds to transition one slide
                    pause: 500000, //time between transitions
                    prev: ".jPrev1", // must be class, use . sign
                    next: ".jNext1", // must be class, use . sign
                    auto: true
                });
            });





            $(function () {
                $("#contr2").jFlow({
                    controller: ".var2", // must be class, use . sign
                    slideWrapper: "#jFlowSliderSmallBlocksSlider2", // must be id, use # sign
                    slides: "#SmS2",  // the div where all your sliding divs are nested in
                    selectedWrapper: "jFlowSelectedSmallBlocksSlider2",  // just pure text, no sign
                    effect: "rewind", //this is the slide effect (rewind or flow)
                    width:  "100%",  // this is the width for the content-slider
                    height: "350px",  // this is the height for the content-slider
                    duration: 400,  // time in milliseconds to transition one slide
                    pause: 500000, //time between transitions
                    prev: ".jPrev2", // must be class, use . sign
                    next: ".jNext2", // must be class, use . sign
                    auto: true
                });
            });
</script>



















<div class="center  blocksInfo">
	<div class="col-1-3">
		<img src="<?=Yii::app()->theme->baseUrl;?>/files/inf1.png"><a href="#">Best price<span>this week</span></a>
	</div>

	<div class="col-1-3">
		<img src="<?=Yii::app()->theme->baseUrl;?>/files/inf2.png"><a href="#">New smells<span>in the next series</span></a>
	</div>

	<div class="col-1-3 last">
		<img src="<?=Yii::app()->theme->baseUrl;?>/files/inf3.png"><a href="#">Only natural<span>air fresheners</span></a>
	</div>
</div>



<div class="SmSlid">
  <div class="center">  
  <h1 class="blockTitle">Best Sellers</h1>
      <div id="sC" class="Small">
            <div id="SmS1">
              <div class="prod-4">
				  <div><img src="<?=Yii::app()->theme->baseUrl;?>/files/p1.jpg"><a href="#">Febreze Air Effects New Zealand Springs</a><strike>$499.00</strike><span>$330.00</span><a href="#" class="compare"></a><a href="#" class="wishlist"></a><a href="#" class="cart"></a></div>
				  <div class="prod sale"><img src="<?=Yii::app()->theme->baseUrl;?>/files/p2.jpg"><a href="#">Febreze Noticeables 2 Refills</a><span>$330.00</span><a href="#" class="compare"></a><a href="#" class="wishlist"></a><a href="#" class="cart"></a></div>
				  <div><img src="<?=Yii::app()->theme->baseUrl;?>/files/p3.jpg"><a href="#">Beanpod Candles Orange Vanilla, Tea Light</a>    <span>$330.00</span>    <a href="#" class="compare"></a>    <a href="#" class="wishlist"></a>    <a href="#" class="cart"></a></div>
				  <div><img src="<?=Yii::app()->theme->baseUrl;?>/files/p4.jpg"><a href="#">Linen & Sky Air Freshener Refill</a><span>$330.00</span>  <a href="#" class="compare"></a>  <a href="#" class="wishlist"></a>  <a href="#" class="cart"></a></div>
              </div>
              <div class="prod-4">
				  <div><img src="<?=Yii::app()->theme->baseUrl;?>/files/p1.jpg"><a href="#">Febreze Air Effects New Zealand Springs</a><strike>$499.00</strike><span>$330.00</span><a href="#" class="compare"></a><a href="#" class="wishlist"></a><a href="#" class="cart"></a></div>
				  <div ><img src="<?=Yii::app()->theme->baseUrl;?>/files/p2.jpg"><a href="#">Febreze Noticeables 2 Refills</a><span>$330.00</span><a href="#" class="compare"></a><a href="#" class="wishlist"></a><a href="#" class="cart"></a></div>
				  <div><img src="<?=Yii::app()->theme->baseUrl;?>/files/p3.jpg"><a href="#">Beanpod Candles Orange Vanilla, Tea Light</a>    <span>$330.00</span>    <a href="#" class="compare"></a>    <a href="#" class="wishlist"></a>    <a href="#" class="cart"></a></div>
				  <div><img src="<?=Yii::app()->theme->baseUrl;?>/files/p4.jpg"><a href="#">Linen & Sky Air Freshener Refill</a><span>$330.00</span>  <a href="#" class="compare"></a>  <a href="#" class="wishlist"></a>  <a href="#" class="cart"></a></div>
              </div>
             <div class="prod-4">
				  <div><img src="<?=Yii::app()->theme->baseUrl;?>/files/p1.jpg"><a href="#">Febreze Air Effects New Zealand Springs</a><strike>$499.00</strike><span>$330.00</span><a href="#" class="compare"></a><a href="#" class="wishlist"></a><a href="#" class="cart"></a></div>
				  <div><img src="<?=Yii::app()->theme->baseUrl;?>/files/p2.jpg"><a href="#">Febreze Noticeables 2 Refills</a><span>$330.00</span><a href="#" class="compare"></a><a href="#" class="wishlist"></a><a href="#" class="cart"></a></div>
				  <div><img src="<?=Yii::app()->theme->baseUrl;?>/files/p3.jpg"><a href="#">Beanpod Candles Orange Vanilla, Tea Light</a>    <span>$330.00</span>    <a href="#" class="compare"></a>    <a href="#" class="wishlist"></a>    <a href="#" class="cart"></a></div>
				  <div><img src="<?=Yii::app()->theme->baseUrl;?>/files/p4.jpg"><a href="#">Linen & Sky Air Freshener Refill</a><span>$330.00</span>  <a href="#" class="compare"></a>  <a href="#" class="wishlist"></a>  <a href="#" class="cart"></a></div>
              </div>
                
              <div></div>
            </div>
            <div id="contr1">
                <span class="jcontr var1"></span> 
                <span class="jcontr var1"></span> 
                <span class="jcontr var1"></span>
            </div>
            <div class="jPrev jPrev1"></div>
            <div class="jNext jNext1"></div>
        </div>

  </div>
</div>







<div class="SmSlid">
  <div class="center">  
  <h1 class="blockTitle">Featured Products</h1>
      <div id="sC" class="Small">
            <div id="SmS2">
              <div class="prod-4">
				  <div><img src="<?=Yii::app()->theme->baseUrl;?>/files/p1.jpg"><a href="#">Febreze Air Effects New Zealand Springs</a><strike>$499.00</strike><span>$330.00</span><a href="#" class="compare"></a><a href="#" class="wishlist"></a><a href="#" class="cart"></a></div>
				  <div class="prod sale"><img src="<?=Yii::app()->theme->baseUrl;?>/files/p2.jpg"><a href="#">Febreze Noticeables 2 Refills</a><span>$330.00</span><a href="#" class="compare"></a><a href="#" class="wishlist"></a><a href="#" class="cart"></a></div>
				  <div><img src="<?=Yii::app()->theme->baseUrl;?>/files/p3.jpg"><a href="#">Beanpod Candles Orange Vanilla, Tea Light</a>    <span>$330.00</span>    <a href="#" class="compare"></a>    <a href="#" class="wishlist"></a>    <a href="#" class="cart"></a></div>
				  <div><img src="<?=Yii::app()->theme->baseUrl;?>/files/p4.jpg"><a href="#">Linen & Sky Air Freshener Refill</a><span>$330.00</span>  <a href="#" class="compare"></a>  <a href="#" class="wishlist"></a>  <a href="#" class="cart"></a></div>
              </div>
              <div class="prod-4">
				  <div><img src="<?=Yii::app()->theme->baseUrl;?>/files/p1.jpg"><a href="#">Febreze Air Effects New Zealand Springs</a><strike>$499.00</strike><span>$330.00</span><a href="#" class="compare"></a><a href="#" class="wishlist"></a><a href="#" class="cart"></a></div>
				  <div class="prod sale"><img src="<?=Yii::app()->theme->baseUrl;?>/files/p2.jpg"><a href="#">Febreze Noticeables 2 Refills</a><span>$330.00</span><a href="#" class="compare"></a><a href="#" class="wishlist"></a><a href="#" class="cart"></a></div>
				  <div><img src="<?=Yii::app()->theme->baseUrl;?>/files/p3.jpg"><a href="#">Beanpod Candles Orange Vanilla, Tea Light</a>    <span>$330.00</span>    <a href="#" class="compare"></a>    <a href="#" class="wishlist"></a>    <a href="#" class="cart"></a></div>
				  <div><img src="<?=Yii::app()->theme->baseUrl;?>/files/p4.jpg"><a href="#">Linen & Sky Air Freshener Refill</a><span>$330.00</span>  <a href="#" class="compare"></a>  <a href="#" class="wishlist"></a>  <a href="#" class="cart"></a></div>
              </div>
             <div class="prod-4">
				  <div><img src="<?=Yii::app()->theme->baseUrl;?>/files/p1.jpg"><a href="#">Febreze Air Effects New Zealand Springs</a><strike>$499.00</strike><span>$330.00</span><a href="#" class="compare"></a><a href="#" class="wishlist"></a><a href="#" class="cart"></a></div>
				  <div><img src="<?=Yii::app()->theme->baseUrl;?>/files/p2.jpg"><a href="#">Febreze Noticeables 2 Refills</a><span>$330.00</span><a href="#" class="compare"></a><a href="#" class="wishlist"></a><a href="#" class="cart"></a></div>
				  <div><img src="<?=Yii::app()->theme->baseUrl;?>/files/p3.jpg"><a href="#">Beanpod Candles Orange Vanilla, Tea Light</a>    <span>$330.00</span>    <a href="#" class="compare"></a>    <a href="#" class="wishlist"></a>    <a href="#" class="cart"></a></div>
				  <div><img src="<?=Yii::app()->theme->baseUrl;?>/files/p4.jpg"><a href="#">Linen & Sky Air Freshener Refill</a><span>$330.00</span>  <a href="#" class="compare"></a>  <a href="#" class="wishlist"></a>  <a href="#" class="cart"></a></div>
              </div>
                
              <div></div>
            </div>
            <div id="contr2">
                <span class="jcontr var2"></span> 
                <span class="jcontr var2"></span> 
                <span class="jcontr var2"></span>
            </div>
            <div class="jPrev jPrev2"></div>
            <div class="jNext jNext2"></div>
        </div>
  
  </div>
</div>






























<div class="center blocks">
	<div class="col-1-3">
		<h5>About Us</h5>
		<p>Lorem ipsum, libero et luctus molestie, turpis mi sagittis nisl, a scelerisque leo nulla et lectus pendisse dictum posuere elit, in congue nisl varius quis lentesque a tellus eget quam varius aliquet. </p>
		<p>Pellentesque tristique, libero et luctus molestie, turpis mi sagittis nisl, a scelerisque leo nulla et lectus pendisse dictum posuere elit, in congue nisl varius quis lentesque a tellus eget quam varius aliquet.</p>
		<p>Vel lobortis gravida. Cursus in dapibus ultrices velit fusce. Felis lacus erat. </p>
	</div>

	<div class="col-1-3">
		<h5>News</h5>
		<p><i>3 january 2012</i><br>
		<a href="#">Fermentum parturient lacus tristique habitant nullam morbi et odio </a></p>
		<p><i>2 january 2012</i><br>
		<a href="#">Cras ac hendrerit dui. Duis lacus ligula, luctus ac tristique eget, posuere id erat.</a></p>
		<p><i>1 january 2012</i><br>
		<a href="#">Lorem ipsum, libero et luctus molestie, turpis mi sagittis nisl, a scelerisque leo nulla et lectus pendisse dictum posuere </a></p>
	</div>

	<div class="col-1-3 last">
		<h5>Newsletter</h5>
		<p>Cursus in dapibus ultrices velit fusce. Felis lacus erat. Fermentum parturient lacus tristique habitant nullam morbi et odio nibh mus dictum tellus erat.</p>
		<form id="mailInd">
		 <input type="text" placeholder="Enter your email address...">
		 <input type="submit" value=">" id="">
		 </form>
		<p class="mail">Vel lobortis gravida. Cursus in dapibus ultrices velit fusce. Felis<br> lacus erat. </p>
	</div>
</div>