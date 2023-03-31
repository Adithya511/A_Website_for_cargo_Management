<!DOCTYPE html>
<html>
<head>

<!--************************************************************head section starts from here*********************************************************************-->

<title>HomePage</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- RWD -->

<!--linking of bootstrap and css-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="external.css">





<!--parallex effect styles-->
<style type="text/css">
  *{margin:0;padding:0; border:0;}
  .toplayer{margin:0% 0%;}
  .parallex{ width:100%; height:50%; background:url("https://images.pexels.com/photos/753331/pexels-photo-753331.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500") repeat fixed 100% ;}
  .inner{padding-top: 10%; padding-bottom: 10%; text-align:center;}
  .parallex2{width:100%;height:50%; background:url("https://media.istockphoto.com/photos/plane-trucks-are-flying-towards-the-destination-with-the-brightest-picture-id859526476?k=20&m=859526476&s=612x612&w=0&h=izxGlw9MzMS4lhyyV9mb5F-3BJ55xGjcsF3jZ9tWHkc=") repeat fixed 100% ;}
  </style>
  






</head>

<!--************************************************************body section starts from here*********************************************************************-->





<body>
<!--************************************************************navigation bar starts from here*********************************************************************-->
<?php
    include './User_Account/nav_footer/navigationBar.php';
?>
<!--************************************************************navigation ends from here*********************************************************************-->

    
    
<!--************************************************************carousel starts from here*********************************************************************-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://previews.123rf.com/images/iidniel/iidniel1809/iidniel180900123/108425806-freight-sea-land-air-transhipment-cargo-services-for-transport-the-shipment-to-worldwide-internation.jpg"
             class="d-block w-100" alt="first photo" width=640px height=360px >

             <div class="carousel-caption d-none d-md-block">
                <h5><b>we care about your product</b></h5>
                <p>we handle your goods with extra care until the destination.</p>
              </div>
          </div>



          <div class="carousel-item">
            <img src="https://wallpaperaccess.com/full/1621272.jpg" 
            class="d-block w-100" alt="second pic" width=640px height=360px>
            <div class="carousel-caption d-none d-md-block">
                <h5><b>we handle inbound and outbound delivers</b></h5>
                <p>send your parcel with few clicks to world wide </p>
              </div>


        
        </div>
          <div class="carousel-item">
            <img src="https://c1.wallpaperflare.com/preview/816/652/935/container-ship-container-ship-port.jpg " class="d-block w-100" alt="3 photo of ship" width=640px height=360px>
            <div class="carousel-caption d-none d-md-block">
                <h5>we deliver the best</h5>
                <p>un matchable services 24/7.</p>
              </div>
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
        
<!--************************************************************carousal ends from here*********************************************************************-->

<!--************************************************************News line starts from here *********************************************************************-->
<div class="ticker-wrapper-h">
  <div class="heading">Special Notices</div>
  
  <ul class="news-ticker-h">
    <li><a href="">some services might delay due to current COVID-19 pandamic situation.. </a></li>
    <li><a href="">Deliveries to Russia & Ukraian has temporarly stopped..</a></li>
    <li><a href="">Taxes may subject to deviate at the time of placing the cargo..</a></li>
    <li><a href="">Deliveries to uganda has stopped  under further notice..</a></li>
  </ul>
</div>
<!--***********************************************************news line ends from here*********************************************************************-->

















<!--************************************************************cards starts from here*********************************************************************-->
<!-- sectioned the page for 3 coloumns in ratio 2:8:2  -->
<!-- section coloumns 1  -->

<div class="toplayer"><!-- upper section of parallex  --><!---note that parallex effect have 3 sections.upper middle lower -->
<div class="container-fluid">
  <div class="row">
      <div class="col-sm-2" style="background-color:#C70039; "><!-- can add some info here --><p>section 01 </p></div>





<!-- section coloumns 2  -->
      <div class="col-sm-8" style="background-color:#900C3F;"> </br>
        
        
        <div class="card-deck"><!-- 3 cards in center -->
        <div class="card"><!-- card 1 -->
          <img src="https://techbullion.com/wp-content/uploads/2022/02/how-to-track-a-smartphone-location-for-free-in-this-year.jpg" class="card-img-top" alt="Track image">
          <div class="card-body">
            <h5 class="card-title">Track Your Cargo</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card"><!-- card 2 -->
          <img src="data:image/jpeg;base64,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" 
          class="card-img-top" alt="calculator photo">
          <div class="card-body">
            <h5 class="card-title">Calculate Chargers</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card"><!-- card 3 -->
          <img src="data:image/jpeg;base64,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" class="card-img-top" alt="24/7 photo">
          <div class="card-body">
            <h5 class="card-title">24/7 Customer Service</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
    
    
    </div>

  <!-- section coloumns 3  -->
      <div class="col-sm-2" style="background-color:#C70039;"><!-- can add some info here --><p>section 03</p></div>
  </div>
</div>
<!--************************************************************cards ends from here*********************************************************************-->

</div><!-- upper parallex effect ends -->

<!-- parallex effect image behind middle section --><!-- --------------------------note that parallex effect have 3 sections.upper middle lower -->

    <section class="parallex"> <!--middle image and texts-->
        <div class="inner">
        <h1 style="color:white">EVERY ITEM TO YOUR DOORSTEP</h1>
        </div>
    </section><!--level 3 lower content-->
    <div class="toplayer" style="background-color:blue"><h1 style="text-align:center; color:white"> <br><br>A local office with a global mind</h1><br>
      <p style="color:white; padding-left:20%; padding-right:20%; text-align: justify">At every move we have the experience and the ability to make a positive difference to your business or your delivery needs. We look forward to providing you with the best solutions
         from our broad range of services. Our all-round cargo background coupled with our expertise in the cargo industry gives us an in-depth understanding of 
         the importance of a reliable partnership and service.</p><br><br><br><br>
    </div>


    <!--parralex 2-->
    <section class="parallex2"> 
      <div class="inner">
      <h1 style="color:white"><b><i>Serving to Nation Since 1980...</i></b></h1>
      </div>
  
    </section>
  <div class="toplayer" style="background-color: 	#191970">

  <div class="container-fluid">
      <div class="row">
          <div class="col-sm-2"><p style=text-align:center;color:white;><br>Coporative partner<br><img length=100px; height=100px; src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAgVBMVEX/zADUBRH/0QDQABL9xAPpfgv/1QDbQA/iYQ3/zgD/0ADfUw70qAf/2QDgWA7/1ADsiwr2rwbmdgzzpAjdSg/jZg35uQXoegz7vgTmcwzkaw3ukAr+yALlbg3rhgvmdAzZMxDXIRDaNxDwmQnvlgn4tQX2rQbxngjcQw/WGhDeTQ5RXWszAAAD8ElEQVR4nO3Zf3eaPBTAcQ3KTLSmVfG30qptN9//CxwJ2GESMDtn49l5zvfzJ1fgXshNAHs9AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB+USKG8vaT3m/aA/5m/5h/hZivhqVVZVbKN5vN4bDdbrPR6HCcCCHvC1zf9rvJWwPqw908HHZSolom/RhJP+/dJaRf3V88q6ZAcRPl3j/kpIsKpfoRVaD1Xsso3brRaVoGDsFAevIKHOoOCuyl0/gC+8nya6CKT/fW/1A2KOZu4M0Mb517R/uedlGg2MWN0Vuyt6suB+5+yVKVAe+yrIsC1cQ/z162JPanxDbhV7bzapyGe80E3MGYnBua8OOfa0JrVtaRZm5gXDXhxg1kaajurppQX3/vFhb52goDTSjtkPMH46sO1t1RE8r18fkBdx5amQr9XuuvU234g3FgmtCbfPr9XhdNaEZpRaQOUW5/utznlbybxMSbm+/beGFc3UDyKYIXJHnp6HHmq1K5yWc1+axcFuTaufiZHXNeEzY6/KdNWJOOnEqqOdO9WXbJE+fo5j01NOGikyasERc35429xu7NSswzjXdfW5gVz38C6KwJv/g52wnQmzGTo9nsN2ET+9j5TzShn7OZAP3HFju2tDugmwtc2QviPhpUF6pL6chN4dMuenJ5/XbHjC05ef0WaWoKUceTu330x5tQtgk1YfZUxtTd+qG1vbHKWVZ0xV1uUl1eJm8dSnUwjXCacQXuBy1kYOIYfbz4JvZgyt1/XZ2lISDbzl37seyJYGAfU6GYJc0GgSYshmnA2NwSPQxuNrOuG7iaQDpuOXdNJop3nJBdzJykdtdxg8WL8pqwwckkrF6Cr36h51QbEM9xs9KrloPvoQSv86hZVz810TJ29X4zLSF77mb76hd8JzQvizL21awYSQ1JikfF2Xt4GU+DxkcVu3qfbM+nC7eOS/VO6L0s7uyYHkcdPJkLPQznOL7E3EORNwz+vgw2YSCFzE6j+uhejmreb/pik0YVWDy7qnATFvKYm9g4l/ZkZBPObb7qPboJqy82/hN3SNGE3kT8ay6NWS/kchIy30c24bH8biulG2j+MFMGetKbmEKK56d5MENjGVNhwyi96scTQfGr8+07sF64rx+7cgR5I/0WMF+B3J38U3wK3bKkRI1SNfc/NQ+Hs+Lp5HlV/9Jdvhjm5WfuLBtls92H0rdOl5Pp6N6sbEJ1bgjYvfTgPNyOWgy1fM8D+VUf4eNWi/DfEvLx/xWqPkQa/6Twj1I/uXx0ktCRaynEFAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA+L/4CfiWUC1Z700nAAAAAElFTkSuQmCC"> </p></div>
          <div class="col-sm-2"><p style=text-align:center;color:white;><br>Shipping Partner  <br><img length=100px; height=100px; src="https://images-platform.99static.com//4zSrvz9dQEaunDymsmULyi-Wrbo=/0x0:1000x1000/fit-in/500x500/99designs-contests-attachments/76/76898/attachment_76898849"></p>&nbsp;</div>
          <div class="col-sm-2"><p style=text-align:center;color:white;><br>Airway partner    <br><img length=100px; height=100px; src="https://abudhabi.embassy.gov.lk/wp-content/uploads/2017/09/SriLankan_Airlines_logo.png"></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
          <div class="col-sm-2"><p style=text-align:center;color:white;><br>In Coperative with<br><img length=100px; height=100px; src="https://cdn.hirunews.lk/Data/News_Images/202109/1630987049_7875556_hirunews.jpg"> </p></div>
          <div class="col-sm-4"><p><br><br><h6 style="color:white;text-align: right">Learn more about our process &nbsp;</h6> </p>
            <div class="youtube" style="text-align:right">
            <iframe width="250" height="140" src="https://www.youtube.com/embed/PwwG6Gs9TsM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div><br><br></div>
      </div> 
        
    </div>
  </div>
  




    
  



<!--************************************************************footer begins from here*********************************************************************-->

<div class="card text-center">
    <div class="card-footer text-muted">
        <p>© 2022 Copyright:<a href="new devop.html">E-Cargo Service&nbsp;</a><img src="https://www.logotypes101.com/logos/660/4E5FCAC963A972ABFE3FE981905656AF/cargo.png" length="100" height="50" alt="logo"></p>
    </div>
  </div>

<!--************************************************************footer ends from here*********************************************************************-->
      </body>














</html>