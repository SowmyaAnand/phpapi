// Wait for the DOM to be ready
$(function() {

   
  $("form[name='update_profile']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side

      fname:{
        required:true
      },
      mobile:{
        required:true,
        numberonly:true,
        maxlength:10,
        minlength:10
      },
      email: {
        required: true
        // Specify that email should be validated
        // by the built-in "email" rule
        //email: true
      },
      password:"required"

    },
    // Specify validation error messages
    messages: {
      fname: "Please enter your firstname",
      mobile: "Please enter your mobile",
      email: "Please enter a username",
      password: "Please enter your password"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();

    }
  });


   $("form[name='add_question']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      question:{
        required:true,
        // lettersonly:true
      },
      type:{
        required:true,
        // lettersonly:true
      }
      
     },
    // Specify validation error messages
    messages: {
      question: "Please enter your question",
      type: "Please choose question type"
      
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });


$.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-z]+$/i.test(value);
}, "Letters only please");

$.validator.addMethod("numberonly", function(value, element) {
  return this.optional(element) || /^[0-9.]+$/i.test(value);
}, "Number only please");