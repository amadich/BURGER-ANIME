


function aboutopenConan() {
   x = document.getElementsByClassName("aboutBox")[0].style.display = "block";
   document.addEventListener('mousemove', function(e) {
      let body = document.querySelector('body');
      let circle = document.getElementsByClassName("aboutBox")[0];
      let left = e.offsetX+100;
      let top = e.offsetY+600;
      document.getElementsByClassName("aboutBox")[0].style.left = left + 'px';
      document.getElementsByClassName("aboutBox")[0].style.top = top + 'px';
    });


    document.getElementsByClassName("aboutBox")[0].innerHTML =  `
    <label class="labelDiscription">
          <b style="color: purple;">Detective Conan</b>
          <br>
          <span class="DiscriptionAboutBox1">
             Detective Conan ipsum dolor sit, amet consectetur adipisicing elit. Omnis voluptates porro aliquam voluptas quod tempora odit nesciunt. Distinctio nihil non odio rem .
          </span> <br>
    </label>
    `;

}


function aboutcloseConan() {
   y = document.getElementsByClassName("aboutBox")[0].style.display = "none";
}


// # Demon slayer



function aboutopenDemonSlayer() {
   x = document.getElementsByClassName("aboutBox")[0].style.display = "block";
   document.addEventListener('mousemove', function(e) {
      let body = document.querySelector('body');
      let circle = document.getElementsByClassName("aboutBox")[0];
      let left = e.offsetX+100;
      let top = e.offsetY+600;
      document.getElementsByClassName("aboutBox")[0].style.left = left + 'px';
      document.getElementsByClassName("aboutBox")[0].style.top = top + 'px';
    });


    document.getElementsByClassName("aboutBox")[0].innerHTML =  `
    <label class="labelDiscription">
          <b style="color: purple;">Demon Slayer</b>
          <br>
          <span class="DiscriptionAboutBox1">
             Demon Slayer Conan ipsum dolor sit, amet consectetur adipisicing elit. Omnis voluptates porro aliquam voluptas quod tempora odit nesciunt. Distinctio nihil non odio rem .
          </span> <br>
    </label>
    `;

}


function aboutcloseDemonSlayer() {
   y = document.getElementsByClassName("aboutBox")[0].style.display = "none";
}



// # Attack of titan


function aboutopenattackoftitan() {
   x = document.getElementsByClassName("aboutBox")[0].style.display = "block";
   document.addEventListener('mousemove', function(e) {
      let body = document.querySelector('body');
      let circle = document.getElementsByClassName("aboutBox")[0];
      let left = e.offsetX+100;
      let top = e.offsetY+600;
      document.getElementsByClassName("aboutBox")[0].style.left = left + 'px';
      document.getElementsByClassName("aboutBox")[0].style.top = top + 'px';
    });


    document.getElementsByClassName("aboutBox")[0].innerHTML =  `
    <label class="labelDiscription">
          <b style="color: brown;">Attack on Titan</b>
          <br>
          <span class="DiscriptionAboutBox1">
             Attack on Titan Conan ipsum dolor sit, amet consectetur adipisicing elit. Omnis voluptates porro aliquam voluptas quod tempora odit nesciunt. Distinctio nihil non odio rem .
          </span> <br>
    </label>
    `;

}


function aboutcloseattackoftitan() {
   y = document.getElementsByClassName("aboutBox")[0].style.display = "none";
}



// # Jijutsu Kaisin

function aboutopenJijutsu() {
   x = document.getElementsByClassName("aboutBox")[0].style.display = "block";
   document.addEventListener('mousemove', function(e) {
      let body = document.querySelector('body');
      let circle = document.getElementsByClassName("aboutBox")[0];
      let left = e.offsetX+100;
      let top = e.offsetY+600;
      document.getElementsByClassName("aboutBox")[0].style.left = left + 'px';
      document.getElementsByClassName("aboutBox")[0].style.top = top + 'px';
    });


    document.getElementsByClassName("aboutBox")[0].innerHTML =  `
    <label class="labelDiscription">
          <b style="color: orangered;">Jujutsu Kaisen</b>
          <br>
          <span class="DiscriptionAboutBox1">
             Jujutsu Kaisen Conan ipsum dolor sit, amet consectetur adipisicing elit. Omnis voluptates porro aliquam voluptas quod tempora odit nesciunt. Distinctio nihil non odio rem .
          </span> <br>
    </label>
    `;

}


function aboutcloseJijutsu() {
   y = document.getElementsByClassName("aboutBox")[0].style.display = "none";
}
