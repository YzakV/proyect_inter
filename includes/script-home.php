<script>
   let expression_user = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{5,}$/;
   let user = document.getElementById("user"), grupoOpcion = document.querySelectorAll("[class*=contenedor-detalles]"), check = document.querySelectorAll("input[type=checkbox]"), tAreas = document.querySelectorAll("[id=textarea-detalles]");
   console.log(tAreas);

   let confirm_user = false;

   user.onfocus = () => {
      if(!expression_user.test(user.value)){
         user.classList.add("error");
         confirm_user = false;
      }
   };
   user.onfocusout = e => {
      // console.log(e);
      user.classList.remove("error");
      user.classList.remove("valid");
   };
   user.oninput = e =>{
      if(expression_user.test(user.value)){
         user.classList.add("valid");
         user.classList.remove("error");
         confirm_user = true;
      } else {
         user.classList.add("error");
         user.classList.remove("valid");
         confirm_user = false;
      }
   };
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



   let formHome = document.getElementById("form-home"), botonHome = document.getElementById("submit-home");
   botonHome.onclick = () => {
      formHome.submit();
   };
</script>