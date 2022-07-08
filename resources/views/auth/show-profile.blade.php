@extends('layouts.app')

@section('title', 'Pengaturan Akun')

@section('content')
<div class="container-xl">
    <div class="col-12">
        <div class="row row-cards">
            <div class="col-md-6 col-lg-3">
                <div class="card border-primary">
                    <div class="card-body p-4 text-center">
                        <span class="avatar avatar-xl mb-3 avatar-rounded bg-indigo">{{ $user->acronym }}</span>
                        <h2 class="m-0 "><a href="#">{{ $user->name }}</a></h2>
                        <div class="">{{ $user->email }}</div>
                        <div class="mt-3">
                            <span class="badge bg-indigo-lt">{{ Str::upper($user->roles->first()->name) }}</span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-9">
                @if(Session::has('message'))
                <div class="alert alert-important alert-success alert-dismissible" role="alert">
                    <div class="d-flex">
                        <div>
                            {{ Session::get('message') }}
                        </div>
                    </div>
                    <a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a>
                </div>
                @endif
                <div class="row row-cards">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Ubah Profil</h3>
                            </div>
                            <div class="card-body">
                                <x-form :action="route('profile-store')">
                                    @bind($user)
                                    <x-form-input name="name" label="Nama" />
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
                                <h3 class="card-title">Ubah Lama</h3>
                            </div>
                            <div class="card-body">
                                <x-form :action="route('profile-change-password', $user->id)">
                                    <x-form-input name="password_old" type="password" label="Password Sekarang" />
                                    <x-form-input name="password" type="password" label="Password Baru" />
                                    <x-form-input name="password_confirmation" type="password"
                                        label="Ulangi Password Baru" />

                                    <x-form-submit class="mt-3">Simpan</x-form-submit>
                                </x-form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection