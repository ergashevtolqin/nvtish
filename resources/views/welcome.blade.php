<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="novatio">
    <meta name="keywords" content="novatio">
    <meta name="viewport" content="width=device-width, initial-scale=1.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novatio</title>
    <link rel="shortcut icon" href="{{asset('work/images/logog/favicon2.png')}}" type="image/png">

    <!-- Google Font -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Montserrat"
    rel="stylesheet"> --}}

    <!-- Css Styles -->
    <link href="{{ asset('work/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('work/css/font-awesome.min.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('work/css/elegant-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('work/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('work/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('work/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('work/css/slicknav.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('work/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('work/css/mine.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&family=Oswald&family=Raleway&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <style type="text/css">
        .video-responsive{
          overflow:hidden;
          padding-bottom: 56.25%;
          position:relative;
          height: 0;
      }
      .video-responsive iframe{
          left:0;
          top:0;
          height:100%;
          width:100%;
          position:absolute;
      }
      .timeline {
        background: var(--primary-color);
        margin: 20px auto;
        padding: 20px;
        width: 70%;
        padding-right: 3%;
        }

        @media only screen and (max-width: 1000px) {
            .timeline {
        background: var(--primary-color);
        margin: 20px auto;
        padding: 20px;
        width: 100%;
        /* padding-right: 3%; */
        }
}

/* Outer Layer with the timeline border */
.outer {
  border-left: 2px solid #333;
}

/* Card container */
.card {
  position: relative;
  margin: 0 0 20px 20px;
  padding: 10px;
  background: rgb(255, 255, 255);
  /* color: gray; */
  border-radius: none !important;
  /* max-width: 400px; */
}

/* Information about the timeline */
.info {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.info p{
    font-size: 28px;
}


@media only screen and (max-width: 1000px) {
    .info p{
    font-size: 17px;
}
}
/* Title of the card */
.title {
  color: orangered;
  position: relative;
}

/* Timeline dot  */
.title::before {
  content: "";
  position: absolute;
  width: 10px;
  height: 10px;
  background: white;
  border-radius: 999px;
  left: -36px;
  border: 3px solid #7aa423;
}
      </style>

</head>

<body>
    <!-- Page Preloder -->
    {{-- <div id="preloder">
        <div class="loader"></div>
    </div> --}}
      
    <!-- Header Section Begin -->
    <a href="{{route('work')}}">
        <picture>
            <source media="(min-width: 1100px)" srcset="{{asset('work/images/new_images/6.png')}}">
            <source media="(min-width: 1px)" srcset="{{asset('work/images/new_images/7.png')}}">
            <img src="{{asset('work/images/new_images/6.png')}}" alt="error"  style="width: 100%;">
        </picture>
    </a>
    <!-- Header Section End -->


    <section id="mission">
        <div class="marginal">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <img src="{{asset('work/images/new_images/title.png')}}">
                    <p class="txtma">Har bir inson o’ziga yoqqan 
                        <span class="highlight">ish topishni</span> orzu qiladi. Ish jarayonida uzluksiz 
                        <span class="highlight">rivojlanishda</span> esa unga ishda doimo yangi qirralarni kashf etish va ularni zabt etish yordam beradi. Eng asosiysi esa u 
                        <span class="highlight">oddiygina hodim emas</span>, balki 
                        <span style="border-bottom: 3px dotted grey; text-decoration: none;">ELCHI bo’lishidadir.</span>
                    </p>
                    <a href="https://t.me/novatioish_bot"><img src="{{asset('work/images/new_images/button.png')}}" class="butto"></a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="bortik pads">
                     <div class="video-responsive">
                    <iframe width="1280" height="720" src="https://www.youtube.com/embed/OBA98Pnj0Wk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; " allowfullscreen></iframe>
                     </div>
                     {{-- <img src="{{asset('work/images/new_images/txt.png')}}" class="widt"> --}}
                     <div style="color: white;font-size:27px;margin-top:30px;padding-bottom:30px">
                        <span >1. Novatioda ishni nima uchun sevasiz <span style="color: yellow">?</span></span><br>
                        <span>2. Nega har kuni ishga chiqasiz <span style="color: yellow">?</span></span><br>
                        <span>3. Kompaniyada ishlash yaxshimi yoki bir o'zimi <span style="color: yellow">?</span></span>
                     </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="marginale bordi">
        <div style="margin-left: 5%; margin-right: 5%" >
            <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title" style="padding-top: 3%">
                            <h1 class="txtlo">Elchilar Izlayapmiz</h1>
                        </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6" >
                        <div class="counter__item">
                            <div class="counter__item__number">
                                <img src="{{asset('work/images/new_images/p1.webp')}}" class="imgwid">
                                <h4 class="whi">Elchi</h4><span style="color: white; text-align: left; font-weight: 200;" class="fglb">Bozorlar, Do’konlar va Aptekalarda Mijozlarimiz bilan ishlaydi, mahsulotlarni tushuntiradi va kassada ham ishlashi mumkin</span>
                            </div>  
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__number">
                                <img src="{{asset('work/images/new_images/p2.webp')}}" class="imgwid">
                                <h4 class="whi">Supervayzer</h4><span style="color: white; text-align: left; font-weight: 200;" class="fglb">Ishni tashkillashtiradi, mijozlar sifatli maslahat olishini va elchilarni rivojlantirishni ta’minlaydi</span>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <section id="one" class="goer" align="center">
        <div class="about__item">
            <p class="boredone">
                    <span class="txth">«Novatio» tarixi</span><br>
                    <span class="highlight">Novatio – 2005 yil Toshkentda tashkil etilgan.</span> Insonlarga ko’p asrlik Hikmatlar va Yovvoyi Giyohlar yordamida sog’lom hayot va ichki hotirjamlikka, ya’ni Tana va Ruh muvozanatiga erishishiga yordam berish. 
                    <span class="highlight">Va bu bizga nasib qilmoqda:</span> 
            </p>
                    {{-- <div class="imgq">
                        <picture>
                            <source media="(min-width: 650px)" srcset="{{asset('work/images/new_images/3.png')}}">
                            <source media="(min-width: 1px)" srcset="{{asset('work/images/new_images/4.png')}}">
                            <img src="{{asset('work/images/new_images/3.png')}}" alt="error"  style="width: 100%;">
                        </picture>
                    </div> --}}
                    <div class="timeline boredone">
                        <div class="outer">
                          <div class="card">
                            <div class="info">
                              <h3 class="title"></h3>
                              <p>O'rta Osiyoda birinchi Nutrisevtik kompaniya </p>
                            </div>
                          </div>
                          <div class="card">
                            <div class="info">
                              <h3 class="title"></h3>
                              <p>2010-yil Novatio Qozog'istonda ham ochilgan </p>
                            </div>
                          </div>
                          <div class="card">
                            <div class="info">
                              <h3 class="title"></h3>
                              <p>Rossiyada ham Novatio mahsulotlari ishlab chiqarilgan </p>
                            </div>
                          </div>
                          <div class="card">
                            <div class="info">
                              <h3 class="title"></h3>
                              <p>Bugungi kunda 5 milliondan ortiq mijozlarga da'vo topishida Novatio yordam bergan </p>
                            </div>
                          </div>
                          <div class="card">
                            <div class="info">
                              <h3 class="title"></h3>
                              <p>O'zbekistonda ilk bor 100% pul qaytarish kafolati (bizga mijoz duosi kerak) </p>
                            </div>
                          </div>
                          <div class="card">
                            <div class="info">
                              <h3 class="title"></h3>
                              <p>O'zbekistonda ilk bor kompaniya tomonidan bepul shifokor maslahati - Call Center</p>
                            </div>
                          </div>
                          <div class="card">
                            <div class="info">
                              <h3 class="title"></h3>
                              <p>2017-yil GMP (Yevropaning yaxshi ishlab chiqarish amaliyoti) standartlari asosida qurilgan O'rta Osiyoda ilk zavod</p>
                            </div>
                          </div>
                        </div>
                      </div>
            <p class="boredone">
                    <span class="highlight">Biz olg’a yurishimiz uchun bizga ishidan rohat oladigan odamlar kerak.</span> Biz ularni noldan to’liq o’qitishga va rivojlantirishga tayyormiz. Buni amalga oshirish uchun bizda 
                    <span style="font-weight: 800">Novatio Akademiyasi</span> yaratilmoqda va barcha ish jarayonlari Standartlarga keltirilmoqda. Uzluksiz O’qish va Kuchli Tizim asosidagina biz o’sishimiz mumkin. 
                    <span style="border-bottom: 3px dotted grey; text-decoration: none;">Jamoamizda o’zaro Hurmat va o’zligini ifodalash biz uchun muhim.</span> 
            </p>
                    <div class="imgq">
                        <picture>
                            <source media="(min-width: 650px)" srcset="{{asset('work/images/new_images/5.png')}}">
                            <source media="(min-width: 1px)" srcset="{{asset('work/images/new_images/8.webp')}}">
                            <img src="{{asset('work/images/new_images/5.png')}}" alt="error"  style="width: 100%;">
                        </picture>
                    </div>
        </div>
    </section>











    <section id="two" class="goer" align="center">
         <div class="about__item">
                        
                        <p class="boredone"><span class="txth">Mehr va O’zaro Hurmat</span><br>O’zaro mehr va hodimlarga Insoniy munosabat <span class="highlight">Novatio negizida (DNKsida)</span> yotadi. Oddiy haydovchi, Supervayzor yoki Menejer – faqatgina ish majburaiyatlaridir, bir biriga qanday munosabatda bo’lishi kerakligini belgisi emas. <span class="highlight">Tizim oldida barcha teng.</span> Insoniy hurmat va e’tibor esa – bu ish normasi.<br><br>Bizda faqatgina inson o’z ishini qanday uddalayotgani muhim, hatolarini tuzatoyatgani va yaxshiroq ishlashni o’rganishi. <span class="highlight">Shuning uchun Novatio hodimlari har kuni</span> ishga chiqishadi va ularni <span class="highlight">Qadrlashimizni bilishadi.</span> <br><br><span class="highlight">Mehr va o’zaro Hurmat</span> amalda hamma uchun ishlashi uchun biz <span style="border-bottom: 3px dotted grey;
    text-decoration: none;">Standartlarga jiddiy rioya etamiz.</span></p>
    <div class="imgq">
        <picture>
   <source media="(min-width: 650px)" srcset="{{asset('work/images/new_images/9.png')}}">
   <source media="(min-width: 1px)" srcset="{{asset('work/images/new_images/10.webp')}}">
   <img src="{{asset('work/images/new_images/10.webp')}}" alt="error"  style="width: 100%;">
</picture>
</div>
                    </div>
    </section>















    <section id="three" class="goer" class="product spad" align="center">
         <div class="about__item">
                        <div class="imgst" align="left"> <picture>
   <source media="(min-width: 650px)" srcset="{{asset('work/images/new_images/11.png')}}">
   <source media="(min-width: 1px)" srcset="{{asset('work/images/new_images/12.png')}}">
   <img src="{{asset('work/images/new_images/11.png')}}" alt="error"  style="width: 100%;">
</picture></div>
                        <p class="boredone" style="margin-top: 1%;">Uyning fundamentiga semon quyishda qoliplardan foydalansa semon siz istagan shaklni oladi, aks holda hamma semoningiz tarvaqaylab chetlarga oqib uvol bo’ladi. <br><br>Bizning ishimizda ham <span class="highlight">Standartlar aynan shu qoliplarga o’hshaydi,</span> agar ular bo’lmasa barcha qilgan mehnatingiz nafaqat zoye ketadi, aksincha yana boshqalarga zarar ham keltiradi.
</p>
    <div class="imgq">
        <picture>
   <source media="(min-width: 650px)" srcset="{{asset('work/images/new_images/13.png')}}">
   <source media="(min-width: 1px)" srcset="{{asset('work/images/new_images/14.png')}}">
   <img src="{{asset('work/images/new_images/13.png')}}" alt="error"  style="width: 100%;">
</picture>
</div>


                         <p class="boredone" style="margin-top: 1%;">Shuning bizda hamma Tizim Standartlariga aqldan ozish darajasigacha amal qilamiz. Tizim oldida hamma teng. Ular haydovchi, elchi, menejer va rahbarda ham bor. Standartlar na Jins va na Yosh tanlamaydi (erkakmi ayolmi, yoshmi qarimi o’zgarmaydi). Sotuvchi yigitlar sotuvchi qizlar bilan barovariga ish joyini yig’ishtiradi.<br><br>Har bir vaziyat uchun bizda (algoritm) harita bor: dorilarni qanday tahlash, mijozni qanday kutib olish, gaplashih, yangiliklarni tavsiya qilish. Shuning uchun yangi kelganlar ham o’zini yaxshi his etishadi. Treningni o’tib, qoidalarni yodlasa bas, tajribali hodimlar bilan bir hilda ishlab yuqori cho’qqilarga erishishi hech gap emas.</p>
                          <div class="imgq">
        <picture>
   <source media="(min-width: 650px)" srcset="{{asset('work/images/new_images/15.png')}}">
   <source media="(min-width: 1px)" srcset="{{asset('work/images/new_images/16.png')}}">
   <img src="{{asset('work/images/new_images/15.png')}}" alt="error"  style="width: 100%;">
</picture>
</div>
                        <p class="boredone" style="margin-top: 1%;">Bu barchasi ishni qulay qiladi: har bir hodim qaysi vaziyatda nima qilishin aniq biladi, bilmagan holatida esa kimga murojaat qilishini biladi. Barcha jarayonlar standartlashtirishga harakat qilayotgan bo’lsakda, shu bilan bir qatorda hodimlar o’zligini ifoda qilishi uchun barcha sharoitlar yaratilmoqda.</p>

                    </div>
    </section>







   <section id="four" class="goer" align="center">
         <div class="about__item">
                        
                        <p class="boredone"><span class="txth">O’zligini ifoda qilish</span><br>Bizga robot-insonlar qiziq emas – biz har bir hodim o’zligini ifodalab, komillikka sari intilishini va umumiy ishga hissasini qo’shishimi istaymiz. Tashqi ko’rinishingiz, sochingiz rangi, yoshingiz va hayotdagi qiyinchiliklaringizdan qat’iy nazar biz sizni qabul qilamiz.<br><br><span class="highlight">Novatio sizga sog’lom yashashingiz va komillikka sari qadam qo’yishingizga yordam berishi mumkin.</span></p>
    <div class="imgq">
        <picture>
   <source media="(min-width: 650px)" srcset="{{asset('work/images/new_images/17.png')}}">
   <source media="(min-width: 1px)" srcset="{{asset('work/images/new_images/18.png')}}">
   <img src="{{asset('work/images/new_images/17.png')}}" alt="error"  style="width: 100%;">
</picture>
</div>                 
                        <p class="boredone" style="margin-top: 1%;">Har hafta turli qo’shimcha o’yin-musobaqalar o’tkaziladi va siz istaganida o’zingizni ko’rsatishingiz va boshqalardan nima bilan ajralib turishingizni amaliy tomondan namoyon qilishingiz mumkin. Sizni butun O’zbekiston va hatto chet el davlatlarda ham odamlar tanish boshlaydi. O’zingizni istaganizcha to’liq namoyon qilishingiz mumkin yoki aksincha qatnashmasangiz ham bo’ladi.</p>
                    </div>
    </section>





    <section id="five" class="goer" align="center">
         <div class="about__item">
                        
                        <p class="boredone"><span class="txth">O’yinlarni hamma... Sevadi</span><br>Dunyo bo’yicha unikal biznes o’yin tizimi ishlab chiqilgan. Ya’ni tizimizdagi ko’plab jarayonlar sizga oson bo’lishi uchun o’yin shaklida yaratilgan.</p>
    <div class="imgq">
        <picture>
   <source media="(min-width: 650px)" srcset="{{asset('work/images/new_images/19.png')}}">
   <source media="(min-width: 1px)" srcset="{{asset('work/images/new_images/20.png')}}">
   <img src="{{asset('work/images/new_images/19.png')}}" alt="error"  style="width: 100%;">
</picture>
</div>                 
                        <p class="boredone" style="margin-top: 1%;">Har hafta turli qo’shimcha o’yin-musobaqalar o’tkaziladi va siz istaganida o’zingizni ko’rsatishingiz va boshqalardan nima bilan ajralib turishingizni amaliy tomondan namoyon qilishingiz mumkin. Sizni butun O’zbekiston va hatto chet el davlatlarda ham odamlar tanish boshlaydi. O’zingizni istaganizcha to’liq namoyon qilishingiz mumkin yoki aksincha qatnashmasangiz ham bo’ladi.</p>
                    </div>
    </section>





      <section id="six" class="goer" align="center">
         <div class="about__item">
                        
                        <p class="boredone"><span class="txth">Eng qiziqarlisi</span><br>Har oy boshida esa har bir yutgan jamoa Toshkent restoranlarida Novatio asoschisi bilan ziyofatga taklif qilinadi. Eng zo’rlariga esa ko’plab qo’shimcha dasturlar taqdim etiladi.</p>
    <div class="imgq">
        <picture>
   <source media="(min-width: 650px)" srcset="{{asset('work/images/new_images/21.png')}}">
   <source media="(min-width: 1px)" srcset="{{asset('work/images/new_images/22.webp')}}">
   <img src="{{asset('work/images/new_images/21.png')}}" alt="error"  style="width: 100%;">
</picture>
</div>    

<div class="imgq">
        <picture>
   <source media="(min-width: 650px)" srcset="{{asset('work/images/new_images/23.png')}}">
   <source media="(min-width: 1px)" srcset="{{asset('work/images/new_images/24.webp')}}">
   <img src="{{asset('work/images/new_images/23.png')}}" alt="error"  style="width: 100%;">
</picture>
</div>               
                        
                    </div>
    </section>



     <section id="seven" class="goer" align="center">
         <div class="about__item">
                        
                        <p class="boredone"><span class="txth">Hodimlardan baholash</span><br>Har oyi biz hodimlarimiz ishidan qanchalik mamnunligini va nima yoqmayotganini bilishga harakat qilamiz. Bu uchun bizda bahtlik indeksi bor. <br>Hodimlar mahsus anketani to’ldirib, u yerda o’zining menejeriga baho qo’yadi va izoh beradi. Biz barchasini yig’ib, analiz qilib, ustida ishlashi uchun bo’limlarga yo’naltiramiz.</p>
    <div class="imgq">
        <picture>
   <source media="(min-width: 650px)" srcset="{{asset('work/images/new_images/25.png')}}">
   <source media="(min-width: 1px)" srcset="{{asset('work/images/new_images/26.png')}}">
   <img src="{{asset('work/images/new_images/25.png')}}" alt="error"  style="width: 100%;">
</picture>
</div>    
</div>
<div class="row marg">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="about__item">
                        <h4>Yangi hodim – bu nomzod</h4>
                        <p class="boredone-le">Yangi hodim – bu nomzod 
<span class="highlight">Bizga ishga kirish uchun siz Toshkentda bir haftalik bepul (o’qish, yotoq va ovqat)</span> treningdan o’tishingiz shart. So’ngra siz nolinchi haftaga qabul qilinasiz va 1 hafta o’z viloyatingizda tajriba o’rgangandan so’ng talabalar safiga oylikka qabul qilinasiz.<br><br>
Keyinchalik har oy boshida O’zbekiston barcha elchilari <span class="highlight">Novatio Akademiyasida</span> yangi bilmlarni olish va tajriba almashish uchun Toshkentga bepulga keladi. Bu yangi taassurotlar va rivojlanish kunlarini barcha intiqish bilan kutadi.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="about__item">
                        <h4>O’sish</h4>
                        <p class="boredone-le">
Bizda o’sishingiz uchun barcha imkoniyatlar bor: haydovchilar menejer bo’ladi, do’konlar bilan ishlaydigan agentlar rahbarlikkacha ham o’sadi. <span class="highlight">Biz o’sishga hoxishni qo’llab-quvvatlaymiz,</span> shuning uchun deyarli barcha kompaniya TOP menejerlari – qachondir Novatioga talaba bo’lib kelganlar.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="about__item">
                        <h4>Mijoz -Oila a’zosi</h4>
                        <p>Mijoz bilan har bir uchrashuvga <span class="highlight">hayotimizdagi yagona va ohirgi uchrashuvdek qaraladi.</span> Mijozga qulay va oson bo’lishiga intilamiz. </p>
                    </div>
                </div>
            </div>
    </section>
 
   






 
   <section id="anketa">
        <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-6" style="margin-top: 120px">
                           
                             <p ><span class="txth">Bizda ishlashga taklif etamiz!</span></p>
                             <p>Sog’lom hayot yo’lida insonlarga har kuni sabr va zavq bilan Elchilik qilishga 
tayyor barcha uchun biz ochiqmiz. Komillikka hozir birinchi qadam qo’ying!<br><br>Anketa to'ldirish uchun Telegram botimizga o'tishingiz kerak<br><a href="https://t.me/novatioish_bot"><span style="color: blue">@novatioish_bot</span></a></p>
                            

<a href="https://t.me/novatioish_bot"><img src="{{asset('work/images/new_images/28(n).png')}}" class="buttoletti"></a>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div align="center">
                           <a href="https://t.me/novatioish_bot"><img src="{{asset('work/images/new_images/27.png')}}" class="imgno"></a>
                       </div>
                        </div>
                    </div>
                
        </div>
    </section>




   
   {{-- <script src="{{ asset('work/js/footer.js') }}"></script> --}}


   





        

    

    <!-- Js Plugins -->

    <script src="{{ asset('work/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('work/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('work/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('work/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('work/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('work/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('work/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('work/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('work/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('work/js/main.js') }}"></script>

    {{-- <script src="js/jquery-3.3.1.min.js"></script> --}}
    {{-- <script src="js/bootstrap.min.js"></script> --}}
    {{-- <script src="js/jquery.nice-select.min.js"></script> --}}
    {{-- <script src="js/jquery.nicescroll.min.js"></script> --}}
    {{-- <script src="js/jquery.magnific-popup.min.js"></script> --}}
    {{-- <script src="js/jquery.countdown.min.js"></script> --}}
    {{-- <script src="js/jquery.slicknav.js"></script> --}}
    {{-- <script src="js/mixitup.min.js"></script> --}}
    {{-- <script src="js/owl.carousel.min.js"></script> --}}
    {{-- <script src="js/main.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- Yandex.Metrika counter -->
{{-- <script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(70421662, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script> --}}
<noscript><div><img src="https://mc.yandex.ru/watch/70421662" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>

</html>