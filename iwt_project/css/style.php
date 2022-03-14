<style type="text/css">
 



.container {
  z-index: 1;
  width: 70%;
  margin: 0 auto;
    border-radius: 24px;
    background: #F6F5F0;
    padding: 2%;
    box-shadow: 0px 10px 6px -8px rgba(0,0,0,0.75);
}
.board {
    column-count: 3;
    column-gap: 1rem;
}
.container h2 {
    margin: 0 0 30px;
    text-align: center;
}
img#flag {
    height: 20px;
    width: 20px;
}
.card {
    width: 84%;
    background: #ccc;
    padding: 8%;
    margin-bottom: 20px;
    border-radius: 6px;
    color: #fff;
}
.card.a {
    background: #41a7ff;
}
.card.cr {
    background: #ff3434;
}
.card.r {
    background: #32b336;
}
.card.ca {
    background: #d83f3f;
}
.card.d {
    background: #ff0053;
}
.card.t {
    background: #ffa501;
}
.card h5 {
    margin: 0;
    font-size: 1rem;
}
.card span {
    font-size: 3rem;
    font-weight: 700;
    letter-spacing: 4px;
}
.card i {
    font-size: 3rem;
}


@media screen and (max-width: 768px){
  .board {
    column-count: 2;
  }
  .card span {
    font-size: 2.5rem;
  }
}
@media screen and (max-width: 500px){
  .board {
    column-count: 1;
  }
}




html{
    scroll-behavior:smooth;
}


    *{
        background-color: ass;
        margin:0%;
        padding: 0%;
        box-sizing:border-box;
        font-family: 'Mulish', sans-serif;
    }

    .nav_style{
      
      background-color: #a29bfe!important;

    }

.nav_style a{
    color:white;
}

/* main header start */

.main_header{
    height: 450px;
    width: 100%;
}

.rightside h1{
    font-size:5rem;
}

.corona_rot{
    animation: gocorona 3s linear infinite;
}

@keyframes gocorona{
    0% {transform: rotate(0);}
    100% {transform: rotate(360deg);}
    
}


/* corona update  */

.corona_update{
    margin: 0 0 30px 0;
}

.corona_update h3{
    color: #ff7675;
}
.corona_update h1{font-size: 2rem; text-align:center; }

}


/* about section */

.sub_section{
    background-color:lightgray;
}

/* top-cursor */



/* footer */
.footer_style{

background-color: #a29bfe;

}

.footer_style p{
  margin-bottom: 0!important;

}





</style>
