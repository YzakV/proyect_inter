
let expression_user = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{5,}$/;
let user = document.getElementById("user"), grupoOpcion = document.querySelectorAll("[class*=contenedor-detalles]"), check = document.querySelectorAll("input[type=checkbox]"), tAreas = document.querySelectorAll("[id=textarea-detalles]"), labels = document.querySelectorAll("label[for^=radio]"), input_opcion = document.querySelectorAll("input[type=text][id^=opcion]");
// console.log(input_opcion);
// console.log(labels);
// console.log(tAreas);
let confirm_user = true, confirm_inputs = [], formHome = document.getElementById("form-home"), botonHome = document.getElementById("submit-home");

// user.onfocus = () => {
//    if(!expression_user.test(user.value)){
//       user.classList.add("error");
//       confirm_user = false;
//    } else {
//       confirm_user = true;
//    }
// };
// user.onfocusout = e => {
//    // console.log(e);
//    user.classList.remove("error");
//    user.classList.remove("valid");
// };
// user.oninput = e =>{
//    if(expression_user.test(user.value)){
//       user.classList.add("valid");
//       user.classList.remove("error");
//       confirm_user = true;
//    } else {
//       user.classList.add("error");
//       user.classList.remove("valid");
//       confirm_user = false;
//    }
// };
check[0].onchange = () => {
   if(check[0].checked){
      grupoOpcion[0].style.display = "block";
      tAreas[0].setAttribute("required", "");
   } else {
      grupoOpcion[0].style.display = "none";
      tAreas[0].removeAttribute("required");
   }
};
check[1].onchange = () => {
   if(check[1].checked){
      grupoOpcion[1].style.display = "block";
      tAreas[1].setAttribute("required", "");
   } else {
      grupoOpcion[1].style.display = "none";
      tAreas[1].removeAttribute("required");
   }
};
check[2].onchange = () => {
   if(check[2].checked){
      grupoOpcion[2].style.display = "block";
      tAreas[2].setAttribute("required", "");
   } else {
      grupoOpcion[2].style.display = "none";
      tAreas[2].removeAttribute("required");
   }
};

formHome.onsubmit = (e) => {
   // e.preventDefault();
   if(confirm_user){
      input_opcion.forEach(e => {
         if(e.value.length > 0){
            // console.log(e + "Esta lleno");
            confirm_inputs.push(true);
         } else {
            // console.log(e + "Esta vacio");
            confirm_inputs.push(false);

         }
      });
      let falso = confirm_inputs.indexOf(false); 
      // console.log(falso);
      if(falso != -1){
         // console.log("Alguno o todos estan vacios");
         input_opcion[falso].focus();
         e.preventDefault();
      } else {
         console.log("Todos estan llenos");
         // formHome.submit();
      }


   } else {
      e.preventDefault();
      user.focus();
   }
   
   


   
   // for(let i in input_opcion){
   //    console.log(input_opcion[i].value.length);
      
      // console.log(i);
      // console.log(input_opcion[i]);
   // }



   // if(input_opcion[0].value.length > 0){

   // }
   
   // console.log(confirm_opcion);
   // 
      
   //    
   // }
   confirm_inputs = [];
};
//===========================================================
// var guardar = document.querySelector('#submit-home')
// var form =  document.querySelector('#form-home')