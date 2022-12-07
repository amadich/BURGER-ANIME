
function buy1() {
    let b1 = document.getElementsByClassName("box1")[0];
    let b2 = document.getElementsByClassName("box1")[1];
    let b3 = document.getElementsByClassName("box1")[2];
    //let btn1 = document.getElementsByTagName("button")[0].innerHTML = "Wait  ... 🌍️";
    let btn = document.getElementsByClassName("btn_buy")[0].value = "Wait  ... 🌍️";
    document.getElementsByClassName("btn_buy")[0].style.color = "white";
    //b1.style.textAlign = "center";
    b2.style.display = "none";
    b3.style.display = "none";
    setTimeout(() => {
        document.getElementById("myForm").submit();
        //location.href = "";
    }, 3000);
}

function buy2() {
    let b1 = document.getElementsByClassName("box1")[0];
    let b2 = document.getElementsByClassName("box1")[1];
    let b3 = document.getElementsByClassName("box1")[2];
    //let btn = document.getElementsByTagName("button")[1].innerHTML = "Wait  ... 🌍️";
    let btn = document.getElementsByClassName("btn_buy")[1].value = "Wait  ... 🌍️";
    document.getElementsByClassName("btn_buy")[1].style.color = "white";
    //document.getElementsByTagName("button")[1].style.color = "white";
    //b1.style.textAlign = "center";
    b1.style.display = "none";
    b3.style.display = "none";
    setTimeout(() => {
        document.getElementById("myForm").submit();
        //location.href = "";
    }, 3000);
}

function buy3() {
    let b1 = document.getElementsByClassName("box1")[0];
    let b2 = document.getElementsByClassName("box1")[1];
    let b3 = document.getElementsByClassName("box1")[2];
    //let btn = document.getElementsByTagName("button")[2].innerHTML = "Wait  ... 🌍️";
    let btn = document.getElementsByClassName("btn_buy")[3].value = "Wait  ... 🌍️";
    document.getElementsByClassName("btn_buy")[3].style.color = "white";
    //document.getElementsByTagName("button")[2].style.color = "white";
    //b1.style.textAlign = "center";
    b1.style.display = "none";
    b2.style.display = "none";
    setTimeout(() => {
        document.getElementById("myForm").submit();
        //location.href = "";
    }, 3000);
}