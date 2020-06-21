{{-- tambah --}}

<modal v-if="album.getModal('tambah')" v-on:modalclose="album.closeModal('tambah', false)" transition="fly-down">
	<template>
        @include('pages.admin.album.modal.tambah')
    </template>
</modal>

{{-- ubah --}}

<modal v-if="album.getModal('ubah')" v-on:modalclose="album.closeModal('ubah')" transition="fly-down">
	<template>
        @include('pages.admin.album.modal.ubah')
    </template>
</modal>


{{-- Hapus --}}

<modal v-if="album.getModal('hapus')" v-on:modalclose="album.closeModal('hapus', false)" transition="fly-down">
    <template>
        @include('pages.admin.album.modal.hapus')
    </template>
</modal>