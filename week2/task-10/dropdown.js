const dropdownAnchorSymbols = document.querySelectorAll('.nav-item > a');

function change(){
  const icon = this.childNodes[1]; 
  if(icon.classList.value.includes("fa-plus")){
    icon.classList.remove('fa-plus');
    icon.classList.add('fa-minus');
  } else{
    icon.classList.remove('fa-minus');
    icon.classList.add('fa-plus');
  }
}

dropdownAnchorSymbols.forEach( a => {
  a.addEventListener("mouseover", change);
  a.addEventListener("mouseout", change);
})