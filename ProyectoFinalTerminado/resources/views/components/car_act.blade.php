<style>
    .cards-container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      gap: 1rem;
      overflow: hidden; /* Para ocultar tarjetas fuera de la vista */
  }
  
  .card-wrapper {
      display: none; /* Ocultar por defecto */
      transition: transform 0.3s ease, opacity 0.3s ease;
  }
  
  .card-wrapper:hover .card {
      transform: scale(1.1); /* Ampliar al pasar el cursor */
  }
  
  .card {
      width: 18rem;
      cursor: pointer;
      overflow: hidden;
      transition: transform 0.3s ease;
  }
  
  </style>
  
  
   @foreach ($arreglo as $dato)
  <div class="card" data-bs-theme="dark" style="width: 18rem;">
      <img src="/subidas/{{ $dato->imagen_act }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"> {{ $dato->nom_act }}</h5>
        <p class="card-text">{{ $dato->desc_act }}</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">{{ $dato->pelfa_act }}</li>
      </ul>
      <div class="card-body">
        <a href="{{route('editaractores',$dato)}}" class="card-link">Editar</a>
        <form action="{{route('borraract',$dato)}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Eliminar</button>
      </form>
      </div>
    </div> 
    @endforeach
  
  