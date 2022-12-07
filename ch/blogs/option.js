function li_ContactUs() {
    const divBlocked = document.querySelector("#blockedPage");
    divBlocked.style.display = "block";
 }
 
 function li_ContactUsClose() {
    const divBlocked = document.querySelector("#blockedPage");
    divBlocked.style.display = "none";
 }
 
 // Change Log in User => Register Main
 function changeToLogin() {
    let myformMain = document.querySelector("#fromLogs");
    myformMain.innerHTML = 
    `
    
                <input type="text" name="mail" placeholder="E-mail" class="input_formLableWeb" style=" background : url('atlas/icon/email.png') no-repeat scroll 10em; background-size: 10%; background-color: #fff;"> <br>
                <input type="password" name="pwd" placeholder="Password" class="input_formLableWeb " style=" background : url('atlas/icon/lock.png') no-repeat scroll 10em; background-size: 10%; background-color: #fff;"> <br>
 
                <input type="submit" name="btn_login" value="Log in" class="btn_a" style="background: none; border: 1px solid #ffffff;"> 
 
                <br>
                <br>
           
                   <p style="   cursor: pointer; text-decoration: underline 0.1px #fff; color: #ffffff; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" onclick="changeToRej();"> Do you Not have an account?</p>
                
    `;
 }
 
 function changeToRej() {
    let myformMain = document.querySelector("#fromLogs");
    myformMain.innerHTML = 
    `
    <input type="text" name="user" placeholder="Username" class="input_formLableWeb" style=" background : url('atlas/icon/user.png') no-repeat scroll 10em; background-size: 10%; background-color: #fff;"> <br>
                <input type="text" name="mail" placeholder="E-mail" class="input_formLableWeb" style=" background : url('atlas/icon/email.png') no-repeat scroll 10em; background-size: 10%; background-color: #fff;"> <br>
                <input type="password" name="pwd" placeholder="Password" class="input_formLableWeb " style=" background : url('atlas/icon/lock.png') no-repeat scroll 10em; background-size: 10%; background-color: #fff;"> <br>
 
                <input type="submit" name="btn_sublabeweb"  class="btn_a" style="background: none; border: 1px solid #ffffff;"> 
 
                <br>
                <br>
           
                   <p style="   cursor: pointer;  text-decoration: underline 0.1px #fff; color: #ffffff; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" onclick="changeToLogin();"> Do you already have an account?</p>
                
    `;
 }
 
 
 
 function logoutme() {
    
    x =  document.querySelector("#choix").options.selectedIndex;
    if (x == 1) {location.href = "../../data/logout.php"; }
    if (x == 2) {location.href = "../../console/index.php"; }
    if (x == 3) {location.href = "../../console/uploadata.php"; }
    if (x == 4) {location.href = "../../console/animeabout.php"; }
    if (x == 5) {location.href = "../../console/shareanime.php"; }
    if (x == 6) {location.href = "../../console/mailbox.php"; }
    if (x == 7) {location.href = "../../console/key.php"; }
    };