<div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-danger">
          <h5 class="modal-title" id="exampleModalLabel">Confirmação</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

          {!! Form::open([ 'method' => 'delete', 'class' => '']) !!}
                @include('formulario.submit', ['name' => 'Excluir',
                        'attributes' => [
                            'class' => 'btn btn-danger',                            
                        ]
                ])     

            {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>