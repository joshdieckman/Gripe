const emailInput = document.getElementById("email");
const passwordInput = document.getElementById("password");

/*Validators*/

// Must contain a lowercase, uppercase letter and a number

// Must be a valid email address
function isValidEmail(email) {
  return /^[^@]+@[^@.]+\.[a-z]+$/i.test(email);
}

function isValidPassword(password) {
  return /[a-z]/.test(password) && /[A-Z]/.test(password) && /[0-9]/.test(password);
}

/* Set up Events*/

function showOrHideTip(show, element) {
  // show element when show is true, hide when false
  if (show) {
    element.style.display = "inherit";
  } else {
    element.style.display = "none";
  }
}

function createListener(validator) {
  return e => {
    const text = e.target.value;
    const valid = validator(text);
    const showTip = text !== "" && !valid;
    const tooltip = e.target.nextElementSibling;
    showOrHideTip(showTip, tooltip);
  };
}

emailInput.addEventListener("input", createListener(isValidEmail));

passwordInput.addEventListener("input", createListener(isValidPassword));
