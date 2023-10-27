<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table table-striped" id="consultations-table">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Téléphone</th>
                <th>Date d'enregistrement</th>
                <th>Date consultation</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($consultations as $consultation)
                <tr>
                    <td>{{ $consultation->nom }}</td>
                    <td>{{ $consultation->prenom }}</td>
                    <td>{{ $consultation->telephone }}</td>
                    <td>{{ $consultation->date_enregistrement }}</td>
                    <td>{{ $consultation->date_consultation }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['consultations.destroy', $consultation->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('consultations.show', [$title,$consultation->id]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-eye"></i>
                            </a>
                            {{-- <a href="{{ route('consultations.edit', [$consultation->id]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!} --}}
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
            @include('adminlte-templates::common.paginate', ['records' => $consultations])
        </div>
        <div class="float-left">
                                <button type="button" class="btn btn-default swalDefaultQuestion">
                                    <i class="fas fa-download"></i> @lang('crud.export')
                                </button>
                                <button type="button" class="btn btn-default swalDefaultQuestion">
                                    <i class="fas fa-file-import"></i> @lang('crud.import')
                                </button>
        </div>
    </div>
</div>
