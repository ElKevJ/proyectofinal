const imageInput = document.getElementById('imageInput');
const preview = document.getElementById('preview');

imageInput.addEventListener('change', function(event) {
  const file = event.target.files[0];
  if (file) {
    // Validar que sea una imagen por su tipo MIME
    if (file.type.startsWith('image/')) {
      const reader = new FileReader();
      reader.onload = function(e) {
        preview.src = e.target.result;
        preview.style.display = 'block';
      };
      reader.readAsDataURL(file);
    } else {
      alert('Por favor, selecciona un archivo de imagen válido (incluido GIF).');
    }
  } else {
    preview.src = '';
    preview.style.display = 'none';
  }
});