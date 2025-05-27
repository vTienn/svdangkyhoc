<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
   
</head>
<style>
  .menu-item a{
    text-decoration: none;
  }
     /* Slide show */
     .slide-show1 {
      margin-top: 20px;
       width: 100%;
       
     }
     .slider {
      border-radius: 30px;
      width: 1150px;
      max-width: 100vw;
      height: 700px;
      margin: auto;
      position: relative;
      overflow: hidden;
    }

    .slider .list {
      position: absolute;
      width: max-content;
      height: 100%;
      left: 0;
      top: 0;
      display: flex;
      transition: 1s;
    }

    .slider .list img {
      width: 1300px;
      max-width: 100vw;
      height: 100%;
      object-fit: cover;
    }

    .slider .buttons {
      position: absolute;
      top: 45%;
      left: 5%;
      width: 90%;
      display: flex;
      justify-content: space-between;
    }

    .slider .buttons button {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background-color: #fff5;
      color: #fff;
      border: none;
      font-family: monospace;
      font-weight: bold;
    }

    .slider .dots {
      position: absolute;
      bottom: 10px;
      left: 0;
      color: #fff;
      width: 100%;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
    }

    .slider .dots li {
      list-style: none;
      width: 10px;
      height: 10px;
      background-color: #fff;
      margin: 10px;
      border-radius: 20px;
      transition: 0.5s;
    }

    .slider .dots li.active {
      width: 30px;
    }

    @media screen and (max-width: 768px) {
      .slider {
        height: 400px;
      }
    }
    
    /* End slide show */
    /* section 2 */
    .section-2{
      padding: 20px 20px;
      margin-top: 40px;
      margin-bottom: 30px;
      background-color: #EFEFEF;
      
    }
    .section-2 .section-2-title{
      text-align: center;
      font-size: 30px;
      font-weight: 700;
    }
    .section-2-box .box-img {
  width: 100%;
  height: 200px;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}
.section-2-box h4{
  font-size: 16px;
  font-weight: 600;
  text-align: center;

}
    /* end section 2 */
    .section-5 {
     
   
        background-color: #252429;
        width: 100%;
    }
    .section-5-box h4 {
        font-weight: 700;
        color: #fff;
    }
    .section-5-box ul {
        padding: 0;
    }
    .section-5-box ul li {
        list-style: none;
        color: #fff;
        font-size: 15px;
        font-weight: 400;
        margin-bottom: 5px;
    }
    .section-5-box ul li a {
        color: #ff8f20;
        text-decoration: none;
    }
</style>
<body>
<!-- slider -->
<div class="slide-show1">

<div class="slider">
      <div class="list">
        <div class="item">
          <img
            src="https://scontent-sin6-4.xx.fbcdn.net/v/t39.30808-6/355169247_641356294688624_318311908579890470_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeErutsfeMNBOHFb7Em8eCTURG-zPpxSzz1Eb7M-nFLPPRVTEdErAz-qkZvaF8KXPwbfFebqmedVELxdjAUFv4AV&_nc_ohc=7Y3zVjwVggcQ7kNvgFAit88&_nc_ht=scontent-sin6-4.xx&cb_e2o_trans=t&oh=00_AYAxp-tvdrUPX5XmcdVvqGLESkXjsYEKaThg7XrYkeIBRg&oe=668DAD1A"
            alt=""
          />
        </div>
        <div class="item">
          <img
            src="https://utt.edu.vn/uploads/images/news/646c15d1be5aea73d04b9dfbabb244ea.jpg"
            alt=""
          />
        </div>
        <div class="item">
          <img
            src="https://utt.edu.vn/uploads/images/news/a3c6300f101eb8455520e04d0219671d.jpg"
            alt=""
          />
        </div>
        <div class="item">
          <img
            src="https://utt.edu.vn/uploads/images/news/4ef440d9083ad56b84a9d43f0385841d.jpg"
            alt=""
          />
        </div>
       
    
    
    
      </div>
      <div class="buttons">
        <button id="prev"><</button>
        <button id="next">></button>
      </div>
      <ul class="dots">
        <li class="active"></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>

</div>

<!-- end slide -->
 <!-- section2 -->
 <div class="section-2 ">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <h2 class="section-2-title">Thông Tin</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="section-2-box">
              <img
                class="box-img"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzssMZl0wl6i_R2FgQ2N9pXIJtbOlZHkiandAF1VcOnkTVnqv_ok7u96oxMLnjkcs3M4U&usqp=CAU"
                alt=""
              />
              <h4>Đại học Công nghệ GTVT mở ngành Luật trong xu thế đào tạo </h4>
              
             
            </div>
          </div>
          <div class="col-md-3">
            <div class="section-2-box">
              <img
                class="box-img"
                src="https://utt.edu.vn/uploads/images/news/43954a3cf1230dace5d1417ecb848025.jpg"
                alt=""
              />
              <h4>Đón đầu nhân lực giao thông vận tải có ngoại ngữ tốt</h4>
              
            </div>
          </div>
          <div class="col-md-3">
            <div class="section-2-box">
              <img
                class="box-img"
                src="https://utt.edu.vn/uploads/images/news/008d36d60c778a03e5832ab69f8d1a1e.jpg"
                alt=""
              />
              <h4>Thông báo điểm chuẩn xét tuyển sớm đại học chính quy </h4>
             
            </div>
          </div>
          <div class="col-md-3">
            <div class="section-2-box">
              <img
                class="box-img"
                src="https://utt.edu.vn/uploads/images/event/2.jpg"
                alt=""
              />
              <h4>Hội thảo: Thúc đẩy các sáng kiến xe điện hai bánh tại Việt Nam</h4>
              
              
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- end section 2 -->

<div class="section-5">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 text-center">
            <h2 class="section-5-title">Thông Tin Liên Hệ</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="section-5-box">
              
             
              <h4>ĐẠI HỌC CN GTVT HÀ NỘI</h4>
              <ul>
                <li>Số 54 Triều Khúc, Thanh Xuân, Hà Nội</li>
                <li>Điện thoại: 0243.854 4264</li>
                <li>Hotline tuyển sinh: 0243.552 6713</li>
                <li>Fax: 0243.854 7695</li>
                <li><a href="">Fanpage</a></li>
                
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="section-5-box">
              
              <h4>CƠ SỞ VĨNH PHÚC</h4>
              <ul>
                <li>Số 278 Lam Sơn, Đồng Tâm, TP. Vĩnh Yên, Vĩnh Phúc</li>
                <li>Điện thoại: 0211.386.7405</li>
                <li>Hotline tuyển sinh: 0243.552 6713</li>
                <li>Fax: 0211.386.7391</li>
                <li><a href="">Fanpage</a></li>
                
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="section-5-box">
              
              <h4>CƠ SỞ THÁI NGUYÊN</h4>
              <ul>
                <li>Phường Tân Thịnh, TP. Thái Nguyên, Thái Nguyên</li>
                <li>Điện thoại: 0208.385.6545</li>
                <li>Hotline tuyển sinh: 0243.552 6713</li>
                <li>Fax: 0208.374.6975</li>
                <li><a href="">Fanpage</a></li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
      crossorigin="anonymous"
    ></script>
    
 <script src="http://localhost/svdangkyhoc/public/js/app.js">
     

 </script>
    
</body>

</html>