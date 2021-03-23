<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Best Bussiness</title>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="icon" href="/images/Asset1.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<style>
@font-face {
  font-family: myFirstFont;
  src: url('/fonts/Cairo-Regular.ttf');
}
body{
  direction: rtl;
  color: gray;
  font-family: 'Cairo', sans-serif;

}
footer {
  bottom: 0;
	width: 100%;
  position: relative;
  bottom: 0;
  height: 50px;
	background-color: gray;
	color: white;
	text-align: center;
}
.button{
  background-color: #5DA5DB;
  border-radius: 20px;
  color: #fff;
  border: solid #5DA5DB 1px;
  padding-left: 20px;
      padding-right: 20px;
      padding-top: 5px;
      padding-bottom: 5px;
}

.button2{
  background-color: #fff;
  border-radius: 20px;
  color: #fff;
  border: solid #5DA5DB 1px;
  padding-left: 20px;
      padding-right: 20px;
      padding-top: 5px;
      padding-bottom: 5px;
}
#snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 9999;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
</style>
    <title></title>
    <!--Jquery-->

  </head>
  <body>
    <div id="snackbar">شكرا لارسال بياناتك</div>

  <script>
  function myFunction() {
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 10000);
  }

  </script>
  @if($err == 1)
  <script>
  myFunction()
  </script>

  @endif

    <nav class="navbar navbar-expand-lg navbar-light  fixed-top" style="background-color:#fff;    box-shadow: 3px 3px 3px grey;
">
      <div class="container">
  <a class="navbar-brand" href="#"><img src="/images/Asset1.png" style="height:70px"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav ">
      <li class="nav-item active">
        <a class="nav-link" href="#">الرئيسيه </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services">الخدمات</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutus">عنا</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactus">تواصل معنا</a>
      </li>

      <li class="nav-item">
        <a class="nav-link button2" style="color:#5DA5DB" href="#form">طلب</a>
      </li>
      <li class="nav-item" style="margin-right:5px">
        <a class="nav-link button2" style="color:#5DA5DB" href="/">EN</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link button" style="color:#fff;margin-left:5px" href="#">Sign Up</a>
      </li> -->


    </ul>


  </div>
</div>
</nav>


<div class="container text-right">


  <!-- start -->
  <div class="row d-flex " style="padding-top:200px">
    <div class="col-lg-6 col-sm-12 align-middle justify-content-center align-self-center text-right" >
      <h1 style="font-weight:700">Best</h1>
      <h2 style="font-weight:400">Bussiness</h2>
      <h3 style="font-weight:100">لتامين الجوده</h3>
      <button class="button">تقديم الان</button>

    </div>

    <div class="col-lg-6 col-sm-12">
      <img src="/images/Asset 3.png" class="img-fluid"/>

    </div>


  </div>

  <a style="    height: 40px;
    position: fixed;
    bottom:10%;
    width:100%;
    opacity: 1;
    right: 0;
    left: 80%;
    z-index: 9999;
" href="https://wa.me/+201116775827?text=Hi%20Eric,%20I%20am%20sending%20you%20this%20message%20because%20I%20am%20interested%20in%20your%20business!" style="text-decoration: none;" target="_blank">
     <img src="/images/Asset 12.png" width="100" height="100"/>
  </a>


<!-- form -->
  <div class="row" style="padding-top:200px" id="form">
    <div class="col-lg-6 col-sm-12">
      <form action="/add-designer" enctype="multipart/form-data" method="post">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">الاسم</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">رقم الهاتف</label>
          <input type="number" name="phone" class="form-control" id="exampleInputPassword1" required>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">البريد الالكتروني</label>
          <input type="email" name="email" class="form-control" id="exampleInputPassword1">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">الشركه</label>
          <input type="text" class="form-control" name="company" id="exampleInputPassword1">
        </div>


        <div class="form-group">
  <label for="exampleFormControlFile1">الملف</label>
  <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1">
</div>
<input type="hidden" value="ar" name="lang"/>

        <button class="button" type="submit">قدم الان</button>
      </form>

    </div>

    <div class="col-lg-6 col-sm-12">
      <img src="/images/Asset 4.png" class="img-fluid"/>

    </div>


  </div>



<!-- services -->

  <div class="row d-flex justify-content-center" style="padding-top:200px;padding-bottom:200px" id="services">

    <div class="col-lg col-sm-12 text-center">
      <img src="/images/Asset.png" class="img-fluid" style="height:170px;width: 170px;box-shadow: 3px 3px 3px grey;border-radius:20px;padding:40px;margin-bottom:20px;"/>
      <p>عملت حساب لاعمالك</p>

    </div>



    <div class="col-lg col-sm-6 text-center">
      <img src="/images/Asset 5.png" class="img-fluid" style="height:170px;width: 170px;box-shadow: 3px 3px 3px grey;border-radius:20px;padding:40px;margin-bottom:20px;"/>
      <p>اضافه منتجات و استخراج شهادات</p>

    </div>

    <div class="col-lg col-sm-12 text-center">
      <img src="/images/Asset 6.png" class="img-fluid" style="height:170px;width: 170px;box-shadow: 3px 3px 3px grey;border-radius:20px;padding:40px;margin-bottom:20px;"/>
      <p>استخرج تاكيد شهادات</p>
    </div>

    <div class="col-lg col-sm-12 text-center">
      <img src="/images/Asset 8.png" class="img-fluid" style="height:170px;width: 170px;box-shadow: 3px 3px 3px grey;border-radius:20px;padding:40px;margin-bottom:20px;"/>
      <p>اطلب متابعه</p>
    </div>

    <div class="col-lg col-sm-12 text-center">
      <img src="/images/Asset 9.png" class="img-fluid" style="height:170px;width: 170px;box-shadow: 3px 3px 3px grey;border-radius:20px;padding:40px;margin-bottom:20px;"/>
      <p>انشاء طلبات الاعفاء</p>
    </div>


  </div>



<!-- about us -->


<div class="row" id ="aboutus">
  <div class="col-lg-6 col-sm-12 justify-content-center align-self-center">
    <h1 style="font-weight:700">عنا</h1>
    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.
هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً. </p>

    <button class="button">تواصل معنا</button>

  </div>

  <div class="col-lg-6 col-sm-12 text-center">
    <img src="/images/Asset 10.png" class="img-fluid"/>

  </div>


</div>


<!-- form -->
  <div class="row" style="padding-top:200px;padding-bottom:20px" id="contactus">
    <div class="col-lg-6 col-sm-12">
      <form method="get" action="/add-contact">
        @csrf
        <h1>نحن نحب ان نسمع منك</h1>
        <div class="form-group">
          <label for="exampleInputEmail1">بريدك الالكتروني</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">رسالتك</label>
          <textarea type="textarea" name="message" class="form-control" id="exampleInputPassword1"></textarea>
        </div>

        <input type="hidden" value="ar" name="lang"/>



        <button  type="submit" class="button">ارسل الان</button>
      </form>

    </div>

    <div class="col-lg-6 col-sm-12">
      <img src="/images/Asset 4.png" class="img-fluid"/>

    </div>


  </div>










</div>

<footer class="d-flex justify-content-center">
  <p class="d-flex justify-content-center align-self-center" style="  margin: auto;
  width: 50%;
  padding: 10px;
">Copyright &copy; 2020 Best Bussiness.</p>
</footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>
