@extends('layouts.app')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./image/logmain.jpg.png" type="image/x-icon">
    <title>FH_Doc_Query</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link rel="stylesheet" href="./boostrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="./boostrap/css/bootstrap.css">
    <link rel="stylesheet" href="./main.css">
    <script src="./javascript.js"></script>

    <style>
        .navbar img {
            width: 10%
        }


        .coll-1 {
            border-width: 0px 1px 0px 0px;
            border-style: solid;
            border-color: #ececec;
            /* border: 1px solid  #ececec;*/
        }

        input {
            border: 1px solid #ececec;
            width: 100%;
            margin-top: 1%;
            background: #f8f8f8;
        }

        label span {
            color: red;
        }
    </style>
</head>

<body>
    <div class="row  mb-5">
        @if (Session::has('success'))
            <script> 
                    alert('{{ Session::get('success') }}');
            </script>
        @endif
      
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close float-end me-2" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif


        <div class="container mt-3">
            <div class="row" style="display: flex;">

                <div class="col-xl-4 col-lg-4 col-md-4  col-sm-12 fs-4 ">
                    <div class=" col-12 mt-5">
                        <label for="" class=" p-2 m-auto" id="defaultOpen"
                            onclick="openname(event,'Enqiry')"><span class="fw-bolder fs-3 text-dark"> >
                            </span>Enquiry Form
                        </label>
                        <label for="" class=" p-md-2  d-block m-auto "
                            onclick="openname(event,'feedback')"><span class="fw-bolder fs-3 text-dark"> >
                            </span>Feedback Form
                        </label>
                        <label for="" class=" p-2 m-auto" onclick="openname(event,'appointment')"><span
                                class="fw-bolder fs-3 text-dark"> > </span>Appointment Form
                        </label>

                    </div>
                </div>

                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 ">
                    <div class=" mt-5 col-xl-11  col-lg-11 col-md-10 col-sm-12 tabcontent " id="Enqiry">
                        <form action="{{ url('enquiry') }}" method="post">
                            @csrf
                            <strong class="fs-4 "> Furture Health >> Enquiry Form</strong>
                            <label for="name" class="mt-2 mb-1  d-block">Name<span
                                    class='text-danger fw-bolder'>*</span></label>
                            <input type="text" class="mt-2 p-2" name="name" id="uname"
                                placeholder="Enter Your Full Name"maxlength="60" required value={{ old('name') }}>
                            @error('name')
                                <p class="text-danger">
                                <p class="text-danger"> {{ $message }}</p>
                            @enderror
                            <div class="row mt-2">
                                <div class="col-6">
                                    <label for="mail " class="mt-1">Email ID<span
                                            class='text-danger fw-bolder'>*</span></label>
                                    <input type="email" class="mt-2 p-2" name="email" id="email"
                                        placeholder="Enter Your Email ID" required value={{ old('email') }}>
                                    @error('email')
                                        <p class="text-danger"> {{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="mono" class="mt-1">Mobile Number <span
                                            class='text-danger fw-bolder'>*</span></label>
                                    <input type="tel" class="mt-2 p-2" name="mobile_num" id="mo_num"
                                        placeholder="Enter Contact Number" required value={{ old('mobile_num') }}>
                                    @error('mobile_num')
                                        <p class="text-danger"> {{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <label for="docname" class="mt-3">Doctoor Name <span
                                    class='text-danger fw-bolder'>*</span></label>
                            <input type="text" class="mt-2 p-2" name="doc_name" id="doc-name"
                                placeholder="Dr. Mohit Roy" maxlength="50" value={{ old('doc_name') }}>
                            @error('doctor_name')
                                <p class="text-danger"> {{ $message }}</p>
                            @enderror
                            <label for="questio" class="mt-3">Your Query <span
                                    class='text-danger fw-bolder'>*</span></label>
                            <textarea class="col-12 mt-1 p-1" row="6" name="query" id="ques"
                                placeholder="Enter your quiry about doctor" maxlength="395" minlength="50" required value={{ old('query') }}></textarea >
                        @error('query')
<p class="text-danger">  {{ $message }}</p>
@enderror

                        <button type="reset" class=" btn m-auto mt-3 ms-md-5 ms-sm-0  text-dark btn-outline-info "   style="width:100px;">Clear All</button>
                        <button type="submit"  class=" btn  float-end text-dark btn-outline-info m-auto ps-3 pe-3  mt-3 me-md-5 me-sm-0" >Submit</button>
                    </form>
                </div>



                <div class="mt-5 col-xl-11  col-lg-11 col-md-10 col-sm-12 tabcontent" id="feedback">
                    <form action="{{ url('feedback') }}" method="post">
                        <strong class="fw-bold fs-4"> Furture Health >> Feedback Form</strong>
                       @csrf
                        <div class="row mt-2">
                            <div class="col-6">
                                <label for="name" class="mt-2 mb-1">Name<span class='text-danger fw-bolder'>*</span></label>
                                <input type="text" class="mt-2 p-2" name="user_name" id="uname" placeholder="Enter Yoour Full Name" required value={{ old('user_name') }}>
                                @error('user_name')
<p class="text-danger">  {{ $message }}</p>
@enderror
                            </div>
                            <div class="col-6">
                                <label for="mono" class="mt-1">Mobile Number <span  class='text-danger fw-bolder'>*</span></label>
                                <input type="tel" class="mt-2 p-2" name="phone_num" id="mobile_num" maxlength="10"  placeholder="Enter Contact Number" required value={{ old('phone_num') }}>
                                @error('phone_num')
<p class="text-danger">  {{ $message }}</p>
@enderror
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-6">
                                <label for="mail" class="mt-1">Email ID<span class='text-danger fw-bolder'>*</span></label>
                                <input type="email" class="mt-2 p-2" name="mail" id="email" placeholder="Enter Your Email ID" required value={{ old('mail') }}>
                                @error('mail')
<p class="text-danger">  {{ $message }}</p>
@enderror
                            </div>

                            <div class="col-6">
                                <label for="mono" class="mt-1">Department <span  class='text-danger fw-bolder'>*</span></label>
                                <select name="department" class=" m-2 p-2" id="" style="width:97%" value={{ old('department') }} required>
                                    <option value="">Select Department</option>
                                    <option value="Customer Service">Customer Service</option>
                                    <option value="Nursing"> Nursing</option>
                                    <option value="Admin"> Admin</option>
                                    <option value="Billing">Billing</option>
                                    <option value="House Keeping">House Keeping</option>
                                    <option value="Doctors">Doctors</option>
                                    <option value="Other">Other</option>
                                </select>
                                @error('department')
<p class="text-danger">{{ $message }}</p>
@enderror
                            </div>
                        </div>

                        <label for="questio" class="mt-3 ">Your Question and suggestion</label>
                        <textarea class="col-12 mt-1 p-1" row="6" name="feedback" id="ques" placeholder="Enter your question and suggestion for our team"  minlength="10" maxlength="250" value={{ old('feedback') }}></textarea>
                            @error('feedback')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <button type="reset" class=" btn m-auto mt-3 ms-5  text-dark btn-outline-info "
                                style="width:100px;">Clear All</button>
                            <button type="submit"
                                class=" btn  float-end text-dark btn-outline-info m-auto ps-3 pe-3  mt-3 me-5 ">Submit</button>
                        </form>
                    </div>


                    <div class="mt-5 col-xl-11  col-lg-11 col-md-10 col-sm-12 tabcontent " id="appointment">
                        <form action="{{ url('appoint_enquiry') }}" method="post">
                            @csrf
                            <strong class="fw-bold fs-4"> Furture Health >> Appointment Enquiry Form </strong>

                            <label for="name" class="mt-2 d-block">Name<span
                                    class='text-danger fw-bolder'>*</span></label>
                            <input type="text" class="mt-2 p-2" name="users_name"
                                id="uname"placeholder="Enter Yoour Full Name" required
                                value={{ old('users_name') }}>
                            @error('users_name')
                                <p class='text-danger'>{{ $message }}</p>
                            @enderror
                            <div class="row mt-2">
                                <div class="col-6">
                                    <label for="mail" class="mt-1">Email ID<span
                                            class='text-danger fw-bolder'>*</span></label>
                                    <input type="email" class="mt-1 p-2" name="mail" id="email"
                                        placeholder="Enter Your Email ID" required value={{ old('mail') }}>
                                    @error('mail')
                                        <p class='text-danger'>{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="mono" class="mt-1">Mobile Number <span
                                            class='text-danger fw-bolder'>*</span></label>
                                    <input type="tel" class="mt-2 p-2" name="mobile_number" id="mobile_number"
                                        placeholder="Enter Contact Number" required value={{ old('mobile_number') }}>
                                    @error('mobile_number')
                                        <p class='text-danger'>{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>


                            <label for="docname" class="mt-3">Choose Remark<span
                                    class='text-danger fw-bolder'>*</span></label>

                            <div class="row" style="display: flex;">
                                <div class="col">

                                    <div class="form-check mt-2 p-2">
                                        <input class="form-check-input" type="checkbox" name='difficulty'
                                            value='Coversation' id="flexCheckDefault">
                                        <label class="form-check-label">
                                            Coversation
                                        </label>
                                    </div>
                                    <div class="form-check mt-2 p-2">
                                        <input class="form-check-input" type="checkbox" name='difficulty'
                                            value="appointment issue" id="flexCheckDefault">
                                        <label class="form-check-label">
                                            Appointment registration issue
                                        </label>
                                    </div>
                                </div>
                                <div class="col ">
                                    <div class="form-check mt-2 p-2">
                                        <input class="form-check-input" type="checkbox" name='difficulty'
                                            id="flexCheckDefault" value='No response'>
                                        <label class="form-check-label">
                                            No Response
                                        </label>
                                    </div>
                                    <div class="form-check mt-2 p-2">
                                        <input class="form-check-input" type="checkbox" name='difficulty'
                                            id="flexCheckDefault" value="Appointment  status issue">
                                        <label class="form-check-label">
                                            Appointment status issue
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <label for="questio" class="mt-3">Your Query</label>
                            <textarea class="col-12 mt-1" row="6" name="appoint_enquery" id="ques"
                                placeholder="Enter Your Question" value={{ old('appoint_enquery') }}>  </textarea>
                            @error('appoint_enquery')
                                <p class='text-danger'>{{$message }}</p>
                            @enderror

                            <button type="reset" class=" btn m-auto mt-3 ms-5  text-dark btn-outline-info "
                                style="width:100px;">Clear All</button>
                            <button type="submit"
                                class=" btn  float-end text-dark btn-outline-info m-auto ps-3 pe-3  mt-3 me-5 ">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
   
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>

<script>
    function openname(evt, Name) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(Name).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>

@endsection   


