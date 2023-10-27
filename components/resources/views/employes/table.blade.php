<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table table-striped" id="employes-table">
            <thead>
            <tr>
                <th>Fonction Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Adresse</th>
                <th>Date Naissance</th>
                <th>Cin</th>
                <th>Date Embauche</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($employes as $employe)
                <tr>
                    <td>{{ $employe->fonction_id }}</td>
                    <td>{{ $employe->nom }}</td>
                    <td>{{ $employe->prenom }}</td>
                    <td>{{ $employe->email }}</td>
                    <td>{{ $employe->telephone }}</td>
                    <td>{{ $employe->adresse }}</td>
                    <td>{{ $employe->date_naissance }}</td>
                    <td>{{ $employe->cin }}</td>
                    <td>{{ $employe->date_embauche }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['employes.destroy', $employe->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('employes.show', [$employe->id]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('employes.edit', [$employe->id]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $employes])
        </div>
        <div class="float-left">
                                <button type="button" class="btn btn-default swalDefaultQuestion">
                                    <i class="fas fa-download"></i> Exporter
                                </button>
                                <button type="button" class="btn btn-default swalDefaultQuestion">
                                    <i class="fas fa-file-import"></i> Importer
                                </button>
        </div>
    </div>
</div>
