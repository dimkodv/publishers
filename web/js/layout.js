"use strict";

let preloader;

let Layout = function () {

    let self = this;

    this.init = function() {
        window.onload = function() {
            self.bodyLoaded();
        };
        self.lazyFunc();
        document.querySelector("body").classList.add("ready");
        self.exists();
        self.ieStubFunc();
        self.safariClass();
        self.sideMenu();

        preloader = new self.Preloader(); // preloader.start(selector) || preloader.stop(selector) to start or stop preloader;
    };

    this.lazyMethod  = function(){
        self.lazyFunc();
    };

    this.bodyLoaded = function() {
        document.querySelector("body").classList.add("loaded-page");
    };

    this.ieStubFunc = function(){
        let isIE = /*@cc_on!@*/false || !!document.documentMode;
        let isIE11 = !!navigator.userAgent.match(/Trident.*rv\:11\./);
        if (isIE11 || isIE)
        {
            document.body.classList.add("ie");
            let ieStub = "<div class=\"ie-detect\" style=\"display\: none;\"><b>Ваш браузер застарів</b><p>Ви користуєтеся застарілим браузером, який не підтримує сучасні веб-стандарти і становить загрозу вашої безпеки.</p><p>Оновіть або скачайте сучасну версію браузеру.</p><p>Internet Explorer не підтримується.</p></div>";
            document.querySelector("body").classList.add("ie");
            document.querySelector(".main-grid-wrapper").innerHTML = ieStub;
        };
    };

    this.safariClass = function() {
        let is_safari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);
        if (is_safari) {
            document.querySelector("body").classList.add("safari");
        }
    };

    this.Preloader = function () {

        let selff = this;

        selff.start = function(selector){
            let prel = document.createElement("div");
            prel.classList.add("preloader-overlay");
            let prelHml = "<svg class='spinner' width='174px' height='174px' viewBox='0 0 66 66' xmlns='http://www.w3.org/2000/svg'><circle class='path' fill='transparent' stroke-width='2' cx='33' cy='33' r='30' stroke='url(#gradient)'/><linearGradient id='gradient'><stop offset='50%' stop-color='#FFC10E' stop-opacity='1'/><stop offset='65%' stop-color='#FFC10E' stop-opacity='.5'/><stop offset='100%' stop-color='#FFC10E' stop-opacity='0'/></linearGradient></circle><svg class='spinner-dot dot' width='5px' height='5px' viewBox='0 0 66 66' xmlns='http://www.w3.org/2000/svg' x='37' y='1.5'><circle class='path' fill='#E42313' cx='33' cy='33' r='30'/></circle></svg></svg>";
            prel.innerHTML = prelHml;
            document.querySelector(selector).appendChild(prel);
            prel.parentNode.style.opacity = "0.65";
        },

        selff.stop = function(selector){
            if(document.querySelector(".preloader-overlay")) {
                document.querySelector(".preloader-overlay").parentNode.style.opacity = "";
                document.querySelector(selector).querySelector(".preloader-overlay").remove();
            }
        };
    };

    this.exists = function (selector) {
        return (document.querySelectorAll(selector).length > 0);
    };

    this.lazyFunc = function(){
        var lazyloadImages;

        if ("IntersectionObserver" in window) {
            lazyloadImages = document.querySelectorAll(".lazyClass");
            var imageObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        var image = entry.target;
                        image.src = image.dataset.src;
                        image.classList.remove("lazyClass");
                        image.classList.add("visible");
                        imageObserver.unobserve(image);
                    }
                });
            });

            lazyloadImages.forEach(function(image) {
                imageObserver.observe(image);
            });
        } else {
            var lazyloadThrottleTimeout;
            lazyloadImages = document.querySelectorAll(".lazyClass");

            function lazyload () {
                if(lazyloadThrottleTimeout) {
                    clearTimeout(lazyloadThrottleTimeout);
                }

                lazyloadThrottleTimeout = setTimeout(function() {
                    var scrollTop = window.pageYOffset;
                    lazyloadImages.forEach(function(img) {
                        if(img.offsetTop < (window.innerHeight + scrollTop)) {
                            img.src = img.dataset.src;
                            img.classList.remove('lazyClass');
                            img.classList.add("visible");
                        }
                    });
                    if(lazyloadImages.length == 0) {
                        document.removeEventListener("scroll", lazyload);
                        window.removeEventListener("resize", lazyload);
                        window.removeEventListener("orientationChange", lazyload);
                    }
                }, 20);
            }

            document.addEventListener("scroll", lazyload);
            window.addEventListener("resize", lazyload);
            window.addEventListener("orientationChange", lazyload);
        }
    };

    this.sideMenu = function(){
        let linkMenu = document.querySelectorAll(".main-menu > ul li");
        let linkMenuParent = document.querySelectorAll(".main-menu > ul > li");
        let linkMenuParentLink = document.querySelectorAll(".main-menu > ul > li > a");
        let headerWg = document.querySelector(".header-wg");
        let headerTop = document.querySelector(".header-wg .container");
        let gamburgerBtn = document.querySelector(".hamburger");
        let bodyEl = document.querySelector("body");
        let menuLink = headerWg.querySelectorAll("nav a");


        function menuActItems() {
            for (let i = 0; i < linkMenu.length; i++) {

                if(window.innerWidth > 1280) {
                    linkMenu[i].onmouseover = function (e) {
                        let children = [];
                        children = this.children;
                        for(var i = 0; i < children.length; i++){
                            if (children[i].tagName === "UL") {
                                headerTop.classList.add("active");
                            }
                        };
                    }

                    linkMenu[i].onmouseout = function (e) {
                        let children = [];
                        children = this.children;
                        for(var i = 0; i < children.length; i++){
                            if (children[i].tagName !== "UL") {
                                headerTop.classList.remove("active");
                            }
                        };
                    };
                }
                if(linkMenu[i].classList.contains("active")) {
                    linkMenu[i].parentNode.classList.add("act") || linkMenu[i].parentNode.parentNode.parentNode.classList.add("act");
                } else {
                    linkMenu[i].parentNode.classList.remove("act");
                }
            }
        }
        menuActItems();
        window.addEventListener("resize", menuActItems, false);


        for(let i = 0; i < linkMenuParent.length; i++) {
            if (linkMenuParent[i].querySelectorAll('ul').length > 0) {
                linkMenuParent[i].classList.add("parentLi");
            }
        }

        for (let i = 0; i < linkMenuParent.length; i++) {
            linkMenuParent[i].addEventListener("click", function (e) {
                let children = this.children;
                let ctx = this;
                for(var i = 0; i < children.length; i++){
                    if (children[i].tagName === "UL") {
                        ctx.classList.toggle("hover");
                    }
                };
            });
        }

        function hideSideMenu() {
            headerWg.classList.remove("open");
            bodyEl.removeAttribute('data-hidden');
        };

        function showSideMenu() {
            headerWg.classList.add("open");
            bodyEl.setAttribute('data-hidden', ':hidden');
        };

        if(gamburgerBtn) {
            gamburgerBtn.addEventListener("click", function(e){
                e.preventDefault();
                headerWg.classList.toggle("open");
            });
        }

    };

};

let layout = new Layout();

document.addEventListener("DOMContentLoaded", function(){

         layout.init();

});

