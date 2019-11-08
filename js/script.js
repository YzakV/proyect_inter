
// $('[data-target="#modal-inicio"]').trigger("click");
let expresion = /^[A-Za-z][0-9]{6,}$/;
let expresion1 = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/;
   
let boton_contra = document.getElementById("ver-contra");
boton_contra.onclick = (e) => {
   e.preventDefault();
   let element_contra = document.getElementById("contra");
   console.log(expresion.test(element_contra.value));
   if(element_contra.type == "password"){
      element_contra.type = "text";
   } else {
      element_contra.type = "password"
   }
   element_contra.focus();
};




