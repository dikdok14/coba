
@foreach ($ce as $item)
   NAMA PASIEN : {{$item->pasien->nama}} <br>
   NAMA OBAT : {{$item->obat->nama}} <br>
   JUMLAH OBAT : {{$item->jumlah}} <br>
   HARGA SATUAN : {{$item->harga}} <br>
   JUMLAH :  {{$item->harga * $item->jumlah}} <br>
   <br>
@endforeach