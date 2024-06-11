@extends('layouts.admin.app')

@section('title', 'Tambah alamat')

@section('content')
<div class="card card-success m-2">
    <div class="card-header">
      <h3 class="card-title">{{ __('Tambah alamat') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
        
  <div class="w-full h-96 relative flex bg-gray-400" id="maps"></div>
    <div class=" bg-gray-300 w-full h-auto relative flex justify-center items-center">
      <div class="min-h-auto flex items-center bg-gray-300 py-2 px-4 sm:px-6 lg:px-8 rounded-xl">
        <div class="max-w-md w-full space-y-8">
          <form class="mt-8 space-y-6" action="/super/alamat" method="POST">
            @csrf
            <div class="rounded-md shadow-sm -space-y-px">
              <div>
                <label for="provinsi" class="sr-only">Provinsi</label>
                <input id="provinsi" name="provinsi" type="text" required
                  class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                  placeholder="Provinsi">
              </div>
              <div>
                <label for="kotaorkab" class="sr-only">Kota/Kab</label>
                <input id="kotaorkab" name="kotaorkab" type="text" required
                  class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                  placeholder="Kota/Kab">
              </div>
              <div>
                <label for="latitude" class="sr-only">Latitude</label>
                <input id="latitude" name="latitude" type="text" required
                  class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                  placeholder="Latitude">
              </div>
              <div>
                <label for="longitude" class="sr-only">Longtitude</label>
                <input id="longitude" name="longitude" type="text" required
                  class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                  placeholder="Longitude">
              </div>
            </div>
            <div>
              <button type="submit"
                class=" -mt-3 group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-800">
                Tambah Data
              </button>
            </div>
          </form>
          <div>
            <a href="/super/alamat">
            <button
              class=" -mt-6 group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-800">
              Kembali
            </button>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="py-6 bg-gray-300">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex flex-col">
          <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
              <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                  <thead class="bg-gray-50">
                    <tr>
                      <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Label
                      </th>
                      <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Kabupaten/Kota
                      </th>
                      <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Provinsi
                      </th>
                      <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Latitude
                      </th>
                      <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Longitude
                      </th>
                      <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Edit</span>
                      </th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($maps as $m)
                      <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="text-sm text-gray-900">
                            Point {{ $m->id }}
                          </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="text-sm text-gray-900">
                            {{ $m->kotaorkab }}
                          </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <span class="text-sm text-gray-900">
                            {{ $m->provinsi }}
                          </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <span class="text-sm text-gray-900">
                            {{ $m->latitude }}
                          </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <span class="text-sm text-gray-900">
                            {{ $m->longitude }}
                          </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                          <a href="{{$m->id}}/edit"
                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-800">
                            Edit Data
                          </a>
                          <form action="{{$m->id}}"
                            method="post">
                            @method('delete')
                            @csrf
                            <button type="submit"
                              class="mt-2 group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-800">
                              Hapus Data
                            </button>
                          </form>
                        </td>
                      </tr>
                      <input type="hidden"
                      value="{{$m->id}}"
                      id="lab{{$loop->index}}">
                    <input type="hidden"
                      value="{{$m->kotaorkab}}"
                      id="kab{{$loop->index}}">
                    <input type="hidden"
                      value="{{$m->provinsi}}"
                      id="prov{{$loop->index}}">
                    <input type="hidden"
                      value="{{$m->latitude}}"
                      id="lat{{$loop->index}}">
                    <input type="hidden"
                      value="{{$m->longitude}}"
                      id="lon{{$loop->index}}">
                    @endforeach
                    @foreach ($maps as $m)
                      @php
                      $a = '';
                      $a = $loop->index;
                      @endphp
                    @endforeach
                    <input type="hidden" value="{{$a ?? ''}}" id="index">
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{asset('js/create.js')}}"></script>
@endsection
