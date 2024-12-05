document.addEventListener('DOMContentLoaded', function(){
    const mensaje = document.getElementById('mensaje');
   if(mensaje) {
     setTimeout(() => {
        mensaje.remove();
    }, 2000);
   }

  });