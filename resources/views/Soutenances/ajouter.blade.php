@extends('layouts.mainlayouts')

@section('contenu')
<div class="pagetitle">
    <h1>Tableau Bord</h1>
    <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="dashboard">Accueil</a></li>
        <li class="breadcrumb-item active">Nouvelle soutenance</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Formulaire ajouter soutenance----->

          <div class="col-12">
            <div class="card recent-sales overflow-auto">
              <div class="card-body">
                <h5 class="card-title">ajout d'une soutenance </h5>

              <form method="POST" action="{{route('etudiants.store')}}" class="row g-3">
              <div class="col-md-6">
                <label for="inputName5" class="form-label">Date</label>
                <input type="date" class="form-control" name="date">
              </div>

              <div class="col-md-6">
                <label for="inputEmail5" class="form-label">Heure</label>
                <input type="text" class="form-control" name="heure">
              </div>

              <div class="col-md-6">
                <label for="inputPassword5" class="form-label">Statut</label>
                <input type="text" class="form-control" name="statut">
              </div>

              <div class="col-md-6">
                <label for="" class="form-label">Juries</label>
                <select class="form-control" style="height: 38px; "  name="juries_id">
                    <option>Selectionner un jury</option>

                </select>
            </div>

            <div class="col-md-6">
            <label for="" class="form-label">Salles</label>
           <select class="form-control" style="height: 38px; "  name="salle_id">
            <option>Selectionner une salle</option>

        </select>
        </div>

        <div class="col-md-6">
        <label for="" class="form-label">Demandes</label>
        <select class="form-control" style="height: 38px; "  name="demandes_id">
       <option>Selectionner une demande</option>

       </select>
        </div>

        <div class="col-md-6">
        <label for="" class="form-label">Users</label>
        <select class="form-control" style="height: 38px; "  name="users_id">
        <option>Selectionner un user</option>

        </select>
        </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-danger">Annuler</button>
              </div>
            </form>

              </div>

            </div>
          </div>
          <!-- End Formulaire ajouter soutenance---->

        </div>
      </div>
      <!-- End Left side columns -->

    </div>
  </section>
  @include('require.footer')

@endsection
