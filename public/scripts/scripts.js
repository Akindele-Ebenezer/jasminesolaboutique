let Form = document.querySelectorAll("form"); 

for (let i = 0; i < Form.length; i++) {
    Form[i].addEventListener("click", () => {

        if (Form[i].id === "BookNowForm") {
            Form[i].addEventListener("click", event => event.preventDefault());
        } else {
            Form[i].submit();                    
        }

    });  
        
    Form[i].addEventListener("mouseover", () => {     
        Form[i].classList.toggle("Form-Hover-Effect");      
    });  
    
    Form[i].addEventListener("mouseout", () => {     
        Form[i].classList.remove("Form-Hover-Effect");      
    });  
} 

let NavSmScreen = document.querySelector(".nav-sm-screen");
let NavSmScreenLinks = document.querySelectorAll(".nav-sm-screen ul li a"); 
let MenuIcon = document.querySelector(".header-sm-screen div:last-child");
let MenuX = document.querySelector(".nav-sm-screen p");

    for (let i = 0; i < NavSmScreenLinks.length; i++) {
        NavSmScreenLinks[i].addEventListener("click", () =>  {
            NavSmScreen.classList.remove("Toggle"); 
            MenuIcon.style.visibility = "visible"; 
        });
    } 

    MenuIcon.addEventListener("click", () => {
        NavSmScreen.classList.toggle("Toggle");
        MenuIcon.style.visibility = "hidden";
    });
    
    MenuX.addEventListener("click", () => {
        NavSmScreen.classList.remove("Toggle");
        MenuIcon.style.visibility = "visible";
    }); 
    
let BookNowForm = document.getElementById("BookNowForm");
                    
BookNowForm.style.cursor = "unset";                            
    
let BookNowFormButton = document.querySelector('#BookNowForm button');

    BookNowFormButton.addEventListener("click", () => {
        BookNowForm.submit();
    });