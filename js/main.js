import homePageComponent from './components/HomePageComponent.js';
import signUpComponent from './components/signUpComponent.js';   

const routes = [
    { path: "/", name: "homepage", component: homePageComponent },
    { path: "/signup", name: "signup", component: signUpComponent }
];

const router = new VueRouter({

    routes

});

const vm = new Vue({

    router: router
    
}).$mount("#app");

//gallery

var image = document.querySelector('#thingsImg'),
    orange = document.querySelector('#orange'),
    pink = document.querySelector('#pink'),
    blue = document.querySelector('#blue'),
    green = document.querySelector('#green');

function changeImage(){
        image.src = "images/things1.jpg";
}

function changeImage2(){
    image.src = "images/things2.jpg";
}

function changeImage3(){
    image.src = "images/things3.jpg";
}

function changeImage4(){
image.src = "images/things4.jpg";
}

orange.addEventListener("click", changeImage, false);
pink.addEventListener("click", changeImage2, false);
blue.addEventListener("click", changeImage3, false);
green.addEventListener("click", changeImage4, false);

//player

let player = document.querySelector('#promoVideo');

function playVideo() { 
player.play();
} 


player.addEventListener("click", playVideo, false);