<section class="mb-4 text-center mobile-form">
    <div class="form-box-mobile text-center">
        <!-- <h1 class="form_heading form_heading_scroll">Expert Technicians for your</h1>
                        <p>Apple brand</p> -->
        <div>
            <p class="form_heading form_heading_scroll">Expert Technicians <br>for your <span class="sentence"></span><span class="cursor blink">&nbsp;</span></p>
        </div>
        <form action="#" method="post">
            <input class="form-control my-2" id="page" type="hidden" name="page" value="<?= $this->uri->segment(1)?>">
            <div class="form-group">
                <input class="form-control my-2" id="name" type="text" name="Name" placeholder="Name">
            </div>
            <div class="form-group">
                <input class="form-control my-2" id="email" type="email" name="Email" placeholder="Email">
            </div>
            <div class="form-group">
                <input class="form-control my-2" id="phone" type="phone" name="phone" placeholder="Phone">
            </div>
            <div class="form-group">
                <input class="form-control my-2" id="location" type="location" name="location" placeholder="Location">
            </div>
            <div class="form-group">
                <textarea class="form-control my-2" id="message" rows="1" name="Message"
                    placeholder="Message"></textarea>
            </div>
            <button type="submit" name="submit" id="send-message" class="form-control btn check-price button my-1">
                <span id="shine-disaa" class="shine"></span>
                <span id="hideen-text" class="checkPriceBtn reqbtn">REQUEST CALL BACK</span></button>
    </div>
    </form>

</section>
<script>
    document.addEventListener('DOMContentLoaded', function () {
  const sentences = ["iPhone", "iPad ", "Apple Watch"]
  
  let currentIndex = 0;
  let offset = 0;
  const sentenceElement = document.querySelector('.sentence');
  let forwards = true;
  let skipCount = 0;
  const skipDelay = 15;
  const speed = 70;

  const updateSentence = () => {
    sentenceElement.textContent = sentences[currentIndex].substring(0, offset);
  };

  const handleAnimation = () => {
    if (forwards) {
      if (offset >= sentences[currentIndex].length) {
        if (++skipCount === skipDelay) {
          forwards = false;
          skipCount = 0;
        }
      }
    } else if (offset === 0) {
      forwards = true;
      currentIndex = (currentIndex + 1) % sentences.length;
    }

    if (skipCount === 0) {
      forwards ? offset++ : offset--;
    }

    updateSentence();
  };

  setInterval(handleAnimation, speed);
});
</script>