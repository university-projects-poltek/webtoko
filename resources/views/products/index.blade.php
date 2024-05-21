<script src="https://cdn.tailwindcss.com"></script>

{{-- Post form --}}
<form method="POST" class="m-10" action="{{ route('product.simpan') }}">
  @csrf
  <h1 class="text-xl font-bold">Post Form</h1>
  <div class="mb-4">
    <label for="nama" class="block text-gray-700 font-medium mb-2">Nama:</label>
    <input type="text" id="nama" name="nama"
      class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
      required>
  </div>

  <div class="mb-4">
    <label for="deskripsi" class="block text-gray-700 font-medium mb-2">Deskripsi:</label>
    <textarea id="deskripsi" name="deskripsi"
      class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
      required></textarea>
  </div>

  <div class="mb-4">
    <label for="harga" class="block text-gray-700 font-medium mb-2">Harga:</label>
    <input type="number" id="harga" name="harga"
      class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
      required>
  </div>

  <div class="flex items-center justify-between">
    <button type="submit"
      class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Simpan</button>
  </div>
</form>

<div class="flex gap-2 flex-col m-10">
    <h1 class="font-bold text-3xl">List Product</h1>

    <table class="table-fixed  text-left">
        <thead>
            <tr>
                <th class="border border-slate-500 p-3">No</th>
                <th class="border border-slate-500 p-3">Name</th>
                <th class="border border-slate-500 p-3">Deksripsi</th>
                <th class="border border-slate-500 p-3">Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $index => $value)
                <tr clas>
                    <td class="p-2 border border-slate-700 text-center"> {{ $index + 1 }} </td>
                    <td class="p-2 border border-slate-700">{{ $value->nama }}</td>
                    <td class="p-2 border border-slate-700 w-25">{{ $value->deskripsi }}</td>
                    <td class="p-2 border border-slate-700">Rp.{{ number_format($value->harga) }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
