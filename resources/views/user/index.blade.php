@extends('layouts.app')

@section('title', 'User')

@section('content')
<div class="container-xl">
    <div class="col-md-12">
        {{-- filter pencarian --}}
        <x-datatable.filter-modal target="user-table">
            <x-form-input name="name" label="Nama" floating/>
            <x-form-input name="email" label="Email" floating/>
            <x-form-select name="role" :options="$roleOption" label="Role" placeholder="Pilih Role" floating/>
        </x-datatable.filter-modal>
        
        <div class="card">
            <div class="card-table">
                {{ $dataTable->table(['class' => 'table table-hover w-100 border-bottom']) }}
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-script')
    <script src="{{ asset('js/datatables/actions.js') }}"></script>
    {{ $dataTable->scripts() }}
@endsection