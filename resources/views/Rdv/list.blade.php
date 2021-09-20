@extends('layouts.app')
@section('content')
      <div class="container w-75">
          <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-code-tab" data-bs-toggle="pill" data-bs-target="#pills-code" type="button" role="tab" aria-controls="pills-code" aria-selected="true">
                      Seances de Code
                  </button>
              </li>
              <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-conduite-tab" data-bs-toggle="pill" data-bs-target="#pills-conduite" type="button" role="tab" aria-controls="pills-conduite" aria-selected="false">
                      Seances de Conduite
                  </button>
              </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-code" role="tabpanel" aria-labelledby="pills-code-tab">
                  <table class="table table-striped text-center">
                      <tr>
                          <th>Date et heure</th>
                          <th>Moniteur</th>
                          <th class="float-right">Actions</th>
                      </tr>
                      @foreach($rdvs_code as $rdv)
                          <tr class="{{ $rdv->reserved?"table-danger":"" }}">
                              <td>{{ $rdv->date_name }}</td>
                              <td>{{ $rdv->firstName }} {{ $rdv->lastName }}</td>
                              <td>
                                  <form method="POST" action='/rdv/reserver/{{ $rdv->id }}' class="float-right">
                                      @csrf
                                      <button type="submit"
                                              class="btn {{ $rdv->reserved?"btn-secondary disabled":"btn-success" }}">
                                          Reserver
                                      </button>
                                  </form>
                              </td>
                          </tr>
                      @endforeach
                  </table>
              </div>
              <div class="tab-pane fade" id="pills-conduite" role="tabpanel" aria-labelledby="pills-conduite-tab">
                  <table class="table table-striped text-center">
                      <tr>
                          <th>Date et heure</th>
                          <th>Moniteur</th>
                          <th class="float-right">Actions</th>
                      </tr>
                      @foreach($rdvs_conduite as $rdv)
                          <tr class="{{ $rdv->reserved?"table-danger":"" }}">
                              <td>{{ $rdv->date_name }}</td>
                              <td>{{ $rdv->firstName }} {{ $rdv->lastName }}</td>
                              <td>
                                  <form method="POST" action='/rdv/reserver/{{ $rdv->id }}' class="float-right">
                                      @csrf
                                      <button type="submit"
                                              class="btn {{ $rdv->reserved?"btn-secondary disabled":"btn-success" }}">
                                          Reserver
                                      </button>
                                  </form>
                              </td>
                          </tr>
                      @endforeach
                  </table>
              </div>
              <a class="btn btn-primary float-end" href="/rdv/ajouter">Ajouter un rendez-vous</a>

          </div>
    </div>
@endsection
