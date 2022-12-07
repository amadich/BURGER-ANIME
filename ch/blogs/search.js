
const api = "search.json";

async function get_information() {
   const response = await fetch(api);
   const data = await response.json();
   
   //console.log(Object.values(data).map(character => character.name));
   //console.log(data[0].img);
   //console.log(data.length)
   invite_api(data);
}

function invite_api(data) {
   let setinput = document.getElementsByClassName("searchelm")[0];
   const header = document.querySelector("#ul2");
  // console.log(data);
   //console.log(Object.values(data).map(char => char.url));
   //header.innerHTML += `

   //${Object.values(data).map(char => `<li> <span class="user_an">  ${char.name} </span>  <div class="boxlm" style="background-image: url(./atlas/uploads/${char.img})"></div> </li>`)}

   //`;


   setinput.addEventListener("input" , e=>{
      if (setinput.value != "") {
         document.getElementsByClassName("content")[0].style.display = "block";
         header.innerHTML = recherche(setinput.value,data);
         //console.log("1");
      }
      else {
         document.getElementsByClassName("content")[0].style.display = "none";
      }
   });

   //console.log(header);
}



function recherche(setinput,data) {
   //console.log(data);
   let res = '';
   for(let i = 0 ; i < data.length ; i++) {
      for(let j = 0 ; j<= setinput.length ; j++) {
         if ( (data[i].name.charAt(j).toLowerCase() == setinput.charAt(j).toLowerCase())) {
            res +=  `<a href="./anime/${data[i].folder}/about"><li> <span class="user_an">  ${data[i].name} </span>  <div class="boxlm" style="background-image: url(./atlas/uploads/${data[i].img})"></div> </li> </a>`;
         }

         else if (data[i].name == setinput ) {
             res =  `<a href="../../anime/${data[i].folder}/about"> <li> <span class="user_an">  ${data[i].name} </span>  <div class="boxlm" style="background-image: url(../../atlas/uploads/${data[i].img})"></div> </li> </a>`;
         }

      }

   }
   //console.log(res);
   return res;

}



async function ichange(eps) {
   const response = await fetch(api);
   const data = await response.json();
   //console.log(data.length);
   const elem =  document.querySelector("#element");


   


   for(let i = 0 ; i<data.length ; i++) {
      if (data[i].eps == eps) {
         // <br><video src="${data[i].url}" width = "100%" controls>
         elem.innerHTML = 
         `
            <br>
            <iframe src="${data[i].url}" width="100%" height="100%"></iframe>
            <a href="${data[i].url}" target="_blank"> Watch In Full Screen </a>
         `;
      }
   }

}

get_information();
