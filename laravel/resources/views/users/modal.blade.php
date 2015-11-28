<div id="deleteUser" class="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Suppression d'un utilisateur</h4>
      </div>
      <div class="modal-body">
        <p>Voulez-vous vraiment supprimer l'utilisateur <span style="color: #0c84e4;">{!! $user->name !!}</span> ?</p>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Non</button>
        {!! Form::submit('Oui', array('class' => 'btn btn-primary')) !!}
      </div>
    </div>
  </div>
</div>
