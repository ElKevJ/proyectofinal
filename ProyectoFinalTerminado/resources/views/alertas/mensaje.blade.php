<div>

    @if (session('mensaje'))

       <div class="alert alert-danger" id="mensaje">
          {{session('mensaje')}}
       </div>
        
    @endif

<script src="/js/notifiacion.js"></script>
</div>