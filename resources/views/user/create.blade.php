@extends('layouts.app')

@section('title', 'User')
@section('sub-title', 'Tambah')

@section('content')
<div class="container-xl">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="col-md-6">
                    <x-form :action="route('user.store')">
                        <h2 class="my-3">Profil</h2>
                        <x-form-input name="name" label="Nama"/>
                        <h2 class="my-3">Akun</h2>
                        <x-form-select name="role" :options="$roleOption" label="Role" placeholder="Pilih Role"/>
                        <x-form-input name="email" label="Email"/>
                        <x-form-input name="password" type="password" label="Password"/>
                        <x-form-input name="password_confirmation" type="password" label="Konfirmasi Password"/>
                        <x-form-submit class="mt-3">Simpan</x-form-submit>
                    </x-form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection