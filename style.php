:root {
 color-scheme: dark;
 }
 
body {
font-family: "Poppins", "Montserrat", sans-serif;
line-height: 1.5rem;
}

body{
opacity: 0;
animation: fade-in 1s ease-in-out forwards;
}

@keyframes fade-in {
  0% {
    opacity: 0;
    transform: translateY(20px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

 main {
 display: grid;
 column-gap: 50px;
 place-content: center;
 padding: 2rem;
 }
 
.pointer, .contrast {
text-decoration: none;
font-size: 1.3rem;
color: white;
cursor: pointer;
}

article p{
margin-bottom: 20px;
}

.end{
margin: 20px 0 20px 0;
}

.marvelLogo{
margin: 10px;
width: 12rem;
height: 60px;
background: #EE171F;
}

.marvelContainer{
display: flex;
flex-direction: row;
justify-content:center;
}

.fans{
display: flex;
flex-direction: row;
}

.img2{
width: 500px;
}

a {
margin: 4.4% 40px 20px 40px;
}

article p {
margin: 0px 0 10px 0;
}

.pointer:hover {
color: #0a0a0a;
}

.contrast:hover {
color: #EE171F;
}

#check, .cli{
display: none;
}

.menu{
position: absolute;
background-color: #0a0a0a;
padding: 1% 0%;
top: 55%;
left: 68%;
}

.menu::before {
display: block;
 position: absolute;
 border-left: 13px solid transparent;
 border-right: 13px solid transparent;
 border-bottom: 26px solid #0a0a0a;
 left: 0px;
 top: -18px;
 content: "";
 font-size: 20px;
}

li {
list-style: none;
padding: 20px;
}

label{
margin: 20px;
position: relative;
width: 1px;
height: 1px;
}

#check:checked + .menu{
display: block;
}

 hgroup, section {
 display: flex;
 flex-direction: column;
 justify-content: center;
 }
 
.head-nav{
display: flex;
position: relative;
left: -0.5%;
top: -0.9%;
width: 101%;
flex-direction: row;
margin: 0;
padding: 0;
background-color: #EE171F;
}

.img-layer {
 width: 50%;
height: 200px;
}

main img {
box-shadow: 10px 10px 10px #222;
margin: 0 auto;
}

main h2{
text-align: center;
}

nav {
display: flex;
justify-content: right;
margin: 50px;
}

footer {
background: #0a0a0a;
width: 100%;
padding: 40px 9px 40px 0px;
text-align: center;
position: absolute;
left: -0.5%;
}

menu {
background-color: #EE171F;
position: relative;
}

@media (max-width: 420px) {
  body {
 font-size: 30px;
 }
}
