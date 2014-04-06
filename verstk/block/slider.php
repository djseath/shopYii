<div class="slidePageMain">
      <div id="sliderContainerMain">
            <div id="mySlidesMain">
             <div>
                <img src="images/1.jpg" alt="Slide 1 jFlow Plus"/>
                <div class="slideContent">
                    <p><span>Breeze Noticeables</span><br>
                     <i>The new series of natural air fresheners.</i> 
						<i>Febreze Noticeables Meadows  Rain </i>
						<i>Air Freshener Refill.</i>
                    </p>
                </div>
              </div>

             <div>
                <img src="images/1.jpg" alt="Slide 1 jFlow Plus"/>
                <div class="slideContent">
                    <p><b><span>VESTIBULUM</span></b><br>
                     <i>Maecenas tincidunt, augue et rutrum condimentum, libero lectus mattis orci, ut coффmmodo.</i>
                    </p>
                </div>
              </div>

              <div>
                <img src="images/1.jpg" alt="Slide 1 jFlow Plus"/>
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