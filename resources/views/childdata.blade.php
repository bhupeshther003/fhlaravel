@extends('layouts.app')

@section('content')

  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<style>
  .navbar-brand {
    width: 10%;
  }

  .container>.row>.col-4>.card>.row {
    border-width: 10px 0px 0px 0px;
    border-color: rgb(68, 4, 4);
    border-style: solid;
    background-color: rgb(199, 142, 101);
  }


  .listing-heads li::before {
    position: absolute;
    margin-top: 12px !important;
    left: 8px;
    width: 7px;
    height: 7px;
    background: #e33e42;
    content: "";
    transform: rotate(45deg);
  }

  .owl-carousel .owl-item img {
    display: block;
    width: 30%;
  }

  .num1 {
    background-color: hsl(332, 57%, 82%);
    cursor: pointer;
  }


  .num2 {
    background-color: hsl(192, 57%, 82%);
  }

  .num3 {
    background-color: hsl(256, 57%, 82%);
  }

  .num4 {
    background-color: hsl(81, 57%, 82%);
  }

  .dot {
    color: black;
  }

  .owl-nav {
    color: red;
    font-weight: bolder;
    font-size: large;
  }
   
  .btn-outline-success>a{
    text-decoration: none!important;
    color:black;
  }
  .btn-outline-success>a:hover{
    text-decoration:underline!important;
    color:rgb(224, 218, 218);
  }
.book>a{
  text-decoration: none!important;
    color:black;
}
.book>a:hover{
    text-decoration:underline!important;
    color:rgb(78, 128, 151);
  }
</style>


  <div class="container-fluid position-relative">

    <img class="carousel slide carousel-inner " style="padding:0; height: inherit" src="./image/banner1.jpg"
      alt="banner ">
    <div class=" position-absolute top-0  start-0  " style="padding-top:8%; padding-left:3rem;">


      <h1 class="d-none d-md-block">Revolutionizing <br>
        Child Care</h1>
      <!-- <h6 class="">Revolutionizing <br>
        Child Care</h6> -->
      <button class="btn btn-outline-success "> <a href="{{ url('appointment') }}">Book Appointment</a></button>

    </div>

    <!-- Create a container for the carousel -->


    <div class=" position-absolute top-100 start-50 translate-middle owl-carousel owl-theme" style="width:80%;">



      <div class=" item num1 card m-auto tablinks" style="width:13rem; height: 10rem;"
        onclick="openCity(event, 'Child')">
        <img src="./image/first-box.png" alt="" class=" img-fluid m-auto p-1">
        <p class="text-center fs-4 fw-bold" style=" line-height: 4cqh;">New Born Care</p>
        <p class="text-center p-2 ">Birth of a new born is an amazing feeling.</p>
      </div>

      <div class=" item num2 card m-auto tablinks" style="width:13rem; height: 10rem;"
        onclick="openCity(event, 'Pediatric')">
        <img src="./image/second-box.png" alt="" class="img-fluid m-auto p-1">
        <h2 class="text-center fs-4 fw-bold" style=" line-height: 4cqh;"> Pediatric [I.C.U]</h2>
        <p class="text-center">Pediatric Intensive Care deals with life threatening...</p>
      </div>

      <div class=" item num3 card m-auto" style="width:13rem; height: 10rem;"
        onclick="openCity(event, 'Pediatric_Surgery')">
        <img src="./image/third-box.png" class="img-fluid m-auto p-1" alt="">
        <h2 class="text-center fs-4 fw-bold" style=" line-height: 4cqh;"> Pediatric Surgery</h2>
        <p class="tex-center">Our mission is to provide and promote excellence.</p>
      </div>

      <div class=" item  num4 card m-auto" style="width:13rem; height: 10rem;" onclick="openCity(event, 'Genral')">
        <img src="./image/fourth-box.png" alt="" class="img-fluid m-auto p-1">
        <p class="text-center fs-4 fw-bold" style=" line-height: 4cqh;">General Surgery </p>
        <p class="text-center">General Pediatrics deals with common ailments.</p>
      </div>

    </div>
  </div>


  </div>


  <pre class="mt-5"></pre>
  <pre class="mt-2">
		<div class="container text-info rows " id="defaultOpen" onclick="openCity(event, 'child_home')">Child Home Page </div>
	</pre>
  <div class="container mt-1 tabcontent rows" id="child_home">
    <p><a href="./boostrap-index.html"> Home </a> >> Details >></p>

    <h2 class="text-center ">Your Best Pediatric Hospital </h2>
    <h3 class="text-center">For Health, For Life</h3>


    <p>The Children’s Hospital Mumbai, Malad believes that your children need specially designed health care
      services with unique needs, which can only be fulfilled by specialty-trained pediatrics and child
      specialists. Our board-certified pediatrician and child specialists are caring, that provides complete
      medical care specialized in taking care of acute illness, chronic disease, a rehabilitation program.</p>
    <p>
      We offer general pediatric care and also routine checkups for your children, we have specialized nursing and
      Pediatric Intensive Care Unit (PICU), that can handle the complex care including complex neurological
      treatment, cancer and sudden cardiac arrests.
      Our Child specialist is gentle and caring, who perceives your child’s physical, mental, and behavioral
      health issues faced during the stages of development in both sickness and health. As we believe that even
      your healthy children need preventive health services during their growth and evolution.
    </p>

    <p>The expert child specialists at The Children's Hospital Mumbai, diagnose and treat childhood illnesses, from
      mild health issues including allergies, colds, lice, worms, and ear infections to serious diseases involving
      orthopedics, genetic disorders, cancer, infectious diseases, etc.
      Our pediatric clinic provides specialised care for premature babies and newborns with close monitoring.</p>
    <p>
      We believe all our little patients need advancing children’s health and health care from start to end, which
      requires extra time, continuous supervision, and a nurturing environment.</p>



    <p class="fw-bold"> Technologies used at The Children’s Hospital Mumbai:</p>
    Our childcare unit has a dedicated Pediatric Intensive Care Unit (PICU) and Neonatal Intensive Care Unit (NICU)
    equipped with advanced robotic ventilators including High-Frequency Jet Ventilation (HFJV), BiPAP (non-invasive
    ventilation), and life monitoring systems including multipara monitors.
    Which provides complete care to an array of illnesses including epileptics, respiratory disorders including
    complex breathing problems, asthmatics, pneumonia in children.
    Additionally, we are equipped with a Neonatal Transport Incubator with a ventilator for relocating ill babies
    and infants to our hospital. Some of the services includes:
    <ul>
      <li>Preventive, screening and wellness pediatric services such as health checks immunisation,
        ophthalmology,immunisation, behavioural counselling and learning disorders counselling.</li>
      <li>Pediatric Lab diagnostics and medical scanning including EEG, X-Ray, 2D Echo, Sonography and OAE / BERA.
      </li>
      <li> Pediatric rehabilitation and physical therapy.</li>
    </ul>


    <p>
      We, at The Children’s Hospital Mumbai, are aware of <span class="fw-bolder"> our little patient
        needs:</span>
    </p>

    <ul>
      <li>Rapid care team specialized in pediatric airway management and pediatric-specific standards.</li>
      <li>Oximeter monitoring for infants and small children.</li>
      <li>Pacifier to provide newborn pain management.</li>
    </ul>

  </div>



  <!--  child tab 1  container 01 -->

  <div class="container mt-2 tabcontent rows" id="Child">
    <p class="container"> Home >> Details>> Child-Care >></p>

    <div class="row m-auto">

      <div class="col ">
        <img src="https://www.thechildrenshospitalmumbai.com/images/first-box.png" class="img-fluid float-end "
          alt="Responsive image">
      </div>

      <div class="col-7 fs-2 fw-bold float-start "> New Born Child

      </div>



      <div class="col-4  ">
        <div class="card">
          <div class="row">
            <div class="col-3">
              <img src="https://www.thechildrenshospitalmumbai.com/images/appointments.png"
                class='img-fluid  m-auto pt-3 pb-3' alt="">
            </div>
            <div class="col-9 fs-4 fw-bolder pt-3 pb-3 book">
              <a href="{{ url('appointment')}}">  Book Appointment </a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row m-auto">

      <div class="col-8 ">

        <p class="mt-4"> Birth of a newborn is an amazing feeling. While on one hand, the newborn’s parents try
          to put maximum efforts to understand the needs of her little one, on the other, this transition to
          life outside the mother's belly is quite challenging for the baby too.</p>

        <p> Newborn babies who need intensive care are often admitted into a special area of the hospital called
          the Neonatal Intensive Care Unit (NICU). The NICU has all advanced medical equipments and trained
          medical practitioners to provide specialised medical care or nursing care required by these little
          ones.</p>


        <p class="fw-bold"> Follow-Up Of High Risk Neonates: </p>

        <p> Certain neonates who are discharged from the NICU have certain high risk factors for which they
          should be monitored at a regular basis as they are at risk of growth and developmental delays. These
          babies need to be followed up closely so that any problems may be detected and treated at an earlier
          stage. These high risk factors include: </p>

        <div class="position-relative">
          <ul type="none" class=" listing-heads nicus ps-4">

            <li> Gestation 32 weeks or less</li>
            <li> Birth-weight 1500 gm or less</li>
            <li> Severe IUGR (Birth-weight less than 3rd centile for gestation)</li>
            <li> Artificial ventilation for >5 days</li>
            <li> Seizures in neonatal period</li>
            <li> Intraventricular hemorrhage grade 3 or more</li>
            <li> Neonatal encephalopathy</li>
            <li> Hypoxic ischemic encephalopathy stage 2 or 3</li>
            <li> Jaundice requiring exchange transfusion</li>
            <li> Developmental malformation of central nervous system</li>
            <li> Neonatal meningitis</li>
            <li> Recurrent or refractory hypoglycemia in neonatal period</li>
          </ul>

        </div>

      </div>
      <div class="col-4 mt-3 ">
        <div class="card">
          <div class="row">
            <div class="col-3">
              <img src="./image/timetable.png" class='img-fluid  m-auto pt-5 pb-5' alt="">
            </div>
            <div class="col-9 fs-5 fw-bolder pt-5 pb-5">
              Doctors Timetable
            </div>
          </div>
        </div>

        <div class="card mt-5">
          <div class="row">
            <div class="col-3">
              <img src="./image/facilities.png" class="img-fluid" alt="">
            </div>
            <div class="col-9 float-start   fs-5 fw-bolder">
              Our Facilities
            </div>
          </div>
          <div class="row position-relative">
            <ul type="none" class="listing-heads ninus ps-4 $blue-100">
              <li> EEG (General)</li>
              <li> OAE (Hearing Evaluation)</li>
              <li> X - ray</li>
              <li> 2D Echo</li>
              <li> USG</li>
              <li> Inpatient / Outpatient Clinic</li>
              <li> Neonatal Intensive Care Unit</li>
              <li> Pediatric Intensive Care Unit</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>




  <!--  child tab 2  contanier 2 -->
  <div class="container mt-2  tabcontent rows" id="Pediatric">
    <p class="container"> Home >> Details >> Prdiatric >></p>

    <div class="row m-auto">

      <div class="col ">
        <img src="./image/icon4.png" class="img-fluid float-end " alt="Responsive image">
      </div>

      <div class="col-7 fs-2 fw-bold float-start "> Best Pediatric Intensive Care Unit (PICU)

      </div>



      <div class="col-4  ">
        <div class="card">
          <div class="row">
            <div class="col-3">
              <img src="https://www.thechildrenshospitalmumbai.com/images/appointments.png" src="./image/timetable.png"
                class='img-fluid  m-auto pt-3 pb-3' alt="">
            </div>
            <div class="col-9 fs-4 fw-bolder pt-3 pb-3 book">
              <a href="{{ url('appointment')}}">  Book Appointment </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row m-auto">

      <div class="col-8 ">

        <p class="mt-4"> Pediatric Intensive Care deals with life-threatening illnesses in children which can
          occur at any given time. It includes a wide array of diseases like status epileptics, status
          asthmatics, respiratory failure, pneumonia, renal failure, and head injury which require intensive
          care.</p>


        <p> We, at The Children’s Hospital Mumbai, provide the required treatment based on the individual needs
          including intensivists, surgeons, neurologists, cardiologists, etc. who along with cutting-edge
          technology strive to give you and your family the best you deserve.</p>

        <p><span class="fw-bold">Our Pediatric Intensive Care Unit (PICU) </span> is an 11 bedded intensive unit
          built with the latest technology equipped with ventilators and life monitoring systems. The required
          treatment based on the individual needs including intensivists, surgeons, chest physicians,
          neurologists, cardiologists, etc who along with cutting edge technology - ventilator, BiPAP
          (non-invasive ventilaton), multipara monitors strive to give you and your family the best you
          deserve</p>





      </div>

      <div class="col-4 mt-3  .bg-gradient">
        <div class="card">
          <div class="row">
            <div class="col-3">
              <img src="./image/timetable.png" class='img-fluid  m-auto pt-5 pb-5' alt="">
            </div>
            <div class="col-9 fs-5 fw-bolder pt-5 pb-5">
              Doctors Timetable
            </div>
          </div>
        </div>

        <div class="card mt-5">
          <div class="row">
            <div class="col-3">
              <img src="./image/facilities.png" class="img-fluid" alt="">
            </div>
            <div class="col-9 float-start   fs-5 fw-bolder">
              Our Facilities
            </div>
          </div>
          <div class="row  position-relative">
            <ul type="none" class="listing-heads nicus ps-4 .bg-secondary.bg-gradient">
              <li> EEG (General)</li>
              <li> OAE (Hearing Evaluation)</li>
              <li> X - ray</li>
              <li> 2D Echo</li>
              <li> USG</li>
              <li> Inpatient / Outpatient Clinic</li>
              <li> Neonatal Intensive Care Unit</li>
              <li> Pediatric Intensive Care Unit</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- child tab 3   container 3 -->
  <div class="container mt-2  tabcontent rows" id="Pediatric_Surgery">
    <p class="container"> Home >> Details >> Prdiatric Surgery >></p>

    <div class="row m-auto">

      <div class="col ">
        <img src="./image/pediatric-surgery.png" class="img-fluid float-end " alt="Responsive image">
      </div>

      <div class="col-7 fs-2 fw-bold float-start "> Best Pediatric Surgery Hospital in India

      </div>
      <div class="col-4  ">
        <div class="card">
          <div class="row">
            <div class="col-3">
              <img src="https://www.thechildrenshospitalmumbai.com/images/appointments.png" src="./image/timetable.png"
                class='img-fluid  m-auto pt-3 pb-3' alt="">
            </div>
            <div class="col-9 fs-4  fw-bolder pt-3 pb-0 mb-0 book">
              <a href="{{ url('appointment')}}">  Book Appointment </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row m-auto">

      <div class="col-8 ">

        <p class="fs-6 fw-bold">ENTER FOR PEDIATRIC SURGERY (CHILDREN & NEW-BORN SURGERY)</p>
        <p class="fs-6 fw-bold">CENTER FOR PEDIATRIC UROLOGY (GENITO-URINARY SURGERY)</p>
        <p class="fs-6 fw-bold">CENTER FOR GASTRO-INTESTINAL & HEPATO-BILIARY SURGERY</p>

        <p class=" fw-bold"> “Our mission is to provide and promote excellence in surgical care for children,
          being one of the top pediatricians ”.</p>

        <p class="mt-4"> <span class="fw-bold"> “Child is not a small Adult” </span> and, therefore, require
          expertise that can cater to their needs. Babies suffer from different problems, their physiology is
          different, they handle stress differently, and the principles of treatment are entirely different
          from adults.</p>


        <p> <span class="fw-bold">Pediatric & Neonatal surgery </span> is the field of medicine that deals with
          the surgical care of new-born babies, infants, and children to the age of 18 years. This branch is
          highly specialized not only because one has to handle very delicate and miniature tissues, but also
          it requires a great deal of patience, compassion and understanding to handle the little babies and
          their very anxious parents.</p>

        <p><span class="fw-bold">Why choose us as your child's pediatricians?
          </span>
          The Children's Hospital Mumbai focuses on special surgical procedures while treating the children
          with extreme compassion and care. Our board-certified pediatricians treat infants, children, and
          adolescents, and also help to counsel parents expecting a baby who may have been diagnosed before
          birth with a surgical problem. The pediatric surgeons are experienced in caring for the wide variety
          of problems children may have, ranging from hernias or appendicitis to cancer or serious congenital
          anomalies.</p>



        <div class="row  position-relative">
          <ul type="none" class="listing-heads nicus ps-4 ">
            <li> EEG (General)</li>
            <li> OAE (Hearing Evaluation)</li>
            <li> X - ray</li>
            <li> 2D Echo</li>
            <li> USG</li>
            <li> Inpatient / Outpatient Clinic</li>
            <li> Neonatal Intensive Care Unit</li>
            <li> Pediatric Intensive Care Unit</li>
          </ul>
        </div>

      </div>

      <div class="col-4 mt-3 ">
        <div class="card">
          <div class="row">
            <div class="col-3">
              <img src="./image/timetable.png" class='img-fluid  m-auto pt-5 pb-5' alt="">
            </div>
            <div class="col-9 fs-5 fw-bolder pt-5 pb-5">
              Doctors Timetable
            </div>
          </div>
        </div>

        <div class="card mt-5">
          <div class="row">
            <div class="col-3">
              <img src="./image/facilities.png" class="img-fluid" alt="">
            </div>
            <div class="col-9 float-start   fs-5 fw-bolder">
              Our Doctors
            </div>
          </div>
          <div class="row  position-relative ">
            <ul type="none" class="listing-heads nicus ps-4" style="background-color: rgb(153, 177, 169);">
              <li> <strong> Dr. Rani Roy </strong> MMBS </li>
              <li> <strong> Dr. Amit Patil </strong> MMBS </li>
              <li> <strong> Dr. Sangita Shaikh </strong> MMBS </li>
              <li> <strong> Dr. Madhav Mundde </strong> MMBS </li>
              <li> <strong> Dr. Ganesh Sharma </strong> MMBS </li>
              <li> <strong> Dr. Swapnil Jadhav </strong> MMBS </li>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>






  <!-- child tab 4 container 4  -->

  <div class="container mt-2 tabcontent rows" id="Genral">


    <p class="container"> Home >> Details >> General Care Services >></p>

    <div class="row m-auto">

      <div class="col ">
        <img src="./image/General-Care-Services.png" class="img-fluid float-end " alt="Responsive image">
      </div>

      <div class="col-7 fs-2 fw-bold float-start "> General Care Services

      </div>
      <div class="col-4  ">
        <div class="card">
          <div class="row">
            <div class="col-3">
              <img src="https://www.thechildrenshospitalmumbai.com/images/appointments.png" src="./image/timetable.png"
                class='img-fluid  m-auto pt-3 pb-3' alt="">
            </div>
            <div class="col-9 fs-4 fw-bolder m-auto mb-3  book">
              <a href="{{ url('appointment')}}">  Book Appointment </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row m-auto  rows">

      <div class="col-8 ">


        <p class=" fw-bold"> “Our mission is to provide and promote excellence in surgical care for children,
          being one of the top pediatricians in Mumbai”.</p>

        <p class="mt-4"> General Pediatrics deals with common ailments that majority of children suffer during
          their young years. Fever, colds, cough, loose motions, vomiting, urinary infections, etc are most
          often the common complaints of young children.</p>


        <p> Our consultants guide you with regards to the diagnosis and treatment, any investigations or special
          tests that need to be carried out. We make sure to take care of all your child’s requirements such
          as Immunizations, growth and development monitoring, nutritional monitoring and dental preventive
          care.</p>
        <p class="fs-5 fw-bold"> Our speciality</p>

        <hr color="green">
        <div class="position-relative d-flex">
          <ul type="none" class="listing-heads nicus ps-4 ">
            <li>Congenital Cystic Adenomatoid - Malformation</li>
            <li>Congenital Lobar Emphysema (CLE)</li>
            <li>Lung sequestration</li>
            <li>Oesophageal Atresia and Tracheo-oesophageal Fistula</li>
            <li>Congenital Diaphragmatic Hernia</li>
            <li>Eventration of Diaphragm</li>
            <li>Duplication of the gut</li>
            <li>Pyloric Stenosis</li>
            <li>Duodenal Atresia / Stenosis</li>
            <li>Intestinal Atresias</li>
            <li>Duplications</li>
            <li>Malrotation</li>
            <li>Meconium Ileus</li>
            <li>Necrotizing Enterocolitis</li>
            <li>Biliary Atresia</li>
            <li>Choledochal cyst</li>

          </ul>

          <div class="position-relative">
            <ul type="none" class="listing-heads nicus ps-4">
              <li>Congenital Cystic Adenomatoid - Malformation</li>
              <li>Congenital Lobar Emphysema (CLE)</li>
              <li>Lung sequestration</li>
              <li>Oesophageal Atresia and Tracheo-oesophageal Fistula</li>
              <li>Congenital Diaphragmatic Hernia</li>
              <li>Eventration of Diaphragm</li>
              <li>Duplication of the gut</li>
              <li>Pyloric Stenosis</li>
              <li>Duodenal Atresia / Stenosis</li>
              <li>Intestinal Atresias</li>
              <li>Duplications</li>
              <li>Malrotation</li>
              <li>Meconium Ileus</li>
              <li>Necrotizing Enterocolitis</li>
              <li>Biliary Atresia</li>
              <li>Choledochal cyst</li>

            </ul>
          </div>
        </div>
      </div>


      <div class="col-4 mt-3  ">
        <div class="card">
          <div class="row">
            <div class="col-3">
              <img src="./image/timetable.png" class='img-fluid  m-auto pt-5 pb-5' alt="">
            </div>
            <div class="col-9 fs-3  .bg-dark.bg-gradient fw-bolder m-auto  mb-3 ">
              Doctors Timetable
            </div>
          </div>
        </div>

        <div class="card mt-5 ">
          <div class="row">
            <div class="col-3">
              <img src="./image/facilities.png" class="img-fluid" alt="">
            </div>
            <div class="col-9 float-start   fs-5 fw-bolder">
              Our Facilities
            </div>
          </div>
          <div class="row  position-relative ">
            <ul type="none" class="listing-heads nicus ps-4  .bg-info">
              <li> EEG (General)</li>
              <li> OAE (Hearing Evaluation)</li>
              <li> X - ray</li>
              <li> 2D Echo</li>
              <li> USG</li>
              <li> Inpatient / Outpatient Clinic</li>
              <li> Neonatal Intensive Care Unit</li>
              <li> Pediatric Intensive Care Unit</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script>


  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }

  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
</script>


<!-- nav 4 box  -->
<!-- Include jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Include Owl Carousel JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
  // Initialize Owl Carousel
  $(document).ready(function () {
    $('.owl-carousel').owlCarousel({

      loop: false,
      margin: 10,

      responsive: {
        0: {
          items: 1
        },
        500: {
          items: 2,
          loop: true,
          nav: false,
          dots: true
        },
        800: {
          items: 3,
          loop: true,
          nav: false,
          dots: true
        },
        1045: {
          items: 4,
          loop: false,
          nav: false,
          dots: false,
          mouseDrag: false
        }
      }
    });
  });
</script>

@endsection
