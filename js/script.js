
// $('[data-target="#modal-inicio"]').trigger("click");

let expression_pass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/, expression_user = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{5,}$/;
let inputs_pass = document.querySelectorAll("input[type=password]"), buttons_pass = document.querySelectorAll("button[class=input-group-text]"), buttons_send = document.querySelectorAll("input[type=submit]"); 
let form_registro = document.getElementById("form-registro"), user = document.getElementById("usuario");

let input_pass = inputs_pass[0], input_pass_confirm = inputs_pass[1];
// console.log(typeof(inputs_pass));
// console.log(inputs_pass[1]);
// console.log(buttons_pass);
// console.log(buttons_send);
let pass = false, confirm_pass = false, confirm_user = false;
   
buttons_pass[0].onclick = (e) => {
   e.preventDefault();
   console.log(expression_pass.test(input_pass.value)); 
   if(input_pass.type == "password"){
      input_pass.type = "text";
   } else {
      input_pass.type = "password"
   }
   input_pass.focus();
};
buttons_pass[1].onclick = (e) => {
   e.preventDefault();
   if(input_pass_confirm.type == "password"){
      input_pass_confirm.type = "text";
   } else {
      input_pass_confirm.type = "password"
   }
   input_pass_confirm.focus();
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

input_pass.oninput = () => {
   // console.log(expression_pass.test(input_pass.value));
   // console.log(typeof(input_pass.classList) + " classList");
   // console.log(typeof(input_pass.className) + " className");
   if(expression_pass.test(input_pass.value)){
      input_pass.classList.add("valid");
      input_pass.classList.remove("error");
      pass = true;
   } else {
      input_pass.classList.add("error");
      input_pass.classList.remove("valid");
      pass = false;
   }
};
input_pass_confirm.oninput = () => {
   let input_pass_util = input_pass.value;
   let input_pass_confirm_util = input_pass_confirm.value;
   if(input_pass_util == input_pass_confirm_util){
      input_pass_confirm.classList.add("valid");
      input_pass_confirm.classList.remove("error");
      confirm_pass = true;
   } else {
      input_pass_confirm.classList.add("error");
      input_pass_confirm.classList.remove("valid");
      confirm_pass = false;
   }
};

// buttons_send[0].onclick = e => {
//    console.log(pass);
//    console.log(confirm_pass);
//    if(pass == false && confirm_pass == false){
//       e.preventDefault();
//    }
// };

form_registro.onsubmit = e => {
   if(pass == false || confirm_pass == false){
      e.preventDefault();
   }
};