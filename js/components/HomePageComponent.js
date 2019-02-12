export default {
    template: `
    <div>
    <section class="video large-12 medium-12 small-12 columns" id="video">
    <div class="row yellowBox">
        <div class="videoBox large-6 medium-6 small-12 columns">
            <video src="video/Kuada_Ly_ZatzPancioli_OntarioSummer.mp4" id="promoVideo"></video>
        </div>
        <div class="onBox large-6 medium-6 small-12 align-center columns">
        <img src="images/onBox.png"><br><br>
        <router-link :to="{name:'signup'}"><button type="submit" name="subscribe" id="subscribeBtn">SUBSCRIBE</button></router-link>
        </div>
    </div>
</section>
        <section class="row" id="things">
          <div class="small-12 medium-12 large-12 columns"><img id="thingsImg" src="images/things1.jpg"></div>
          <div class="small-3 medium-3 large-3 columns" id="orange"><p>Niagra Falls</p></div>
          <div class="small-3 medium-3 large-3 columns" id="pink"><p>Royal Ontario Museum</p></div>
          <div class="small-3 medium-3 large-3 columns" id="blue"><p>Ontario's Provincial and <br>National Parks</p></div>
          <div class="small-3 medium-3 large-3 columns" id="green"><p>Canada's Wonderland</p></div>
        </section>
<section class="events large-12 medium-12 small-12 columns" id="events">
    <div class="greyBox">
      <div class="sectionTitle large-12 small-centered medium-12 small-12 columns">
      <h1>EVENTS</h1>
      </div>
        <div class="eventsBox large-4 medium-4 small-12 columns">
          <img id="smFest" src="images/smFest.jpg">
          <p class="eventTitle">SOUND OF MUSIC FESTIVAL</p>
          <p class="eventDate">June 8th - 16th</p>
          <p class="eventText">So much music, so much fun! Every year in June, music takes over Burlington Downtown and Waterfront. The largest local music event of the year features a mix of ticketed and free shows.</p>
          <a href="https://soundofmusic.ca/"><p class="seeMore"><i class="fas fa-plus-circle" style="font-size:14px;color:white"></i>SEE MORE</p></a>
        </div>
        <div class="eventsBox large-4 medium-4 small-12 columns">
          <img id="tcc" src="images/tcc.jpg">
          <p class="eventTitle">TORONTO CARIBBEAN CARNIVAL</p>
          <p class="eventDate">August 1th -4th</p>
          <p class="eventText">An exciting three-week cultural explosion of Caribbean music, cuisine and revelry. Floats, music, celebrities and more fun than ever before. Theme: “Celebrating Our Heritage: From Then to Now”.</p>
          <a href="https://torontocarnival.ca/"><p class="seeMore"><i class="fas fa-plus-circle" style="font-size:14px;color:white"></i>SEE MORE</p></a>
        </div>
        <div class="eventsBox large-4 medium-4 small-12 columns">
            <img id="kbFest" src="images/kbFest.jpg">
            <p class="eventTitle">KITCHENER BLUEFEST</p>
            <p class="eventDate">August 8th -11th</p>
            <p class="eventText">One of Canada’s biggest free Blues festivals. Four-day, multi stages in downtown Kitchener. Best of international, national and regional Blues. Workshops, arts exhibit, food and craft vendors, licensed.</p>
            <a href="https://kitchenerbluesfest.com/"><p class="seeMore"><i class="fas fa-plus-circle" style="font-size:14px;color:white"></i>SEE MORE</p></a>
        </div>
    </div>
</section>
<section class="plan large-12 medium-12 small-12 columns" id="plan">
    <div class="pinkBox">
      <div class="sectionTitlePlan large-12 small-centered medium-12 small-12 columns">
      <h1>PLAN YOUR TRIP</h1>
      </div>
        <div class="planBox large-4 medium-4 small-12 columns">
            <a href="https://www.aircanada.com/"><img id="air" src="images/air.jpg"></a>
        </div>
        <div class="planBox large-4 medium-4 small-12 columns">
            <a href="https://www.tripadvisor.ca/"><img id="trip" src="images/trip.jpg"></a>
        </div>
        <div class="planBox large-4 medium-4 small-12 columns">
            <a href="https://www.citypass.com"><img id="pass" src="images/pass.jpg"> </a>                
        </div>
    </div>
</section>
</div>
    `,

}