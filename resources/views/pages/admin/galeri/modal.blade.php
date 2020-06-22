{{-- tambah --}}

<modal v-if="galeri.getModal('tambah')" v-on:modalclose="galeri.closeModal('tambah', false)" transition="fly-down">
	<template>
        @include('pages.admin.galeri.modal.tambah')
    </template>
</modal>

{{-- ubah --}}

<modal v-if="galeri.getModal('ubah')" v-on:modalclose="galeri.closeModal('ubah')" transition="fly-down">
	<template>
        {{-- @include('pages.admin.galeri.modal.ubah') --}}
    </template>
</modal>


{{-- Hapus --}}

<modal v-if="galeri.getModal('hapus')" v-on:modalclose="galeri.closeModal('hapus', false)" transition="fly-down">
    <template>
        @include('pages.admin.galeri.modal.hapus')
    </template>
</modal>