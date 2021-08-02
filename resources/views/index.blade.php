<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الصفحة الرئيسية</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href={{ asset('css/style.css')}}>

</head>

<body dir="rtl">

    <header>

        <nav class="navbar navbar-expand-lg navbar-dark ">




            <div class="container">
                <h2 id="top"></h2>
                <a class="top" href="#top"><i class="fas fa-arrow-circle-up" aria-hidden="true"></i></a>
                <a class="navbar-brand" href="#">
                    <img src="images/rawda.jpg"> روضة فلسطين النموذجية</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('index')}}">الصفحة الرئيسية</a>
                            <!-- <a class="nav-link active" aria-current="page" href="index.html">الصفحة الرئيسية</a> -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('index')}}#who">من نحن</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('index')}}#msg">الرؤية والرسالة</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('index')}}#goals">الأهداف</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('index')}}#featured">الأركان والزوايا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('index')}}#play">الأنشطة
                                والفعاليات</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                الخدمات الإلكترونية
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{route('login')}}" target="_blank">خدمات الموظفين</a></li>
                                <li><a class="dropdown-item" href="{{route('login')}}" target="_blank">خدمات أولياء الأمور</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{route('conn')}}" target="_blank">طلب التحاق</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center breaking-news bg-white">
                    <marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                        <div class="d-flex justify-content-between">

                            <!-- من هنا  -->
                            <div class="food-tricker-item d-flex flex-column justify-content-center align-items-center">
                                <p class="text-uppercase">تعلن روضة فلسطين النموذجية عن بدأ التسجيل في الفصل الدراسي الجديد</p>
                            </div>

                            <!-- الى هنا  -->




                        </div>
                    </marquee>
                </div>
            </div>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>

                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9" aria-label="Slide 10"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="10" aria-label="Slide 11"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="11" aria-label="Slide 12"></button>

            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <video loop autoplay muted>
                        <source src="images/%D8%A7%D8%B9%D9%84%D8%A7%D9%86%20%D8%A7%D9%84%D8%B1%D9%88%D8%B6%D8%A9%202021.mp4" type="video/mp4">
                        <source src="images/%D8%A7%D8%B9%D9%84%D8%A7%D9%86%20%D8%A7%D9%84%D8%B1%D9%88%D8%B6%D8%A9%202021.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="carousel-item">
                    <img src="images/%D9%A2%D9%A0%D9%A1%D9%A8%D9%A1%D9%A2%D9%A1%D9%A7_%D9%A0%D9%A9%D9%A2%D9%A9%D9%A3%D9%A5.jpg" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="images/00.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/play%20(11).jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/play%20(6).jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/din%20(12).jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/%D8%AA%D8%AE%D8%B1%D8%AC.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/play%20(22).jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/6.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/5.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/7.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/8.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/play%20(4).jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>

    <section class="about-us text-center">
        <div class="container">
            <div id="who">
                <h1>من نحن؟</h1>
                <p>
                    تعد رياض الأطفال اللبنة الأولى في تكوين شخصية الأطفال وبيته الثاني، فمن هذا المنطلق تأسست روضة فلسطين في
                    1-9-2013 م،
                    والتي تقع في قطاع غزة (محافظة رفح)، وهي مرخصة من وزارة التربية والتعليم العالي، وتبلغ مساحة المبنى
                    600م،
                    ويقع
                    في منطقة هادئة بعيدا عن الشارع الرئيسي ومصادر التلوث، وهو مهيأ لدخول عربات ذوي الاحتياجات الخاصة.
                    <br>
                    يتكون
                    المبنى
                    من عشرة غرف
                    صفية: صف مستمع، ثلاث صفوف لمرحلة البستان، وأربعة صفوف لمرحلة التمهيدي، ويوجد فيها غرفة إضافية تستخدم لأغراض مختلفة، وغرفة
                    للإدارة.هذا كما أن مساحة الغرف الصفية تتناسب مع عدد الأطفال داخل الصف.
                    ويتكون أيضًا من ساحة داخلية وساحات خارجية واسعة،
                    ومقصف و6 حمامات، وتتوفر مصادر
                    للإنارة
                    كافية،
                    وتوجد مصادر بديلة عن الكهرباء مثل: الطاقة الشمسية، ومولدات الكهرباء، كما تتوفر التهوية الجيدة داخل الغرف.
                </p>
                <p>
                    تلتزم الروضة بالمنهاج الموحد التابع لوزارة التربية والتعليم، كما أنها تعتمد سياسية التعلم عن طريق اللعب
                    و
                    تستخدم
                    وسائل حديثة في التعليم كشاشات التلفاز المتوفرة في كل صف حيث يتم توثيق المعلومات من خلالها عن طريق عرض ( سور القرأن
                    ،
                    والقصص الدينية ,
                    والأدعية، والأعداد والحروف باللغتين العربية والإنجليزية، وسلوك تعليمية، وأناشيد الأطفال ).
                </p>

                <p>
                    تتميز الروضة بأنها تراعي أن لا يزيد عدد الأطفال في الصف الواحد عن خمسة عشر طفلًا، وبذلك تستطيع المربية
                    توزيع
                    اهتمامها على
                    جميع الأطفال.
                    وتتميز أيضًا بإمتلاكها عدة سيارات مرخصة موزعة على عدة مناطق تقوم بنقل الأطفال؛ لتيسر عملية النقل.
                </p>

                <p>
                    يتم عمل خطة سنوية للروضة وكذلك خطط شهرية يتم تطويرها وتعديلها حسب متطلبات المنهج، يتم تطبيقها والتعامل معها على هيئة أركان تعليمية مثل:
                    ركن الطباخ الصغير، والمعلم الصغير، والقارئ الصغير، والعالم الصغير، بالإضافة إلى ركن المهن.

                    كما يتم عمل أوراق عمل
                    للأطفال،
                    وتستضيف الروضة أطباء وجهات مختصة بشكل دوري لعمل فحص طبي للأطفال (سمع، نطق، نظر، أسنان، طول ووزن ).
                    يتم التواصل دوريًا مع الأهالي من خلال الاجتماعات ومواقع التواصل الإجتماعي.
                </p>
            </div>
        </div>
    </section>

    <section class="visionAndMission text-center">
        <div class="container">
            <div id="msg">
                <h1>الرؤية والرسالة</h1>
                <div class="row">
                    <div class="col  col-md-6">
                        <img style="height: 300px; width: 100%; margin-top:65px; 6" src="images/FB_IMG_1591882577988.jpg" alt="">

                    </div>
                    <div class="col  col-md-6">
                        <h2>الرؤية</h2>
                        <h5> بداية سليمة بداية قوية
                        </h5>
                        <p>
                            تسعى روضة فلسطين إلى خلق بيئة تعليمية نموذجية تعتمد على بناء قدرات الأطفال، وتنمية التفكير الإبداعي؛ مما يتيح لهم فرصة النمو في بيئة متمحورة حولهم، تعزز من التنوع والتطور اللغوي.
                        </p>
                        <p>
                            تتطلع الروضة إلى تنشئة طفل متوازن ومتميز ومبدع ومحب لوطنه وقادر على إكتساب المعارف الأساسية بعقله وحواسه، ومستوعب لتكنولوجيا العصر ومتفاعل مع مجتمعه بفعالية.
                        </p>
                        <h2>الرسالة</h2>
                        <p>
                            مؤسسة تعليمية خاصة تعمل في مجال تطوير وبناء قدرات الأطفال من خلال مساحات صديقة، باستخدام أساليب التعلم النشط والتعلم عن طريق اللعب والتعليم المبني على التعلم النشط.
                        </p>

                    </div>
                </div>
            </div>
        </div>


    </section>

    <section class="goals text-center">
        <div class="container">
            <div id="goals">
                <h1>
                    الأهداف
                </h1>

                <div class="row">
                    <div class="col  col-md-6">
                        <ul>
                            <li>تطوير مهارات الأطفال في مجال التفكير الابداعي.</li>
                            <li>تعزيز أساليب التعلم النشط لدى الطفل.</li>
                            <li>رفع المستوى التعليمي والارتقاء بجودة التعليم لدى الأطفال.</li>
                            <li> الاهتمام بتطوير القدرات الفردية.</li>
                            <li>دمج الأطفال في الأنشطة الترفيهية وتنمية مواهبهم.</li>
                            <li>تطوير أداء الأطفال لتعبير عن مواهبهم.</li>
                            <li>تعديل سلوكيات الأطفال.</li>
                            <li>توفير الدعم النفسي للأطفال.</li>
                            <li>توظيف اللعب والدراما في عملية التعليم والتعلم.</li>
                            <li>اكساب الطفل القدرة على البحث والاستكشاف للوصول إلى المعلومة بمفرده.</li>
                            <li>تفعيل استخدام التكنولوجيا في تعليم الأطفال.</li>
                            <li>إعداد طفل قادر على تحقيق المشاركة المجتمعية ليكون عنصر فعال في المجتمع.</li>

                        </ul>
                    </div>
                    <div class="col  col-md-6">
                        <img style="height: 300px; width: 100%;margin-top:20px;" src="images/%D8%AA%D8%AE%D8%B1%D8%AC1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ############################# Start Featured Work ############################# -->
    <section class="featured-work text-center">
        <div class="container">
            <div id="featured">
                <h1>الأركان والزوايا</h1>
                <p>
                    هي جزء مهم من العملية التربوية الحديثة حيث أنها ترتكز على التعليم الذاتي للطفل، وتوفر مناخ حقيقي ومناسب للتعلم النشط، وتكمن أهميتها في تعزيز ثقة الطفل بنفسه، وتنمية شخصيته، والشعور بالمسؤولية، وفهم نقاط القوة والضعف لدى الطفل، وتنمية قدراته والتفكير الإبداعي لديه، وتعد وسيلة للإتصال والتواصل، واكتساب الكثير من القيم والخبرات السلوكية من خلال مهارة التعلم الذاتي، بالإضافة تعطي جو من المتعة لدى الطفل. </p>
                <ul class="list-unstyled row">
                    <li data-class="all" class="active col-md">كل الأركان</li>
                    <li data-class=".websites" class="col-md">الطباخ الصغير</li>
                    <li data-class=".graphic_design" class="col-md">العالم الصغير</li>
                    <li data-class=".marketing" class="col-md">المعلم الصغير</li>
                    <li data-class=".arting" class="col-md">الفن</li>
                    <li data-class=".marketing" class="col-md">البناء والتركيب</li>
                    <li data-class=".android" class="col-md"> المهن</li>
                </ul>
            </div>

            <div class="shuffle-images">
                <div class="row ">
                    <div class="col-md">
                        <img class="websites" src="images/featured-work/cooking2.jpg" alt="">
                    </div>

                    <div class="col-md">
                        <img class="arting" src="images/featured-work/arts.jpg" alt="">
                    </div>


                    <div class="col-md">
                        <img class="graphic_design" src="images/featured-work/Sciences3.jpg" alt="">
                    </div>

                    <div class="col-md">
                        <img class="graphic_design" src="images/featured-work/Sciences4.jpg" alt="">
                    </div>

                </div>


                <div class="row">


                    <div class="col-md">
                        <img class="arting" src="images/featured-work/arts3.jpg" alt="">
                    </div>

                    <div class="col-md">
                        <img class="websites" src="images/featured-work/cooking4.jpg" alt="">
                    </div>

                    <div class="col-md">
                        <img class="marketing" src="images/featured-work/b1.jpg" alt="">
                    </div>

                    <div class="col-md">
                        <img class="android" src="images/featured-work/job3.jpg" width="100px" height="157px" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <img class="graphic_design" src="images/featured-work/Sciences.jpg" alt="">
                    </div>


                    <div class="col-md">
                        <img class="android" src="images/featured-work/job2.jpg" height="157px" alt="">
                    </div>


                    <div class="col-md">
                        <img class="arting" src="images/featured-work/arts2%20(2).jpg" height="157px" alt="">
                    </div>
                    <div class="col-md">
                        <img class="android" src="images/featured-work/job7.jpg" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <img class="graphic_design" src="images/featured-work/Sciences5.jpg" height="157px" alt="">
                    </div>


                    <div class="col-md">
                        <img class="android" src="images/featured-work/" height="157px" alt="">
                    </div>


                    <div class="col-md">
                        <img class="websites" src="images/featured-work/cooking5.jpg" height="157px" alt="">
                    </div>
                    <div class="col-md">
                        <img class="marketing" src="images/featured-work/b2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- ############################# End Featured Work ############################# -->
    <section class="featured-work text-center">
        <div class="container">
            <div id="play">
                <h1>الأنشطة والفعاليات</h1>
                <p>
                    تهدف إلى تنمية الخبرات الشخصية والإجتماعية والوطنية والدينية لدى الطفل وتهيئة الجو دراسي يساعده على الإبداع والإبتكار والتأقلم مع العالم الخارجي.
                </p>

                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="images/%D8%AA%D8%AE%D8%B1%D8%AC1.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/%D8%AA%D8%AE%D8%B1%D8%AC.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/3.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/ta%20(1).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/ta%20(2).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/ta%20(3).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/ta%20(4).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/ta%20(5).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/ta%20(6).jpg" class="d-block1 w-100" alt="...">
                                    </div>



                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">حفلات تخرج</h5>
                                <p class="card-text">عمل حفلات تخرج لأفواج الروضة.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="images/din%20(12).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/din%20(13).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/din%20(11).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/din%20(3).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/din%20(4).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/din%20(14).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/din%20(5).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/din20.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/din%20(7).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/din%20(8).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/din%20(9).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/din%20(10).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/din15.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/din16.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/din17.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/din18.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/din19.jpg" class="d-block1 w-100" alt="...">
                                    </div>

                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">فعاليات دينية</h5>
                                <p class="card-text"> غرس القيم الدينية والأخلاق الحميدة وترسيخ أسس الإيمان لدى الطفل من خلال المشاركة في عدة مناسبات دينية:( المولد النبوي، رأس السنة الهجرية، الإسراء والمعراج، شهر رمضان، الأعياد الإسلامية، موسم الحج).</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="images/_K6A1847.JPG" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/patriotism1.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/patriotism2.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/patriotism3.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/patriotism4.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/patriotism5.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/patriotism6.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/patriotism7.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/patriotism8.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/patriotism9.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/patriotism10.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/patriotism11.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/patriotism12.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/patriotism13.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/patriotism14.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/patriotism15.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/patriotism16.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/patriotism17.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">فعاليات وطنية</h5>
                                <p class="card-text">تهدف إلى غرس القيم الوطنية في قلوب الأطفال، وتعزيز حب الوطن، والإنتماء إليه من خلال المشاركة في عدة أنشطة وطنية مثل: يوم التراث الفلسطيني، يوم الأرض، يوم الاستقلال، ذكرى الشهيد أبو عمار، موسم جني الزيتون، يوم الأسير الفلسطيني، وفعاليات أخرى لنصرة القدس والمسجد الأقصى.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="images/m%20(1).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/m%20(10).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/m%20(11).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/m%20(12).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/m%20(13).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/m%20(14).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/m%20(15).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/m%20(16).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/m%20(17).jpg" class="d-block1 w-100" alt="...">
                                    </div>

                                    <div class="carousel-item">
                                        <img src="images/m%20(2).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/m%20(20).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/m%20(22).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/m%20(23).jpg" class="d-block1 w-100" alt="...">
                                    </div>

                                    <div class="carousel-item">
                                        <img src="images/m%20(25).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/m%20(26).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/m%20(27).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/m%20(3).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/m%20(4).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/m%20(5).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/m%20(6).jpg" class="d-block1 w-100" alt="...">
                                    </div>



                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">فعاليات اجتماعية</h5>
                                <p class="card-text">تهدف إلى تعريف الأطفال ببعض المناسبات الإجتماعية وتوثيق صلة الطفل بأسرته والمجتمع مثل: المشاركة في يوم الأم، يوم العالمي للطفل، يوم الطفل الفلسطيني، يوم المعلم، يوم المرأة، ويوم العمال. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="images/meet%20(4).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/meet%20(3).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/meet%20(2).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/meet.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/meet1.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">نداوات تثقيفية وتوعوية لأولياء الأمور</h5>
                                <p class="card-text">عقد نداوات تثقيفية وصحية وإرشادية لأهالي الأطفال.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="images/doctor%20(1).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <!--
    <div class="carousel-item">
      <img src="images/doctor%20(10).jpg" class="d-block1 w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/doctor%20(11).jpg" class="d-block1 w-100" alt="...">
    </div>
       <div class="carousel-item">
      <img src="images/doctor%20(12).jpg" class="d-block1 w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/doctor%20(13).jpg" class="d-block1 w-100" alt="...">
    </div>
       <div class="carousel-item">
      <img src="images/doctor%20(14).jpg" class="d-block1 w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/doctor%20(15).jpg" class="d-block1 w-100" alt="...">
    </div>
      -->
                                    <div class="carousel-item">
                                        <img src="images/doctor%20(2).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/doctor%20(3).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/doctor%20(4).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/doctor%20(5).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/doctor%20(6).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/doctor%20(7).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/doctor%20(8).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/doctor%20(9).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">فحوصات طبية للأطفال</h5>
                                <p class="card-text"> استضافة أطباء ومؤسسات طبية وجهات مختصة لعمل فحوصات طبية للأطفال مثل: فحص سمع ونطق، ونظر، وقياس الوزن والطول، فحص أسنان، وفحص عام.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="images/play%20(23).jpg" class="d-block1 w-100 " alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play1.jpg" class="d-block1 w-100 " alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play%20(11).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play%20(27).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play%20(1).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play%20(10).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play2.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play%20(25).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item ">
                                        <img src="images/play3.jpg" class="d-block1 w-100 " alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play%20(26).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play%20(12).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play4.jpg" class="d-block1 w-100 " alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play%20(13).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play%20(14).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play5.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play6.jpg" class="d-block1 w-100 " alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play8.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play9.jpg" class="d-block1 w-100 " alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play%20(15).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play%20(16).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play10.jpg" class="d-block1 w-100 " alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play11.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play12.jpg" class="d-block1 w-100 " alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play13.jpg" class="d-block1 w-100 " alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play14.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play%20(17).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play%20(18).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play15.jpg" class="d-block1 w-100 " alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play16.jpg" class="d-block1 w-100 " alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play%20(19).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play17.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play18.jpg" class="d-block1 w-100 " alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/19.jpg" class="d-block1 w-100 " alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play%20(20).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play%20(21).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/20.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play%20(24).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/1.jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play%20(3).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play%20(4).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play%20(5).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play%20(6).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play%20(7).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play%20(8).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play%20(28).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/play%20(9).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">أيام ترفيهية </h5>
                                <p class="card-text"> تقديم الدعم النفسي للأطفال، تنمية روح التعاون مع الأخرين عن طريق إستضافة فرق ترفيهية، وعمل أيام مفتوحة للأطفال.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="images/rihla%20(1).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/rihla%20(10).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/rihla%20(11).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/rihla%20(12).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/rihla%20(13).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/rihla%20(14).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/rihla%20(15).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/rihla%20(16).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/rihla%20(17).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/rihla%20(18).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/rihla%20(19).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/rihla%20(2).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/rihla%20(20).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/rihla%20(21).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/rihla%20(22).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/rihla%20(23).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/rihla%20(24).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/rihla%20(25).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/rihla%20(26).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/rihla%20(3).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/rihla%20(4).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/rihla%20(5).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/rihla%20(6).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/rihla%20(7).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/rihla%20(8).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/rihla%20(9).jpg" class="d-block1 w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">رحلات</h5>
                                <p>
                                    - رحلات ترفيهية مع الأهالي.

                                </p>
                                <p>- رحلات تعليمية<br>

                                    (زيارات ميدانية لأماكن معينة تهدف لتطبيق عملي للجانب النظري، وتشمل رحلات إلى أماكن طبيعية أو حدائق أو أماكن أثرية أو تاريخية أو زيارة مصانع أو مؤسسات).</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col  col-md-4">

                    <ul class="list-unstyled">
                        <li>روضة فلسطين النموذجية</li>
                        <li>
                            <ul class="list-unstyled d-flex">

                                <li><a class="footer-link1" href="https://www.facebook.com/rawdet.falasteen/"><i class="fab fa-facebook"></i></a></li>
                                <li><a class="footer-link1" href="https://instagram.com/rawdet.falasteen?"><i class="fab fa-instagram"></i></a></li>
                                <li><a class="footer-link1" href="https://youtube.com/channel/UC8TWOJXJ3w1OCBHn1jvx8Uw"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>



                <div class="col  col-md-4">
                    <ul class="list-unstyled">
                        <li><a href="index.html" class="footer-link">الصفحة الرئيسية</a></li>
                        <li><a href="{{route('call')}}" class="footer-link">إتصل بنا</a></li>
                        <li><a href="login1.html" target="_blank" class="footer-link">تسجيل الدخول</a></li>
                        <li><a href="#" class="footer-link">التحق بنا</a></li>
                    </ul>
                </div>

                <div class="col  col-md-4">
                    <ul class="list-unstyled">
                        <li>فلسطين - غزة - رفح</li>
                        <li><a href="tel:+9728143777" class="footer-link">0598143777</a></li>
                        <li><a href="mailto:rawdet.falasteen@gmail.com" class="footer-link">rawdet.falasteen@gmail.com</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>


    <script src="{{ URL::to('js/jQuery.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- <script src="{{ URL::to('js/app.js') }}"></script> -->
    <script src={{ asset('js/app.js')}}></script>
    <!-- <link rel="stylesheet" href={{ asset('css/style.css')}}> -->

</body>

</html>