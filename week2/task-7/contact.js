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
    Swal.fire({
      icon: 'success',
      title: 'Contact info has been sent',
      showConfirmButton: false,
      timer: 1500
    })
  } else{
    Swal.fire({
      icon: 'error',
      title: 'Fill the missing part(s) of the form',
      showConfirmButton: false,
      timer: 1500
    })
  }
}

const clearError = (e) => {
  e.target.setAttribute('style', 'border: none !important');
}