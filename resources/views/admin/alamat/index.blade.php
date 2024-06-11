@extends('layouts.admin.app')

@section('title', 'Kelola Alamat')

@section('content')
    <!--./Tabel User-->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        @if(session('status'))
                        <h4 class="alert alert-warning mb-2">{{session('status')}}</h4>
                        @endif
                        <div class="card-header bg-success">
                            <h3 class="card-title">Semua Alamat</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="w-full h-96 relative flex bg-gray-400" id="maps"></div>
  <div class=" bg-gray-300 w-full h-auto relative flex justify-center items-center">
    <div class="min-h-auto flex items-center bg-gray-300 py-2 px-4 sm:px-6 lg:px-8 rounded-xl">
      <div class="max-w-md w-full space-y-8">
          <div>
            <a href="/super/alamat/create">
            <button
              class=" mt-4 group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-800">
              Tambah Data
            </button>
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="py-6 bg-gray-300">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <!-- This example requires Tailwind CSS v2.0+ -->
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
                  @php
                  $i=1;
                  @endphp
                  @foreach ($maps as $m)
                    <tr>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">
                          Point {{ $i++; }}
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
                        <a href="{{ route('super.alamat.edit',$m->id) }}"
                          class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-800">
                          Edit Data
                        </a>
                        <form action="{{ route('super.alamat.destroy',$m->id) }}"
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
                    <!-- More rows... -->
                    
                  @endforeach
                  @foreach ($maps as $m)
                    @php
                    $a = '';
                    $a = $loop->index;
                    @endphp
                  @endforeach
                  <input type="hidden" value="{{ $a ?? ''}}" id="index">
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{asset('js/view.js')}}"></script>
</section>
@endsection
