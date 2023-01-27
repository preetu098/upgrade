<html>
    <head>
        <title>Pratibha Technical Classes|Live classes</title>
        <link href="assets/css/style.css" rel="stylesheet"/>
        
        <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-60PKB9X1R7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-60PKB9X1R7');
</script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <style>
            ul li 
{
    font-family: 'Times New Roman', Times, serif;
    font-size: 20px!important;
    list-style:none;
}
a 
{
    text-decoration:none;
}

.revealstop1{
  position: relative;
  transform: translateY(-150px);
  opacity: 0;
  transition: 1s all ease;
}

.revealstop1.active{
  transform: translateY(0);
  opacity: 1;
}

.revealsleft{
  position: relative;
  transform: translateX(-150px);
  opacity: 0;
  transition: 1s all ease;
}

.revealsleft.active{
  transform: translateX(0);
  opacity: 1;
}
.revealsright{
  position: relative;
  transform: translateX(150px);
  opacity: 0;
  transition: 1s all ease;
}

.revealsright.active{
  transform: translateX(0);
  opacity: 1;
}

        </style>

<script>
    
function revealstop1() {
  var revealstop1 = document.querySelectorAll(".revealstop1");

  for (var i = 0; i < revealstop1.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = revealstop1[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
        revealstop1[i].classList.add("active");
    } else {
        revealstop1[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", revealstop1);

   
function revealsleft() {
  var revealsleft = document.querySelectorAll(".revealsleft");

  for (var i = 0; i < revealsleft.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = revealsleft[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
        revealsleft[i].classList.add("active");
    } else {
        revealsleft[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", revealsleft);


  
function revealsright() {
  var revealsright = document.querySelectorAll(".revealsright");

  for (var i = 0; i < revealsright.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = revealsright[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
        revealsright[i].classList.add("active");
    } else {
        revealsright[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", revealsright);
</script>
    </head>
<section class="bg-warning">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-4">
                <a href="https://wa.me/6266946900">
                <p class="text-white"><i class="fa fa-phone-square" aria-hidden="true"></i> 6266946900</p></a>
            </div>
            <div class="col-lg-8 col-8">
                <a href="http://www.pratibhatechclasses@gmail.com">
                <p class="text-white"><i class="fa fa-envelope-o" aria-hidden="true"></i> pratibhatechclasses@gmail.com</p></a>
            </div>
           
        </div>
        
    </div>
</section>
<section class="mt-1 mb-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-4">
          <h6 class="text-primary"><a href="">Quize Game</a></h6>
      </div>
      <div class="col-lg-4 col-4">
      <h6 class="text-primary"><a href="simplecoding.php">Simple Coding</a></h6>
      </div>
      <div class="col-lg-4 col-4">
      <h6 class="text-primary"><a href="join.php">Join Us</a></h6>
      </div>
    </div>
  </div>
</section>
<section>
    <div class="container">
    <div class="text-center">
        <h2 style="color:#000080"><font color="orange"><a href="/">Welcome in </font><font >Pratibha Technical Classes</a></font></h2>
        </div>
    </div>
</section>