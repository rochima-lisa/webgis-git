<style>
/* Hero Section */
.content {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}

/* Hero Section */

#hero {
  width: 100%;
  height: 60vh;
  background-color: rgba(9, 9, 9, 0.8);
  overflow: hidden;
  position: relative;
}

#hero .carousel, #hero .carousel-inner, #hero .carousel-item, #hero .carousel-item::before {
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
}

#hero .carousel-item::before {
  content: '';
  background-color: rgba(45, 103, 60, 0.8);
}

#hero .carousel-container {
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  bottom: 0;
  top: 10px;
  left: 50px;
  right: 50px;
}

#hero .container {
  text-align: center;
}

#hero h2 {
  color: #fff;
  margin-bottom: 20px;
  font-size: 48px;
  font-weight: 700;
}

#hero p {
  -webkit-animation-delay: 0.4s;
  animation-delay: 0.4s;
  margin: 0 auto 30px auto;
  color: #fff;
}

#hero .carousel-inner .carousel-item {
  transition-property: opacity;
  background-position: center top;
}

#hero .carousel-inner .carousel-item,
#hero .carousel-inner .active.carousel-item-left,
#hero .carousel-inner .active.carousel-item-right {
  opacity: 0;
}

#hero .carousel-inner .active,
#hero .carousel-inner .carousel-item-next.carousel-item-left,
#hero .carousel-inner .carousel-item-prev.carousel-item-right {
  opacity: 1;
  transition: 0.5s;
}

#hero .carousel-inner .carousel-item-next,
#hero .carousel-inner .carousel-item-prev,
#hero .carousel-inner .active.carousel-item-left,
#hero .carousel-inner .active.carousel-item-right {
  left: 0;
  transform: translate3d(0, 0, 0);
}

#hero .carousel-control-prev, #hero .carousel-control-next {
  width: 10%;
  top: 112px;
}

@media (max-width: 992px) {
  #hero .carousel-control-prev, #hero .carousel-control-next {
    top: 66px;
  }
}

#hero .carousel-control-next-icon, #hero .carousel-control-prev-icon {
  background: none;
  font-size: 36px;
  line-height: 1;
  width: auto;
  height: auto;
  background: rgba(255, 255, 255, 0.2);
  border-radius: 50px;
  padding: 10px;
  transition: 0.3s;
  color: rgba(255, 255, 255, 0.5);
}

#hero .carousel-control-next-icon:hover, #hero .carousel-control-prev-icon:hover {
  background: rgba(255, 255, 255, 0.3);
  color: rgba(255, 255, 255, 0.8);
}

#hero .carousel-indicators li {
  cursor: pointer;
  background: #fff;
  overflow: hidden;
  border: 0;
  width: 12px;
  height: 12px;
  border-radius: 50px;
  opacity: .6;
  transition: 0.3s;
}

#hero .carousel-indicators li.active {
  opacity: 1;
  background: #5cb874;
}

#hero .btn-get-started {
  font-family: "Raleway", sans-serif;
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 14px 32px;
  border-radius: 4px;
  transition: 0.5s;
  line-height: 1;
  color: #fff;
  -webkit-animation-delay: 0.8s;
  animation-delay: 0.8s;
  background: #5cb874;
}

#hero .btn-get-started:hover {
  background: #6ec083;
}

@media (max-width: 992px) {
  #hero {
    height: 100vh;
  }
  #hero .carousel-container {
    top: 66px;
  }
}

@media (max-width: 768px) {
  #hero h2 {
    font-size: 28px;
  }
}

@media (min-width: 1024px) {
  #hero .carousel-control-prev, #hero .carousel-control-next {
    width: 5%;
  }
}

@media (max-height: 500px) {
  #hero {
    height: 120vh;
  }
}

/* General Section */

section {
  padding: 60px 0;
}

.section-bg {
  background-color: #f8fcf9;
}

.section-title {
  text-align: center;
  padding-bottom: 30px;
}

.section-title h2 {
  font-size: 32px;
  font-weight: bold;
  text-transform: uppercase;
  margin-bottom: 20px;
  padding-bottom: 20px;
  position: relative;
}

.section-title h2::before {
  content: '';
  position: absolute;
  display: block;
  width: 120px;
  height: 1px;
  background: #ddd;
  bottom: 1px;
  left: calc(50% - 60px);
}

.section-title h2::after {
  content: '';
  position: absolute;
  display: block;
  width: 40px;
  height: 3px;
  background: #5cb874;
  bottom: 0;
  left: calc(50% - 20px);
}

.section-title p {
  margin-bottom: 0;
  font-size: 14px;
  color: #919191;
}


/* About-Us Section Restaurantly*/

.about .about-img {
  position: relative;
  transition: .5s;
}

.about .about-img img {
  max-width: 100%;
  border: 4px solid rgba(255, 255, 255, 0.2);
  position: relative;
}

.about .about-img::before {
  position: absolute;
  left: 20px;
  top: 20px;
  width: 60px;
  height: 60px;
  z-index: 1;
  content: '';
  border-left: 5px solid #cda45e;
  border-top: 5px solid #cda45e;
  transition: .5s;
}

.about .about-img::after {
  position: absolute;
  right: 20px;
  bottom: 20px;
  width: 60px;
  height: 60px;
  z-index: 2;
  content: '';
  border-right: 5px solid #cda45e;
  border-bottom: 5px solid #cda45e;
  transition: .5s;
}

.about .about-img:hover {
  transform: scale(1.03);
}

.about .about-img:hover::before {
  left: 10px;
  top: 10px;
}

.about .about-img:hover::after {
  right: 10px;
  bottom: 10px;
}

/* About-Us Section */

.about .content h3 {
  font-weight: 700;
  font-size: 28px;
}

.about .content ul {
  list-style: none;
  padding: 0;
}

.about .content ul li {
  padding-bottom: 10px;
}

.about .content ul i {
  font-size: 20px;
  padding-right: 4px;
  color: #5cb874;
}

.about .content p:last-child {
  margin-bottom: 0;
}


/* Why-Us section */
.why-us {
  padding: 0;
}

.why-us .row {
  overflow: hidden;
}

.why-us .content-item {
  padding: 40px;
  border-left: 1px solid #eee;
  border-bottom: 1px solid #eee;
  margin: -1px;
}

.why-us .content-item span {
  display: block;
  font-size: 24px;
  font-weight: 400;
  color: #6ec083;
}

.why-us .content-item h4 {
  font-size: 26px;
  font-weight: 300;
  padding: 0;
  margin: 20px 0;
}

.why-us .content-item p {
  color: #aaaaaa;
  font-size: 15px;
  text-align: justify;
  margin: 0;
  padding: 0;
}

.why-us .content-item li {
  color: #6ec083;
  font-size: 15px;
  text-align: justify;
  margin: 0;
  padding: 0;
}

@media (max-width: 768px) {
  .why-us .content-item {
    padding: 40px 0;
  }
}


/* Our Clients Section */

.clients .owl-item {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
}

.clients .owl-item img {
  width: 80%;
  opacity: 0.5;
  transition: 0.3s;
}

.clients .owl-item img:hover {
  opacity: 1;
}

.clients .owl-nav, .clients .owl-dots {
  margin-top: 5px;
  text-align: center;
}

.clients .owl-dot {
  display: inline-block;
  margin: 0 5px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background-color: #ddd !important;
}

.clients .owl-dot.active {
  background-color: #5cb874 !important;
}


/* Services Section */
.services .icon-box {
  text-align: center;
  padding: 70px 20px 80px 20px;
  transition: all ease-in-out 0.3s;
  background: #fff;
  box-shadow: 0px 5px 90px 0px rgba(110, 123, 131, 0.1);
}

.services .icon-box .icon {
  margin: 0 auto;
  width: 100px;
  height: 100px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: ease-in-out 0.3s;
  position: relative;
}

.services .icon-box .icon i {
  font-size: 36px;
  transition: 0.5s;
  position: relative;
}

.services .icon-box .icon svg {
  position: absolute;
  top: 0;
  left: 0;
}

.services .icon-box .icon svg path {
  transition: 0.5s;
  fill: #f5f5f5;
}

.services .icon-box h4 {
  font-weight: 600;
  margin: 10px 0 15px 0;
  font-size: 22px;
}

.services .icon-box h4 a {
  color: #222222;
  transition: ease-in-out 0.3s;
}

.services .icon-box p {
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
}

.services .icon-box:hover {
  border-color: #fff;
  box-shadow: 0px 0 35px 0 rgba(0, 0, 0, 0.08);
}

.services .iconbox-blue i {
  color: #47aeff;
}

.services .iconbox-blue:hover .icon i {
  color: #fff;
}

.services .iconbox-blue:hover .icon path {
  fill: #47aeff;
}

.services .iconbox-orange i {
  color: #ffa76e;
}

.services .iconbox-orange:hover .icon i {
  color: #fff;
}

.services .iconbox-orange:hover .icon path {
  fill: #ffa76e;
}

.services .iconbox-pink i {
  color: #e80368;
}

.services .iconbox-pink:hover .icon i {
  color: #fff;
}

.services .iconbox-pink:hover .icon path {
  fill: #e80368;
}

.services .iconbox-yellow i {
  color: #ffbb2c;
}

.services .iconbox-yellow:hover .icon i {
  color: #fff;
}

.services .iconbox-yellow:hover .icon path {
  fill: #ffbb2c;
}

.services .iconbox-red i {
  color: #ff5828;
}

.services .iconbox-red:hover .icon i {
  color: #fff;
}

.services .iconbox-red:hover .icon path {
  fill: #ff5828;
}

.services .iconbox-teal i {
  color: #11dbcf;
}

.services .iconbox-teal:hover .icon i {
  color: #fff;
}

.services .iconbox-teal:hover .icon path {
  fill: #11dbcf;
}


/* CTA Box Hijau Section */

.cta {
  background: #5cb874;
  padding: 40px 0;
  margin-bottom: 50px;
}

.cta h3 {
  color: #fff;
  font-size: 28px;
  font-weight: 700;
}

.cta p {
  color: #fff;
}

.cta .cta-btn {
  font-family: "Raleway", sans-serif;
  font-weight: 600;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 30px;
  border-radius: 2px;
  transition: 0.5s;
  margin: 10px;
  border: 2px solid #fff;
  color: #fff;
  border-radius: 4px;
}

.cta .cta-btn:hover {
  background: #fff;
  color: #5cb874;
}

@media (max-width: 1024px) {
  .cta {
    background-attachment: scroll;
  }
}

@media (min-width: 769px) {
  .cta .cta-btn-container {
    display: flex;
    align-items: center;
    justify-content: flex-end;
  }
}

</style>


<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
}
</script>