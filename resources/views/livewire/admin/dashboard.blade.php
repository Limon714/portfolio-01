<main>
    @if (session()->has('status'))
    <h4 class="ml-72 bg-orange-400 text-center rounded p-4 text-white w-[50%]">  {{ session('status') }}</h4>
       
    @endif

   <form action="" method="POST" class="p-2 w-[50%] ml-72 grid grid-rows-3 gap-1">
    @csrf
    <label for="">Sub Heading</label>
    <input type="text" name="subheading" value="{{ $data[0]->subheading }}"
    class="outline-none p-2">

    
    <label for="" class="text-3xl text-black font-bold"> Heading</label>
    <input type="text" name="heading" value="{{ $data[0]->heading }}" class="outline-none p-2">

    <input type="submit" name="add_to_update" value="@if(count($data)>0) Update @else Add
     @endif" class="bg-blue-800 rounded p-2 text-white cursor-pointer mt-2 hover:bg-orange-500">

     <input type="hidden" name="id" value="{{ $data[0]->id }}">
   </form>
</main>
