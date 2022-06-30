<div class="modal modal-blur fade" id="datatable-filter" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pencarian</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="filter-datatable-form">
                    {{ $slot }}
                </div>
            </div>
            <div class="modal-footer">
                {!! Form::button('Cari', ['class' => 'submit-filter btn btn-success', 'data-target' => $target, 'value'=> 'submit']) !!}
                {!! Form::button('Reset', ['class' => 'submit-filter btn btn-outline-danger', 'data-target' => $target, 'value'=> 'reset']) !!}
            </div>
        </div>
    </div>
</div>