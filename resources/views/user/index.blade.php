@extends('layouts.app')

@section('title', 'User')

@section('content')
<div class="container-xl">
    <div class="col-md-12">
        <div class="card">
            <div class="card-table">
                {{-- pencarian lengkap --}}
                <x-datatable.filter target='user-table'>
                    <div class="col-md-4 pe-1">
                        <x-form-input name="name" label="Nama" floating />
                    </div>
                    <div class="col-md-4 pe-1">
                        <x-form-input name="email" label="Email" floating />
                    </div>
                    <div class="col-md-4 pe-1">
                        <x-form-select name="role" :options="$roleOption" label="Role" placeholder="Pilih Role" floating />
                    </div>
                </x-datatable.filter>

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