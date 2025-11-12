<div id="clientFormModal" class="modal-overlay">
  <div class="modal-box">
    <button class="close-btn" id="closeClientForm">&times;</button>
    <h2>Devenir client</h2>
    <form method="POST" action="{{ route('clients.store') }}">
      @csrf
      <input type="text" name="name" placeholder="Nom" required>
      <input type="text" name="prenoms" placeholder="Prénoms" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="text" name="telephone" placeholder="Téléphone" required>
      <input type="text" name="adresse" placeholder="Adresse" required>
      <select name="profession" required>
        <option value="" disabled selected>Choisissez votre profession</option>
        <option value="entrepreneur">Entrepreneur</option>
        <option value="etudiant">Étudiant</option>
        <option value="salarié">Salarié</option>
        <option value="freelance">Freelance</option>
        <option value="autre">Autre</option>
      </select>

      <button type="submit" class="btn">Envoyer</button>
    </form>
  </div>
</div>
