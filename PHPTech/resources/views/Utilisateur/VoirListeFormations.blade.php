
@extends ('Shared/Master_Layout')
@section ('content')

<!-- Styles -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="Css/Utilisateur/VoirListeFormations.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

<!-- Contenu -->
<div class="container">
    <div class="row">
    	<div class="col-md-12">
        <div class="card">
          <form>
          <div id="contact-form" class="form-container" data-form-container>
          <div class="row">
            <div class="form-title">
              <div id="titre">Liste des formations</div>
            </div>
          </div>

          <!-- Campus -->
          <select id="campus">
              <option value="one">Gabrielle-Roy</option>
              <option value="two">Félix-Leclerc</option>
          </select>
          <label  id="campus">Campus : </label>
          <div class="input-container">
            </div>

            <!-- Liste -->
              <table class="table table-hover" id="formations">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Date</th>
                    <th scope="col">Heure</th>
                    <th scope="col" id="thActions">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Enseigner dans l'aire de l'information</td>
                    <td>2018-11-22</td>
                    <td>15:30</td>
                    <td>
                      <button class="btn btn-primary"><i class="fa fa-eye"></i></button>
                      <button class="btn btn-warning"><i class="fa fa-clock-o"></i></button>
                      <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                  </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>La pédagogie en enseignement d'une langue seconde</td>
                    <td>2018-11-23</td>
                    <td>11:00</td>
                    <td>
                        <button class="btn btn-primary"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-success"><i class="fa fa-check"></i></button>
                        <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                  </td>
                  </tr>
                </tbody>
              </table>
          </div>
          </div>
          </form>
        </div>
		</div>
	</div>
</div>

<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="js/Utilisateur/VoirListeFormations.js"></script>

@endsection
