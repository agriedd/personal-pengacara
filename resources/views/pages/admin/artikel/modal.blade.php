{{-- tambah --}}

<modal v-if="artikel.getModal('tambah')" v-on:modalclose="artikel.closeModal('tambah', false)" transition="fly-down" size="lg">
	<template>
        @include('pages.admin.artikel.modal.tambah')
    </template>
</modal>

{{-- ubah --}}

<modal v-if="artikel.getModal('ubah')" v-on:modalclose="artikel.closeModal('ubah')" transition="fly-down" size="lg">
	<template>
        @include('pages.admin.artikel.modal.ubah')
    </template>
</modal>

{{-- Preview --}}

<modal v-if="artikel.getModal('preview')" v-on:modalclose="artikel.closeModal('preview', false)" transition="fly-down" size="lg">
    <template>
        @include('pages.admin.artikel.modal.preview')
    </template>
</modal>

{{-- Hapus --}}

<modal v-if="artikel.getModal('hapus')" v-on:modalclose="artikel.closeModal('hapus', false)" transition="fly-down">
    <template>
        @include('pages.admin.artikel.modal.hapus')
    </template>
</modal>