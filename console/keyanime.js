

async function get_information() {
   const response = await fetch(api);
   const data = await response.json();
   
   //console.log(Object.values(data).map(character => character.url));
   invite_api(data);
}

function invite_api(data) {
   const header = document.querySelector("#container");
  // console.log(data);
   //console.log(Object.values(data).map(char => char.url));
   header.innerHTML += 
   `
      <select class="form-select" aria-label="Default select example" onchange='ichange(this.value)'>
            <option> Select  Episode ... </option>
         ${Object.values(data).map(char => `<option>  ${char.eps}  </option>`)}
      </select>

     

   `;
   //console.log(header);
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