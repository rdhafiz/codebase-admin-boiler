/** Theme switcher (color modes) **/
// import "./theme-switcher";

/** Vendor scripts: JS libraries and plugins **/
//import "aos/dist/aos";

/** Bootstrap + Theme scripts **/
import "./theme";


// Page Loading
window.onload = () => {
    const preLoader = document.getElementById('preLoader')
    setTimeout(() => {
        var fadeEffect = setInterval(function () {
            if (!preLoader.style.opacity) {
                preLoader.style.opacity = 1;
            }
            if (preLoader.style.opacity > 0) {
                preLoader.style.opacity -= 0.1;
            } else {
                clearInterval(fadeEffect);
            }
        }, 10);
        setTimeout(() => {
            preLoader.style.display = 'none'
        }, 1000)
    }, 1000)
}
