<html dir="rtl">

<head>
    <title></title>
    <link rel="stylesheet" href="css/conn.css">
</head>

<body dir="rtl">
    <div>
        <h1>روضة فلسطين النموذجية
        </h1>
        <h6>نحو مستقبل أفضل </h6>
        <img src="images/rawda.png">
    </div>

    <form action="{{ url('application/store') }}" method="post">
        {{ csrf_field() }}
        <section class="sec1">
            <fieldset>
                <legend>بيانات الطفل</legend>
                <Input name="id" type="hidden">
                <div>
                    <label for="username" class="text">اسم الطفل رباعيا<span class="gfield_required">*</span></label>
                    <input type="text" name="child_name">
                </div>
                <div>
                    <label class="text">جنس الطفل</label>
                    <input type="radio" name="sex" value="male">ذكر
                    <input type="radio" name="sex" value="female">أنثى
                </div>
                <div>
                    <label for="mybirthday" class="text"> تاريخ ميلاد الطفل</label>
                    <input type="date" name="date_of_birth">

                </div>
                <div>
                    <label for="address" class="text">مكان ميلاد الطفل</label>
                    <input type="text" name="place_of_birth">
                </div>
                <div>
                    <label for="id" class="text">رقم هوية الطفل<span class="gfield_required">*</span></label>
                    <input type="text" name="id_number">
                </div>
                <div>
                    <label class="text"> المرحلة المسجل لها</label>
                    <input type="checkbox" name="level" value="listener">مستمع
                    <input type="checkbox" name="level" value="grove">بستان
                    <input type="checkbox" name="level" value="preliminary">تمهيدي
                </div>
                <div>
                    <label class="text" for="myol">ميول الطفل(ألعاب، أناشيد، مشاهدات....) </label>
                    <input type="text" name="child_inclinations">

                </div>

            </fieldset>
        </section>

        <section class="sec2">
            <fieldset>
                <legend>بيانات الأسرة</legend>
                <div>
                    <label class="text" for="job">مهنة الوالد</label>
                    <input type="text" name="father_profession" id="job">
                </div>
                <div>
                    <label class="text">مؤهله العلمي</label>
                    <input type="checkbox" name="academic_qualification_dad" value="secondary"> ثانوي
                    <input type="checkbox" name="academic_qualification_dad" value="diploma"> دبلوم
                    <input type="checkbox" name="academic_qualification_dad" value="BA"> بكالوريوس
                </div>
                <div>
                    <label for="" class="text">اسم الوالدة </label>
                    <input type="text" name="mother_name" id="">
                </div>
                <div>
                    <label for="" class="text"> مهنتها </label>
                    <input type="text" name="mother_profession" id="">
                </div>
                <div>
                    <label class="text">مؤهلها العلمي</label>
                    <input type="checkbox" name="academic_qualification_mom" value="secondary"> ثانوي
                    <input type="checkbox" name="academic_qualification_mom" value="diploma"> دبلوم
                    <input type="checkbox" name="academic_qualification_mom" value="BA"> بكالوريوس
                </div>
                <div>
                    <label class="text">الحالة الاجتماعية للوالدين<span class="gfield_required">*</span></label>
                    <input type="checkbox" name="parents_marital_status" value="married">متزوجان
                    <input type="checkbox" name="parents_marital_status" value="separate">منفصلان<br>
                </div>
                <div>
                    <label for="" class="text">ترتيب الطفل في الأسرة</label>
                    <input type="text" name="The_arrangement_of_the_child_in_the_family" id="">
                </div>
                <div>
                    <label for="" class="text">رقم هاتف أو جوال للتواصل<span class="gfield_required">*</span></label>
                    <input type="text" name="phone_number">
                </div>
                <div>
                    <label for="" class="text">الشخص المصرح له اصطحاب الطفل عند الطوارئ<span class="gfield_required">*</span></label>
                    <input type="text" name="The_person_authorized_to_accompany_the_child_in_the_emergency" id="">
                </div>
                <div>
                    <label for="" class="text">العنوان كاملا<span class="gfield_required">*</span></label>
                    <input type="text" name="full_address">
                </div>

            </fieldset>
        </section>
        <section class="sec3">
            <fieldset>
                <legend>الحالة العامة والصحية للطفل</legend>
                <div>
                    <label class="text">هل يعاني من مرض أو مشكلات صحية؟<span class="gfield_required">*</span></label>
                    <input type="checkbox" name="problem_patiant" value="yes">نعم
                    <input type="checkbox" name="problem_patiant" value="no">لا
                    <br>
                    <b class="text">
                        في حال نعم يجري التوضيح....................................................
                    </b>
                </div>
                <hr>
                <div>
                    <label class="text">هل يتعاطى علاجا؟<span class="gfield_required">*</span></label>
                    <input type="checkbox" name="taking_medication" value="yes">نعم
                    <input type="checkbox" name="taking_medication" value="no">لا
                    <br>
                    <b class="text">
                        في حال نعم يجري التوضيح....................................................
                    </b>
                </div>
                <hr>
                <div>
                    <label class="text">هل تعرض لحادث؟<span class="gfield_required">*</span></label>
                    <input type="checkbox" name="accidant" value="yes">نعم
                    <input type="checkbox" name="accidant" value="no">لا
                    <br>
                    <b class="text">
                        في حال نعم يجري التوضيح....................................................
                    </b>
                </div>
                <hr>
                <div>
                    <label class="text">هل يعاني من لازمات حركية؟<span class="gfield_required">*</span></label>

                    <input type="checkbox" name="movment_disorders" value="yes">نعم
                    <input type="checkbox" name="movment_disorders" value="no">لا
                    <br>
                    <b class="text">
                        في حال نعم يجري التوضيح....................................................
                    </b>
                </div>
                <hr>
                <div>
                    <label class="text">هل يحتاج إلى التذكير بالحمام؟<span class="gfield_required">*</span></label>

                    <input type="checkbox" name="bathroom_remember" value="yes">نعم
                    <input type="checkbox" name="bathroom_remember" value="no">لا
                </div>
                <hr>
                <div>
                    <label class="text">هل يعتمد على نفسه في استخدام الحمام؟<span class="gfield_required">*</span></label>

                    <input type="checkbox" name="self_relinat_bathroom" value="yes">نعم
                    <input type="checkbox" name="self_relinat_bathroom" value="no">لا
                </div>
                <hr>
                <div>
                    <label class="text">هل لديه مشكلات سلوكية؟<span class="gfield_required">*</span></label>

                    <input type="checkbox" name="behavioral_problems" value="yes">نعم
                    <input type="checkbox" name="behavioral_problems" value="no">لا
                    <br>
                    <b class="text">
                        في حال نعم يجري التوضيح....................................................
                    </b>
                </div>

                <hr>
                <div>
                    <label class="text">هل يحتاج مواصلات؟<span class="gfield_required">*</span></label>

                    <input type="checkbox" name="need_transportation" value="attendance">في الحضور
                    <input type="checkbox" name="need_transportation" value="return">في العودة
                    <input type="checkbox" name="need_transportation" value="come_back">حضور وعودة


                </div>


            </fieldset>
        </section>

        <input type="submit" value="إرسال" id="sub">

        <h3>فلسطين - قطاع غزة - رفح</h3>
        <h3> هاتف:+ 972598143777</h3>
        <h3> rawdet.falasteen@gmail.com</h3>
    </form>

</body>

</html>