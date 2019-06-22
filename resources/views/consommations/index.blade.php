@extends('layout.default')
@section('content')
    

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">SENFORAGE</h4>
                  <p class="card-category"> Consommations
                      <a href="{{route('consommations.create')}}"><div class="btn btn-warning">Nouvel Consommation <i class="material-icons">add</i></div></a> 
                  </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="table-consommations">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Date
                        </th>
                        <th>
                          Prenom Client
                        </th>
                        <th>
                          Nom Client
                        </th>
                        <th>
                            Compteur
                          </th>
                          <th>
                             Valeur Consommation
                            </th>
                        <th>
                          Action
                          </th>
                      </thead>
                      <tbody>
                          
                      </tbody>
                     
                    </table>
                
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Enregitrement</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                @if(Session::has('message'))
                                {{ Session::get('message') }}
                                    
                              
                              
                                @push('scripts')
                                <script type="text/javascript">
                                $(document).ready(function () {
                                    $("#error-modal").modal({
                                        'show':true,
                                    })
                                });
                                </script>
                                    
                                @endpush
                                @endif
                        
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      @endsection

      @push('scripts')
      <script type="text/javascript">
      $(document).ready(function () {
          $('#table-consommations').DataTable( { 
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('consommations.list')}}",
            columns: [
                    { data: 'id', name: 'id' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'compteur.abonnement.client.user.firstname', name: 'compteur.abonnement.client.user.firstname' },
                    { data: 'compteur.abonnement.client.user.name', name: 'compteur.abonnement.client.user.name' },
                    { data: 'compteur.numero_serie', name: 'compteur.numero_serie' },
                    { data: 'valeur', name: 'valeur' },
                    { data: null ,orderable: false, searchable: false}

                ],
                "columnDefs": [
                        {
                        "data": null,
                        "render": function (data, type, row) {
                        url_e =  "{!! route('consommations.show',':id')!!}".replace(':id', data.id);
                        return '<a href='+url_e+'  class=" btn btn-primary " ><i class="material-icons">edit</i></a>';
                        },
                        "targets": 6
                        },
                    // {
                    //     "data": null,
                    //     "render": function (data, type, row) {
                    //         url =  "{!! route('clients.edit',':id')!!}".replace(':id', data.id);
                    //         return check_status(data,url);
                    //     },
                    //     "targets": 1
                    // }
                ],
              
          });
      });
      </script>

          
      @endpush