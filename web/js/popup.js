document.addEventListener("DOMContentLoaded", function () {
    // Popup-widget
    function PopupWg() {
        var self = this;
        var popup_wg = document.querySelector(".popup-wg");
        this.init = function () {
            self.popupOpen();
            self.popupClose();
            // self.popupProcess();
        };

        // Show popup widget
        this.popupOpen = function () {
            var popupOpenLink = document.querySelectorAll(".start-earning");

            // popup_wg.classList.add("open");

            for (var i = 0; i < popupOpenLink.length; i++) {
                popupOpenLink[i].addEventListener("click", function (e) {
                    e.preventDefault();
                    popup_wg.classList.add("open");
                });
            }
        };
        this.popupClose = function () {
            var popupCloseLink = document.querySelector(".popup-wg__close");

            popupCloseLink.addEventListener("click", function (e) {
                e.preventDefault();
                popup_wg.classList.remove("open");
            });

            popup_wg.addEventListener('click', function (event) {
                var e = document.querySelector('.popup-wg__block');
                if (!e.contains(event.target)) {
                    popup_wg.classList.remove("open");
                }
            });
        };
    }

    // Init side menu at main page
    if (document.querySelector(".popup-wg")) {
        var popupWgNew = new PopupWg();
        popupWgNew.init();
    }
});


