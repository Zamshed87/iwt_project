<!DOCTYPE html>
<html>
<head>

    <title></title>
     <!-- linking the link.php file with index.php -->
     <?php include 'link/links.php'; ?>
     <?php include 'css/style.php'; ?>
</head>


<body>
    <!-- including navbar code from  navbar/getbootstrap4 -->
    <nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5 " href="#">COVID-19</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <!-- collapse for mobile -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">about</a>
      </li>
 
      <li class="nav-item">
        <a class="nav-link" href="#">symptomps</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">prevention</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">contact</a>
      </li>

    </ul>

<!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->


  </div>
</nav>
<!-- navbar done -->
<!-- header start   d-flex justify-content-around align-items-center -->

<div class="main_header mt-5">

<div class="row w-100 h-100">
    <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
        <div class="leftside w-100 h-100 d-flex jusify-content-around align-items-center ml-5">
            <img src="images/eksath.png" alt="" width="300" height="300">
        </div>
    </div>


    <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
        <div class="rightside w-100 h-100 d-flex jusify-content-around align-items-center">
            <h1>Let's Stay Safe from cor<span class="corona_rot"> <img src="images/corona1.jpg" alt="" width="75" height="75"> </span>na</h1>
        </div>
    </div>
  

</div>

</div>
<!-- header end -->











/*

<!-- corona latest update -->

<section class="corona_update">
    <div class="mt-5">

   <h3 class="text-uppercase text-center">Covid-19 update Bangladesh</h3>

    </div>


    <div class="d-flex justify-content-around align-items-center ">
        <div>
             <h1 class="count">12,324</h1>
             <p>Total Test</p>
        </div>
        <div>
             <h1 class="count">233</h1>
             <p>Affected Covid-19</p>
        </div>
        <div>
             <h1 class="count">1417</h1>
             <p>Cured</p>
        </div>
        <div>
             <h1 class="count">3</h1>
             <p>Death</p>
        </div>
    </div>


</section>







<!-- about section -->
<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
<div class="section_header text-center mb-5 mt-4">

<h1> About Covid-19 </h1>
  
</div>

<div class="row pt-5">
 <div class="col-lg-5 col-md-6 col-12 ml-5">

  <img src="images/corona.jpg" alt="" class="img-fluid">
 </div>

 <div class="col-lg-6 col-md-6 col-12 ">
   <h2>
                Let's Know about COVID-19 (Corona-Virus)
              
   </h2>

  <p>
  Coronaviruses are a group of related viruses that cause diseases in mammals and birds. In humans, coronaviruses cause respiratory tract infections that can range from mild to lethal.
  </p>

<p>
Severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) is a novel severe acute respiratory syndrome coronavirus. It was first isolated from three people with pneumonia connected to the cluster of acute respiratory illness cases in Wuhan. All structural features of the novel SARS-CoV-2 virus particle occur in related coronaviruses in nature.
</p>
</div>

</div>




</div>



<!-- corona virus symptoms -->

<div class="container-fluid  pt-5 pb-5" id="aboutid">
<div class="section_header text-center mb-5 mt-4">

<h1> Corona Virus Symptoms </h1>
  
</div>

<div class="container">
<div class="row">
 <div class="col-lg-4 col-md-4 col-12 mt-5">
  <figure class="text-center">
<img src="images/cough.jpg" alt="" class="img-fluid" width="120 " height="120">

<figcaption>cough</figcaption>

  </figure>
 </div>

 <div class="col-lg-4 col-md-4 col-12 mt-5">
  <figure class="text-center">
<img src="images/runny.jpg" alt="" class="img-fluid" width="120 " height="120">

<figcaption>runny nose</figcaption>

  </figure>
 </div>

 <div class="col-lg-4 col-md-4 col-12 mt-5">
  <figure class="text-center">
<img src="images/fever.jpg" alt="" class="img-fluid" width="120 " height="120">

<figcaption>fever</figcaption>

  </figure>
 </div>

 <div class="col-lg-4 col-md-4 col-12 mt-5">
  <figure class="text-center">
<img src="images/cold.jpg" alt="" class="img-fluid" width="120 " height="120">

<figcaption>cold</figcaption>

  </figure>
 </div>

 <div class="col-lg-4 col-md-4 col-12 mt-5">
  <figure class="text-center">
<img src="images/tiredness.jpg" alt="" class="img-fluid" width="120 " height="120">

<figcaption>tiredness</figcaption>

  </figure>
 </div>

 <div class="col-lg-4 col-md-4 col-12 mt-5">
  <figure class="text-center">
<img src="images/breath.jpg" alt="" class="img-fluid" width="120 " height="120">

<figcaption>breathing problem</figcaption>

  </figure>
 </div>
 </div>
 </div>
 </div>


 <!-- prevention against corona virus -->

 <div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
<div class="section_header text-center mb-5 mt-4">

<h1> 6 steps prevention against corona </h1>
  
</div>

<div class="container">
<div class="row">
 <div class="col-lg-4 col-md-4 col-12 mt-5">
 <div class="row">
 <div class="col-lg-4 col-md-4 col-12 ">
 <figure class="text-center">
<img src="images/wash.jpg" alt="" class="img-fluid" width="120 " height="120">
  </figure>
  </div> 

  <div class="col-lg8 col-md-8 col-12 ">
      <p>Wash hands regularly</p>
  </div>
  </div>
  </div>


  <div class="col-lg-4 col-md-4 col-12 mt-5">
 <div class="row">
 <div class="col-lg-4 col-md-4 col-12 ">
 <figure class="text-center">
<img src="images/musk.jpg" alt="" class="img-fluid" width="120 " height="120">
  </figure>
  </div> 

  <div class="col-lg8 col-md-8 col-12 ">
      <p>Always use musk</p>
  </div>
  </div>
  </div>

  <div class="col-lg-4 col-md-4 col-12 mt-5">
 <div class="row">
 <div class="col-lg-4 col-md-4 col-12 ">
 <figure class="text-center">
<img src="images/avoid.jpg" alt="" class="img-fluid" width="120 " height="120">
  </figure>
  </div> 

  <div class="col-lg8 col-md-8 col-12 ">
      <p>maintain social distance</p>
  </div>
  </div>
  </div>


  <div class="col-lg-4 col-md-4 col-12 mt-5">
 <div class="row">
 <div class="col-lg-4 col-md-4 col-12 ">
 <figure class="text-center">
<img src="images/stay.jpg" alt="" class="img-fluid" width="120 " height="120">
  </figure>
  </div> 

  <div class="col-lg8 col-md-8 col-12 ">
      <p>Stay home , stay safe :)</p>
  </div>
  </div>
  </div>


  <div class="col-lg-4 col-md-4 col-12 mt-5">
 <div class="row">
 <div class="col-lg-4 col-md-4 col-12 ">
 <figure class="text-center">
<img src="images/stay2.jpg" alt="" class="img-fluid" width="120 " height="120">
  </figure>
  </div> 

  <div class="col-lg8 col-md-8 col-12 ">
      <p>stay informed</p>
  </div>
  </div>
  </div>


  <div class="col-lg-4 col-md-4 col-12 mt-5">
 <div class="row">
 <div class="col-lg-4 col-md-4 col-12 ">
 <figure class="text-center">
<img src="images/medicare.jpg" alt="" class="img-fluid" width="120 " height="120">
  </figure>
  </div> 

  <div class="col-lg8 col-md-8 col-12 ">
      <p>Seek medical care early, in need</p>
  </div>
  </div>
  </div>

  </div>
  </div>




 <!-- contact us asap  -->

 <div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
<div class="section_header text-center mb-5 mt-4">

<h1> You can contact with us </h1>
  
</div>

<div class="container">
<div class="row">
  <div class="col-lg-8 offset-lg-12 col-12">
  <form>


  <div class="form-group">
    <label >user name </label>
    <input type="text" class="form-control" name="username" placeholder="name" required autocomplete="off">
  </div>

  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" required autocomplete="off"  >
  </div>



  <div class="form-group">
    <label > mobile number  </label>
    <input type="number" class="form-control" name="mobile" placeholder="mobile" required autocomplete="off">
  </div>

  <button type="submit" class="btn btn-primary">Sign in</button>
</form>                                                                          

  </div>

</div>

</div>

</div>



<!-- top cursor -->
 <div class="container scrolltop float-right pr-5">

  <i class="fa fa-arrow-up" onclick="topFunction() id="myBtn"></i>

 </div>

<!-- footer tag -->

<footer class="mt-1">
   <div class="footer_style text-white text-center  container-fluid">

    <p> copyright by Zamshed </p>

   </div>

</footer>




</body>



</html>

<script type="text/javascript">

fetch('https://corona.lmao.ninja/v2/countries/Bangladesh')
.then((response) => {
  return response.json();
})
.then((data) => {
  console.log(data);
  document.getElementById("country").innerHTML = data.country;
  document.getElementById("active").innerHTML = data.active.toLocaleString();
  document.getElementById("cases").innerHTML = data.cases.toLocaleString();
  document.getElementById("critical").innerHTML = data.critical.toLocaleString();
  document.getElementById("death").innerHTML = data.deaths.toLocaleString();
  document.getElementById("recovered").innerHTML = data.recovered.toLocaleString();
  document.getElementById("tests").innerHTML = data.tests.toLocaleString();
  document.getElementById("flag").src = data.countryInfo.flag;
});
</script>