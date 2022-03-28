// import { Toast } from "../toast/toast.js";

//phone number validation pattern
$.validator.addMethod(
  "phoneNumber",
  function (value, element) {
    var regex = /^[6-9]{1}[0-9]{9}$/;
    return this.optional(element) || regex.test(value);
  },
  "Please enter valid phone number"
);

//login form validation
export const loginForm = () => {
  return $("#loginForm").validate({
    errorClass: "is-invalid",
    errorElement: "span",
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 6,
      },
    },
    messages: {
      email: {
        required: "Please enter your email address",
        email: "Please enter a valid email address",
      },
      password: {
        required: "Please enter your password",
        minlength: "Your password must be at least 6 characters long",
      },
    },
  });
};

//signup form validation
export const signUpForm = () => {
  return $("#signUpForm").validate({
    rules: {
      name: {
        required: true,
        minlength: 3,
      },
      email: {
        required: true,
        email: true,
      },
      phone: {
        required: true,
        minlength: 10,
        phoneNumber: true,
      },
      password: {
        required: true,
        minlength: 6,
      },
      confirmPassword: {
        required: true,
        minlength: 6,
        equalTo: "#signUpPass",
      },
    },
    messages: {
      name: {
        required: "Please enter your name",
        minlength: "Your name must be at least 3 characters long",
      },
      phone: {
        required: "Please enter your phone number",
        minlength: "Phone number must be 10 characters long",
      },
      email: {
        required: "Please enter your email address",
        email: "Please enter a valid email address",
      },
      password: {
        required: "Please enter your password",
        minlength: "Your password must be at least 6 characters long",
      },
      confirmPassword: {
        required: "Please enter your password",
        minlength: "Your password must be at least 6 characters long",
        equalTo: "Password does not match",
      },
    },
  });
};

//newsletter form validation
export const newsLetterForm = () => {
  return $(".footer-newsletter-form").validate({
    errorClass: "is-invalid",
    rules: {
      email: {
        required: true,
        email: true,
      },
    },
    messages: {
      email: {
        required: "Please enter your email address",
        email: "Please enter a valid email address",
      },
    },
  });
};

// contact form validations
export const contactForm = () => {
  return $("#contact-form").validate({
    errorClass: "is-invalid",
    errorElement: "span",
    rules: {
      name: {
        required: true,
        minlength: 3,
      },
      email: {
        required: true,
        email: true,
      },
      phone: {
        required: true,
        minlength: 10,
        phoneNumber: true,
      },
      message: {
        required: true,
        minlength: 10,
      },
    },
    messages: {
      name: {
        required: "Please enter your name",
        minlength: "Your name must be at least 3 characters long",
      },
      email: {
        required: "Please enter your email address",
        email: "Please enter a valid email address",
      },
      phone: {
        required: "Please enter your phone number",
        minlength: "Phone number must be 10 characters long",
      },
      message: {
        required: "Please enter your message",
        minlength: "Your message must be at least 10 characters long",
      },
    },
  });
};

// forgot-password form
export const passwordForm = () => {
  return $("#password-form").validate({
    errorClass: "is-invalid",
    errorElement: "span",
    rules: {
      email: {
        required: true,
        email: true,
      },
      phone: {
        required: true,
        minlength: 10,
        phoneNumber: true,
      },
    },
    messages: {
      email: {
        required: "Please enter your email address",
        email: "Please enter a valid email address",
      },
      phone: {
        required: "Please enter your phone number",
        minlength: "Phone number must be 10 characters long",
      },
    },
    submitHandler: function (form) {
      $("#MyForm").css({ padding: "40px", "margin-top": "150px" });
      $("#MyForm").show(500);
      // $("#MyForm").css("padding", "10px");
      $("#password-form").hide(500);
    },
    //
  });
};
