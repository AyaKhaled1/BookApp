<style type="text/css">

*, *:after, *:before {
    -moz-box-sizing: border-box;
}
* {
    margin: 0;
    padding: 0;
}
*:before, *:after {
    content: "";
}
html, body {
    height: 100%;
}
html {
    font-size: 100%;
}
body {
    background: none repeat scroll 0 0 #ECF0F1;
    color: #34495E;
    font-family: 'Lato','Arial',sans-serif;
    font-weight: 400;
    line-height: 1.2;
}
ul {
    list-style: none outside none;
    margin: 0;
    padding: 0;
}
a {
    color: #2C3E50;
    text-decoration: none;
}
.btn {
    border: 2px solid #2C3E50;
    display: inline-block;
    font-size: 0.7em;
    font-weight: 700;
    margin-top: 100px;
    padding: 0.1em 0.4em;
    text-align: center;
    text-transform: uppercase;
    transition: color 0.3s ease 0s, border-color 0.3s ease 0s;
}
.btn:hover {
    border-color: #16A085;
    color: #16A085;
}
.align {
    clear: both;
    margin: 90px auto 20px;
    max-width: 1170px;
    text-align: center;
    width: 100%;
}
.align > li {
    display: inline-block;
    margin: 30px 20px 30px 30px;
    min-height: 300px;
    padding: 0 0 0 60px;
    vertical-align: top;
    width: 500px;
}
.book {
    height: 220px;
    perspective: 1000px;
    position: relative;
    transform-style: preserve-3d;
    width: 160px;
}
.hardcover_front li:first-child {
    backface-visibility: hidden;
    background-color: #EEEEEE;
}
.hardcover_front li:last-child {
    background: none repeat scroll 0 0 #FFFBEC;
}
.hardcover_back li:first-child {
    background: none repeat scroll 0 0 #FFFBEC;
}
.hardcover_back li:last-child {
    background: none repeat scroll 0 0 #FFFBEC;
}
.book_spine li:first-child {
    background: none repeat scroll 0 0 #EEEEEE;
}
.book_spine li:last-child {
    background: none repeat scroll 0 0 #333333;
}
.hardcover_front li:first-child:after, .hardcover_front li:first-child:before, .hardcover_front li:last-child:after, .hardcover_front li:last-child:before, .hardcover_back li:first-child:after, .hardcover_back li:first-child:before, .hardcover_back li:last-child:after, .hardcover_back li:last-child:before, .book_spine li:first-child:after, .book_spine li:first-child:before, .book_spine li:last-child:after, .book_spine li:last-child:before {
    background: none repeat scroll 0 0 #999999;
}
.page > li {
    background: -moz-linear-gradient(left center , #E1DDD8 0%, #FFFBF6 100%) repeat scroll 0 0 transparent;
    border-radius: 0 5px 5px 0;
    box-shadow: 0 -1px 2px rgba(50, 50, 50, 150) inset, -1px 0 1px rgba(150, 150, 150, 150) inset;
}
.hardcover_front {
    transform: rotateY(-34deg) translateZ(8px);
    z-index: 100;
}
.hardcover_back {
    transform: rotateY(-15deg) translateZ(-8px);
}
.page li:nth-child(1) {
    transform: rotateY(-28deg);
}
.page li:nth-child(2) {
    transform: rotateY(-30deg);
}
.page li:nth-child(3) {
    transform: rotateY(-32deg);
}
.page li:nth-child(4) {
    transform: rotateY(-34deg);
}
.page li:nth-child(5) {
    transform: rotateY(-36deg);
}
.hardcover_front, .hardcover_back, .book_spine, .hardcover_front li, .hardcover_back li, .book_spine li {
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    transform-style: preserve-3d;
    width: 100%;
}
.hardcover_front, .hardcover_back {
    transform-origin: 0 100% 0;
}
.hardcover_front {
    transition: all 0.8s ease 0s, z-index 0.6s ease 0s;
}
.hardcover_front li:first-child {
    -moz-user-select: none;
    cursor: default;
    transform: translateZ(2px);
}
.hardcover_front li:last-child {
    transform: rotateY(180deg) translateZ(2px);
}
.hardcover_back li:first-child {
    transform: translateZ(2px);
}
.hardcover_back li:last-child {
    transform: translateZ(-2px);
}
.hardcover_front li:first-child:after, .hardcover_front li:first-child:before, .hardcover_front li:last-child:after, .hardcover_front li:last-child:before, .hardcover_back li:first-child:after, .hardcover_back li:first-child:before, .hardcover_back li:last-child:after, .hardcover_back li:last-child:before, .book_spine li:first-child:after, .book_spine li:first-child:before, .book_spine li:last-child:after, .book_spine li:last-child:before {
    left: 0;
    position: absolute;
    top: 0;
}
.hardcover_front li:first-child:after, .hardcover_front li:first-child:before {
    height: 100%;
    width: 4px;
}
.hardcover_front li:first-child:after {
    transform: rotateY(90deg) translateZ(-2px) translateX(2px);
}
.hardcover_front li:first-child:before {
    transform: rotateY(90deg) translateZ(158px) translateX(2px);
}
.hardcover_front li:last-child:after, .hardcover_front li:last-child:before {
    height: 160px;
    width: 4px;
}
.hardcover_front li:last-child:after {
    transform: rotateX(90deg) rotateZ(90deg) translateZ(80px) translateX(-2px) translateY(-78px);
}
.hardcover_front li:last-child:before {
    box-shadow: 0 0 30px 5px #333333;
    transform: rotateX(90deg) rotateZ(90deg) translateZ(-140px) translateX(-2px) translateY(-78px);
}
.hardcover_back li:first-child:after, .hardcover_back li:first-child:before {
    height: 100%;
    width: 4px;
}
.hardcover_back li:first-child:after {
    transform: rotateY(90deg) translateZ(-2px) translateX(2px);
}
.hardcover_back li:first-child:before {
    transform: rotateY(90deg) translateZ(158px) translateX(2px);
}
.hardcover_back li:last-child:after, .hardcover_back li:last-child:before {
    height: 160px;
    width: 4px;
}
.hardcover_back li:last-child:after {
    transform: rotateX(90deg) rotateZ(90deg) translateZ(80px) translateX(2px) translateY(-78px);
}
.hardcover_back li:last-child:before {
    box-shadow: 10px -1px 80px 20px #666666;
    transform: rotateX(90deg) rotateZ(90deg) translateZ(-140px) translateX(2px) translateY(-78px);
}
.book_spine {
    transform: rotateY(60deg) translateX(-5px) translateZ(-12px);
    width: 16px;
    z-index: 0;
}
.book_spine li:first-child {
    transform: translateZ(2px);
}
.book_spine li:last-child {
    transform: translateZ(-2px);
}
.book_spine li:first-child:after, .book_spine li:first-child:before {
    height: 100%;
    width: 4px;
}
.book_spine li:first-child:after {
    transform: rotateY(90deg) translateZ(-2px) translateX(2px);
}
.book_spine li:first-child:before {
    transform: rotateY(-90deg) translateZ(-12px);
}
.book_spine li:last-child:after, .book_spine li:last-child:before {
    height: 16px;
    width: 4px;
}
.book_spine li:last-child:after {
    transform: rotateX(90deg) rotateZ(90deg) translateZ(8px) translateX(2px) translateY(-6px);
}
.book_spine li:last-child:before {
    box-shadow: 5px -1px 100px 40px rgba(0, 0, 0, 0.2);
    transform: rotateX(90deg) rotateZ(90deg) translateZ(-210px) translateX(2px) translateY(-6px);
}
.page, .page > li {
    left: 0;
    position: absolute;
    top: 0;
    transform-style: preserve-3d;
}
.page {
    height: 98%;
    left: 3%;
    top: 1%;
    width: 100%;
    z-index: 10;
}
.page > li {
    height: 100%;
    transform-origin: left center 0;
    transition-property: transform;
    transition-timing-function: ease;
    width: 100%;
}
.page > li:nth-child(1) {
    transition-duration: 0.6s;
}
.page > li:nth-child(2) {
    transition-duration: 0.6s;
}
.page > li:nth-child(3) {
    transition-duration: 0.4s;
}
.page > li:nth-child(4) {
    transition-duration: 0.5s;
}
.page > li:nth-child(5) {
    transition-duration: 0.6s;
}
.book:hover > .hardcover_front {
    transform: rotateY(-145deg) translateZ(0px);
    z-index: 0;
}
.book:hover > .page li:nth-child(1) {
    transform: rotateY(-30deg);
    transition-duration: 1.5s;
}
.book:hover > .page li:nth-child(2) {
    transform: rotateY(-35deg);
    transition-duration: 1.8s;
}
.book:hover > .page li:nth-child(3) {
    transform: rotateY(-118deg);
    transition-duration: 1.6s;
}
.book:hover > .page li:nth-child(4) {
    transform: rotateY(-130deg);
    transition-duration: 1.4s;
}
.book:hover > .page li:nth-child(5) {
    transform: rotateY(-140deg);
    transition-duration: 1.2s;
}
.coverDesign {
    backface-visibility: hidden;
    bottom: 0;
    left: 0;
    overflow: hidden;
    position: absolute;
    right: 0;
    top: 0;
}
.coverDesign:after {
    background-image: linear-gradient(-135deg, rgba(255, 255, 255, 0.45) 0%, transparent 100%);
    bottom: 0;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
}
.coverDesign h1 {
    color: #FFFFFF;
    font-size: 2em;
    letter-spacing: 0.02em;
    margin: 54% 0 0;
    text-align: center;
    text-shadow: -1px -1px 0 rgba(0, 0, 0, 0.1);
    text-transform: uppercase;
}
.coverDesign p {
    color: #F8F8F8;
    font-size: 1em;
    text-align: center;
    text-shadow: -1px -1px 0 rgba(0, 0, 0, 0.1);
}
.custom {
    background: #00b7ea; /* Old browsers */
    background: -moz-linear-gradient(top,  #00b7ea 0%, #009ec3 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#00b7ea), color-stop(100%,#009ec3)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  #00b7ea 0%,#009ec3 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  #00b7ea 0%,#009ec3 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  #00b7ea 0%,#009ec3 100%); /* IE10+ */
    background: linear-gradient(to bottom,  #00b7ea 0%,#009ec3 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00b7ea', endColorstr='#009ec3',GradientType=0 ); /* IE6-9 */
}
.ribbon {
    backface-visibility: hidden;
    background: none repeat scroll 0 0 #000000;
    color: #FFFFFF;
    display: block;
    font-size: 0.5em;
    height: 20px;
    letter-spacing: 0.15em;
    line-height: 20px;
    position: absolute;
    right: 1px;
    text-align: center;
    top: 11px;
    transform: rotateZ(45deg) translateZ(1px);
    width: 40px;
    z-index: 10;
}
.ribbon:before, .ribbon:after {
    border-bottom: 20px solid #000000;
    border-top: 20px solid transparent;
    height: 0;
    position: absolute;
    top: -20px;
    width: 0;
}
.ribbon:before {
    border-left: 20px solid transparent;
    left: -20px;
}
.ribbon:after {
    border-right: 20px solid transparent;
    right: -20px;
}
figcaption {
    left: 160px;
    padding-left: 40px;
    position: absolute;
    text-align: left;
    top: 0;
    width: 310px;
}
figcaption h1 {
    margin: 0;
}
figcaption span {
    color: #16A085;
    display: block;
    padding: 0.6em 0 1em;
}
figcaption p {
    color: #63707D;
    line-height: 1.3;
}
.align > li {
    height: auto;
    margin: 0 0 30px;
    min-height: 440px;
    padding: 0;
    width: 100%;
}
.book {
    margin: 0 auto;
}
figcaption {
    font-size: 90%;
    left: -80px;
    padding-left: 0;
    text-align: center;
    top: 250px;
    width: 320px;
}

</style>

<div class="component">

                <ul class="align">
                    <li>
                        <figure class='book'>

                            <!-- Front -->

                            <ul class='hardcover_front'>
                                <li>
                                    <div class="coverDesign custom">
                                        <span class="ribbon">BDAYA</span>
                                        <h1>كتاب حياتي</h1>
                                        <p>Book review website</p>
                                    </div>
                                </li>
                                <li></li>
                            </ul>

                            <!-- Pages -->

                            <ul class='page'>
                                <li></li>
                                <li>
                                    <a class="btn" href="{{ url('/login') }}">Sign in</a>
                                    <a class="btn" href="{{ url('/register') }}">Sign up</a>
                                    

                                </li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>

                            <!-- Back -->

                            <ul class='hardcover_back'>
                                <li></li>
                                <li></li>
                            </ul>
                            <ul class='book_spine'>
                                <li></li>
                                <li></li>
                            </ul>
                            <figcaption>
                                <h1>Welcome to our website</h1>
                            </figcaption>
                        </figure>
                    </li>
                </ul>
            </div>