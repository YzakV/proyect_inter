
// $('[data-target="#modal-inicio"]').trigger("click");

let expresion = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/;
let element_contra = document.getElementById("contra");
   
let boton_contra = document.getElementById("ver-contra");
boton_contra.onclick = (e) => {
   e.preventDefault();
   console.log(expresion.test(element_contra.value)); 
   if(element_contra.type == "password"){
      element_contra.type = "text";
   } else {
      element_contra.type = "password"
   }
   element_contra.focus();
};

element_contra.oninput = () => {
   console.log(expresion.test(element_contra.value));
   console.log(element_contra.classList);
   if(expresion.test(element_contra.value)){
      element_contra.classList.add("valid");
      element_contra.classList.remove("error");
   } else {
      element_contra.classList.add("error");
      element_contra.classList.remove("valid");
   }
};




