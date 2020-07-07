{{-- tambah --}}

{{-- <modal v-if="user.getModal('tambah')" v-on:modalclose="user.closeModal('tambah', false)" transition="fly-down" size="lg">
	<template>
        @include('pages.admin.user.modal.tambah')
    </template>
</modal> --}}

{{-- ubah --}}

<modal v-if="user.getModal('ubah')" v-on:modalclose="user.closeModal('ubah')" transition="fly-down" size="lg">
	<template>
        @include('pages.admin.user.modal.ubah')
    </template>
</modal>

{{-- Preview --}}

{{-- <modal v-if="user.getModal('preview')" v-on:modalclose="user.closeModal('preview', false)" transition="fly-down" size="lg">
    <template>
        @include('pages.admin.user.modal.preview')
    </template>
</modal> --}}

{{-- Hapus --}}

{{-- <modal v-if="user.getModal('hapus')" v-on:modalclose="user.closeModal('hapus', false)" transition="fly-down">
    <template>
        @include('pages.admin.user.modal.hapus')
    </template>
</modal> --}}