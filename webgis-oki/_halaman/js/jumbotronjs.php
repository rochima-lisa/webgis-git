
<style>
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
</style>