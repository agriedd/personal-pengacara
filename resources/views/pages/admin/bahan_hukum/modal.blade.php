{{-- tambah --}}

<modal v-if="bahan_hukum.getModal('tambah')" v-on:modalclose="bahan_hukum.closeModal('tambah', false)" transition="fly-down">
	<template>
        @include('pages.admin.bahan_hukum.modal.tambah')
    </template>
</modal>

{{-- ubah --}}

<modal v-if="bahan_hukum.getModal('ubah')" v-on:modalclose="bahan_hukum.closeModal('ubah')" transition="fly-down">
	<template>
        @include('pages.admin.bahan_hukum.modal.ubah')
    </template>
</modal>

{{-- Hapus --}}

<modal v-if="bahan_hukum.getModal('hapus')" v-on:modalclose="bahan_hukum.closeModal('hapus', false)" transition="fly-down">
    <template>
        @include('pages.admin.bahan_hukum.modal.hapus')
    </template>
</modal>