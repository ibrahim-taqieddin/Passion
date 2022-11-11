@extends('layout.master')
@section('content')
    


    <!-- Header Start -->
    
    <!-- Header End -->
<style>
/* color:  red#ec1c24, black#212d31, grey#343a40, white#eee  */
* {
  box-sizing: border-box;
}

body {
  padding: 1rem;
  color: #212d31;
  font-family: 'Roboto', sans-serif;
}

.contain {
  background-color: #eee;
  max-width: 1170px;
  margin-left: auto;
  margin-right: auto;
  padding: 1em;
}

div.form {
  background-color: #eee;
}
.contact-wrapper {
  margin: auto 0;
}

.submit-btn {
  float: left;
}
.reset-btn {
  float: right;
}

.form-headline:after {
  content: "";
  display: block;
  width: 10%;
  padding-top: 10px;
  border-bottom: 3px solid #ff5601;
}

.highlight-text {
  color: #ff5601;
}

.hightlight-contact-info {
  font-weight: 700;
  font-size: 22px;
  line-height: 1.5;
}

.highlight-text-grey {
  font-weight: 500;
}

.email-info {
    margin-top: 20px;
}

::-webkit-input-placeholder { /* Chrome */
  font-family: 'Roboto', sans-serif;
}

.required-input {
  color: black;
}
@media (min-width: 600px) {
  .contain {
    padding: 0;
  }
}

h3,
ul {
  margin: 0;
}

h3 {
  margin-bottom: 1rem;
}

.form-input:focus,
textarea:focus{
  outline: 1.5px solid #ff5601;
}

.form-input,
textarea {
  width: 100%;
  border: 1px solid #bdbdbd;
  border-radius: 5px;
}

.wrapper > * {
  padding: 1em;
}
@media (min-width: 700px) {
  .wrapper {
    display: grid;
    grid-template-columns: 2fr 1fr;
  }
  .wrapper > * {
    padding: 2em 2em;
  }
}

ul {
  list-style: none;
  padding: 0;
}

.contacts {
  color: #212d31;
}

.form {
  background: #fff;
}

form {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 20px;
}
form label {
  display: block;
}
form p {
  margin: 0;
}

.full-width {
  grid-column: 1 / 3;
}

button,
.submit-btn,
.form-input,
textarea {
  padding: 1em;
}

button, .submit-btn {
  background: transparent;
  border: 1px solid #ff5601;
  color: #ff5601;
  border-radius: 15px;
  padding: 5px 20px;
  text-transform: uppercase;
}
button:hover, .submit-btn:hover,
button:focus , .submit-btn:focus{
  background: #ff5601;
  outline: 0;
  color: #eee;
}
.error {
  color: #ff5601;
}


    </style>

    <!-- Contact Start -->
{{--     
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Contact</h5>
                <h1>We Will Be Very Happy To Hear From You!</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-secondary rounded p-5">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control border-0 p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control border-0 py-3 px-4" rows="5" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Contact End -->
    <div class="contain">

        <div class="wrapper">
      
          <div class="form">
            <h4>KEEP IN TOUCH</h4>
            <h2 class="form-headline">We Are Very Happy To Hear From You !</h2>
            <form id="submit-form" action="">
              <p>
                <input id="name" class="form-input" type="text" placeholder="Your Name*">
                <small class="name-error"></small>
              </p>
              <p>
                <input id="email" class="form-input" type="email" placeholder="Your Email*">
                <small class="name-error"></small>
              </p>
              <p class="full-width">
                <input id="company-name" class="form-input" type="text" placeholder="Company Name*" required>
                <small></small>
              </p>
              <p class="full-width">
                <textarea  minlength="20" id="message" cols="30" rows="7" placeholder="Your Message*" required></textarea>
                <small></small>
              </p>
              <p class="full-width">
                <input type="checkbox" id="checkbox" name="checkbox" checked> Yes, I would like to receive communications by call / email about Company's services.
              </p>
              <p class="full-width">
                <input type="submit" class="submit-btn" value="Submit" onclick="checkValidations()">
                <button class="reset-btn" onclick="reset()">Reset</button>
              </p>
            </form>
          </div>
      
          <div class="contacts contact-wrapper">
      
            <ul>
              <li>We've driven online revenues of over <span class="highlight-text-grey">$2
                  billion</span> for our clients. Ready to know
                how we can help you?</li>
              <span class="hightlight-contact-info">
                <li class="email-info"><i class="fa fa-envelope" aria-hidden="true"></i> info@thefirststep.com</li>
                <li><i class="fa fa-phone" aria-hidden="true"></i> <span class="highlight-text">+962-798469907</span></li>
              </span>
            </ul>
          </div>
        </div>
      </div>

<script>
    const nameEl = document.querySelector("#name");
const emailEl = document.querySelector("#email");
const companyNameEl = document.querySelector("#company-name");
const messageEl = document.querySelector("#message");

const form = document.querySelector("#submit-form");

function checkValidations() {
  let letters = /^[a-zA-Z\s]*$/;
  const name = nameEl.value.trim();
  const email = emailEl.value.trim();
  const companyName = companyNameEl.value.trim();
  const message = messageEl.value.trim();
  if (name === "") {
     document.querySelector(".name-error").classList.add("error");
      document.querySelector(".name-error").innerText =
        "Please fill out this field!";
  } else {
    if (!letters.test(name)) {
      document.querySelector(".name-error").classList.add("error");
      document.querySelector(".name-error").innerText =
        "Please enter only characters!";
    } else {
      
    }
  }
  if (email === "") {
     document.querySelector(".name-error").classList.add("error");
      document.querySelector(".name-error").innerText =
        "Please fill out this field!";
  } else {
    if (!letters.test(name)) {
      document.querySelector(".name-error").classList.add("error");
      document.querySelector(".name-error").innerText =
        "Please enter only characters!";
    } else {
      
    }
  }
}

function reset() {
  nameEl = "";
  emailEl = "";
  companyNameEl = "";
  messageEl = "";
  document.querySelector(".name-error").innerText = "";
}

</script>
@endsection