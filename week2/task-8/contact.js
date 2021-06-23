const contactFormInputs = document.forms.namedItem('contact').elements;

const validateForm = (e) => {
  e.preventDefault();
  const inputs = Array.from(contactFormInputs).slice(0,contactFormInputs.length-1);
  let isMissing = false;

  for(let input of inputs){
    if(input.value === '' || (input.type === "select-one" && input.value === 'Gender')){
      input.setAttribute('style', 'border: 1px solid red !important');
      isMissing = true;
    }
  }

  if(!isMissing){
    for(let input of inputs){
      if(profanityCheck(input)){
        callSwal("error","No bad words are allowed on inputs");
        return;
      }
    }
    callSwal("success", "Contact info has been sent");
  }
  else
    callSwal("error", "Fill the missing part(s) of the form");

}

const profanityCheck = (input) => {
  const str = input.value;
  const regex = /(badword|word1|test|moron)/gi;

  if(regex.test(str)){
    input.value = str.replace(regex, (match) => { return match.replace(/./g, '*') });
    return true;
  }
  return false;
}

const callSwal = (icon, title) => {
  Swal.fire({
    icon: icon,
    title: title,
    showConfirmButton: false,
    timer: 1500
  })
}

const clearError = (e) => {
  e.target.setAttribute('style', 'border: none !important');
}