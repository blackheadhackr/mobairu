<div class="position-sticky " style="top: 2rem;" id="form">
    <div class=" mb-0 form-sec">
        <div class="form-box">
            <div>
                <p class="form_heading form_heading_scroll">Expert Technicians <br>for your <span class="typed-text">
                    </span><span class="cursor blink">&nbsp;</span></p>
            </div>
            <form action="#" method="post">
                <input class="form-control" id="page" type="hidden" name="page" value="<?= $this->uri->segment(1)?>">
                <div class="form-group">
                    <label for="name" class="my-1">Name</label>
                    <input class="form-control" id="name" type="text" name="Name">
                </div>
                <div class="form-group">
                    <label for="email" class="my-1">Email</label>
                    <input class="form-control" id="email" type="email" name="Email">
                </div>
                <div class="form-group">
                    <label for="phone" class="my-1">Mobile No.</label>
                    <input class="form-control" id="phone" type="phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="location" class="my-1">Location</label>
                    <input class="form-control" id="location" type="location" name="location">
                </div>
                <div class="form-group">
                    <label for="message" class="my-1">Message</label>
                    <textarea class="form-control" id="message" rows="1" name="Message"></textarea>
                </div>
                <button type="submit" name="submit" id="send-message" class="form-control btn check-price button my-1">
                    <span id="shine-disaa" class="shine"></span>
                    <span id="hideen-text" class="checkPriceBtn reqbtn">REQUEST CALL BACK</span></button>
        </div>
        </form>
    </div>
</div>

<script>
const typedText = document.querySelector(".typed-text");
const cursor = document.querySelector(".cursor");

const textArray = ["iPhone", "iPad ", "Apple Watch"];

let textArrayIndex = 0;
let charIndex = 0;

const erase = () => {
    if (charIndex > 0) {
        cursor.classList.remove('blink');
        typedText.textContent = textArray[textArrayIndex].slice(0, charIndex - 1);
        charIndex--;
        setTimeout(erase, 80);
    } else {
        cursor.classList.add('blink');
        textArrayIndex++;
        if (textArrayIndex > textArray.length - 1) {
            textArrayIndex = 0;
        }
        setTimeout(type, 1000);
    }
}

const type = () => {
    if (charIndex <= textArray[textArrayIndex].length - 1) {
        cursor.classList.remove('blink');
        typedText.textContent += textArray[textArrayIndex].charAt(charIndex);
        charIndex++;
        setTimeout(type, 120);
    } else {
        cursor.classList.add('blink');
        setTimeout(erase, 1000);
    }
}

document.addEventListener("DOMContentLoaded", () => {
    type();
})

var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) {
        delta /= 2;
    }

    if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
    }

    setTimeout(function() {
        that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i = 0; i < elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
            new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};
</script>