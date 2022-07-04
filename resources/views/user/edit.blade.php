@extends('layouts.app')

@section('title', 'User')
@section('sub-title', 'Edit')

@section('content')
<div class="container-xl">
    <div class="col-12">
        <div class="row row-cards">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Ubah Profil</h3>
                    </div>
                    <div class="card-body">
                        <x-form :action="route('user.update', $user->id)" method="PATCH">
                            @bind($user)
                            <x-form-input name="name" label="Nama" />
                            <x-form-select name="role" :default="$user->roles->first()->id" :options="$roleOption"
                                label="Role" placeholder="Pilih Role" />
                            <x-form-input name="email" label="Email" />
                            @endbind
                            <x-form-submit class="mt-3">Simpan</x-form-submit>
                        </x-form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Ubah Password</h3>
                      </div>
                    <div class="card-body">
                        <x-form :action="route('user.change-password', $user->id)">
                            <x-form-input name="password" type="password" label="Password" />
                            <x-form-input name="password_confirmation" type="password" label="Konfirmasi Password" />

                            <x-form-submit class="mt-3">Simpan</x-form-submit>
                        </x-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection