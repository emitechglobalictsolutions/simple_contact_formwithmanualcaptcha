<form action="thankyou/index.php" method="post" class="php-email-form">
  <div class="form-row">
    <div class="col-md-6 form-group">
      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
      <div class="validate"></div>
    </div>
    <div class="col-md-6 form-group">
      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
      <div class="validate"></div>
    </div>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
    <div class="validate"></div>
  </div>
  <div class="form-group">
    <textarea class="form-control" name="comments" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
    <div class="validate"></div>
  </div>

  <!-- CAPTCHA Section -->
  <div class="form-row">
    <div class="col-md-6 form-group">
      <label for="captcha">Please enter the code shown below:</label>
      <img src="piccaptcha.jpg" alt="CAPTCHA" class="img-fluid mb-2">
    </div>
    <div class="col-md-6 form-group">
      <input type="text" name="captcha" class="form-control" id="captcha" placeholder="Enter CAPTCHA" data-msg="Please enter the CAPTCHA correctly" />
      <div class="validate"></div>
      <div id="captcha-error" style="color: red; display: none;">CAPTCHA entered is incorrect, Please enter it correctly with capital or small letters.</div>
    </div>
  </div>

  <div class="text-center">
    <button type="submit" id="submit-btn" disabled>Send Message</button>
  </div>
</form>

<!-- JavaScript -->
<script>
  document.getElementById('captcha').addEventListener('input', function() {
    const captchaInput = this.value;
    const submitButton = document.getElementById('submit-btn');
    const errorMessage = document.getElementById('captcha-error');
    
    // CAPTCHA code is case-sensitive and must match exactly "3BASee12"
    if (captchaInput === '3BASee12') {
      submitButton.disabled = false; // Enable submit button
      errorMessage.style.display = 'none'; // Hide error message
    } else {
      submitButton.disabled = true; // Disable submit button
      errorMessage.style.display = 'block'; // Show error message
    }
  });
</script>
